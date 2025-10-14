<?php

namespace App;

use Illuminate\Support\Facades\Storage;

abstract class SlimStatus
{
    const FAILURE = 'failure';
    const SUCCESS = 'success';
}

class Slim
{
    public static function getImages($inputName = 'slim')
    {
        $values = Slim::getPostData($inputName);

        // test for errors
        if ($values === false) {
            return false;
        }

        // determine if contains multiple input values, if is singular, put in array
        $data = array();
        if (!is_array($values)) {
            $values = array($values);
        }

        // handle all posted fields
        foreach ($values as $value) {
            $inputValue = Slim::parseInput($value);
            if ($inputValue) {
                array_push($data, $inputValue);
            }
        }

        // return the data collected from the fields
        return $data;
    }

    // $value should be in JSON format
    private static function parseInput($value)
    {
        // if no json received, exit, don't handle empty input values.
        if (empty($value)) {
            return null;
        }

        $value = stripslashes($value);

        // The data is posted as a JSON String so to be used it needs to be deserialized first
        $data = json_decode(stripcslashes($value));

        $input = null;
        $actions = null;
        $output = null;
        $meta = null;

        if (isset($data->input)) {
            $inputData = null;
            if (isset($data->input->image)) {
                $inputData = Slim::getBase64Data($data->input->image);
            } else if (isset($data->input->field)) {
                $filename = $_FILES[$data->input->field]['tmp_name'];
                if ($filename && Slim::isImage($filename)) {
                    $inputData = file_get_contents($filename);
                }
            }

            $input = array(
                'data' => $inputData,
                'name' => $data->input->name,
                'type' => $data->input->type,
                'size' => $data->input->size,
                'width' => $data->input->width,
                'height' => $data->input->height,
            );
        }

        if (isset($data->output)) {
            $outputData = null;
            if (isset($data->output->image)) {
                $outputData = Slim::getBase64Data($data->output->image);
            } else if (isset($data->output->field)) {
                $filename = $_FILES[$data->output->field]['tmp_name'];
                if ($filename && Slim::isImage($filename)) {
                    $outputData = file_get_contents($filename);
                }
            }

            $output = array(
                'data' => $outputData,
                'name' => $data->output->name,
                'type' => $data->output->type,
                'width' => $data->output->width,
                'height' => $data->output->height
            );
        }

        if (isset($data->actions)) {
            $actions = array(
                'crop' => $data->actions->crop ? array(
                    'x' => $data->actions->crop->x,
                    'y' => $data->actions->crop->y,
                    'width' => $data->actions->crop->width,
                    'height' => $data->actions->crop->height,
                    'type' => $data->actions->crop->type
                ) : null,
                'size' => $data->actions->size ? array(
                    'width' => $data->actions->size->width,
                    'height' => $data->actions->size->height
                ) : null,
                'rotation' => $data->actions->rotation,
                'filters' => $data->actions->filters ? array(
                    'sharpen' => $data->actions->filters->sharpen
                ) : null
            );
        }

        if (isset($data->meta)) {
            $meta = $data->meta;
        }

        // We've sanitized the base64data and will now return the clean file object
        return array(
            'input' => $input,
            'output' => $output,
            'actions' => $actions,
            'meta' => $meta
        );
    }

    private static function isImage($filename)
    {
        return @exif_imagetype($filename);
    }

    public static function saveFile($data, $name, $path = currentmediapath, $uid = true)
    {
        // Add trailing slash if omitted
        if (substr($path, -1) !== '/') {
            $path .= '/';
        }

        // Test if directory already exists
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        // Sanitize characters in file name
        $name = Slim::sanitizeFileName($name);

        // Let's put a unique id in front of the filename so we don't accidentally overwrite other files
        if ($uid) {
            $name = uniqid() . '_' . str_replace(" ", "", $name);
        }

        // Test for .htaccess file in directory, if none found, add custom one
        if (!file_exists($path . DIRECTORY_SEPARATOR . '.htaccess')) {
            Slim::secureDirectory($path);
        }

        // Add name to path, we need the full path including the name to save the file
        $name = strtolower(str_replace(' ', '', $name));
        $path = $path . $name;
        if (fileuploadtype == "local") {
            Slim::save($data, $path, $name);
        } else {
            Slim::save($data, $path, $name);
            $fullpath = 'media/' . date("Y") . "/" . date('m') . '/' . $name;
            $result = Storage::disk('s3')->put($fullpath, $data, 'public');
        }

        return array(
            'name' => $name,
            'path' => $path,
            'folderpath' => date('Y') . '/' . date('m') . '/' . $name
        );
    }

    public static function fetchURL($url, $maxFileSize)
    {
        if (!ini_get('allow_url_fopen')) {
            return null;
        }
        $content = null;
        try {
            $content = @file_get_contents($url, false, null, 0, $maxFileSize);
        } catch (Exception $e) {
            return false;
        }
        return $content;
    }

    public static function outputJSON($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function sanitizeFileName($str)
    {
        $str = preg_replace('([^\w\s\d\-_~,;\[\]\(\).])', '', $str);
        $str = preg_replace('([\.]{2,})', '', $str);
        return $str;
    }

    private static function getPostData($inputName)
    {
        $values = array();

        if (isset($_POST[$inputName])) {
            $values = $_POST[$inputName];
        } else if (isset($_FILES[$inputName])) {
            return false;
        }

        return $values;
    }

    private static function secureDirectory($path)
    {
        $content = '# Don\'t list directory contents
        IndexIgnore *
        # Disable script execution
        AddHandler cgi-script .php .pl .jsp .asp .sh .cgi
        Options -ExecCGI -Indexes';
        file_put_contents($path . DIRECTORY_SEPARATOR . '.htaccess', $content);
    }

    private static function save($data, $path, $name)
    {
        if (!file_put_contents($path, $data)) {
            return false;
        }
        return true;
    }

    private static function getBase64Data($data)
    {
        return base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
    }
}
