<?php

use App\Slim;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use Intervention\Image\Facades\Image as Image;



// if (!function_exists('round_up')) {
//     function round_up($value, $precision)
//     {
//         $pow = pow(10, $precision);
//         return (ceil($pow * $value) + ceil($pow * $value - ceil($pow * $value))) / $pow;
//     }
// }

// /* Send Registration Email for User as Individual*/
// if (!function_exists('registrationEmail')) {
//     function registrationEmail($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         // $subject = "Thanks for Registration ";
//         $subject = "Your IFT4 Registration Is Successful";
//         // $subject = "You Are Shortlist for Next Round ";
//         $name = $userinfo[0]->user_firstname . " " . $userinfo[0]->user_lastname;

//         try {
//             Mail::send('emails.register-individual', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }

//         return true;
//     }
// }

// /* Send Registration Email for User as Team */
// if (!function_exists('registrationEmailteam')) {
//     function registrationEmailteam($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "Your IFT4 Registration Is Successful";
//         // $subject = "You Are Shortlist for Next Round| ";
//         $name = $userinfo[0]->user_firstname . " " . $userinfo[0]->user_lastname;

//         try {
//             Mail::send('emails.register-as-team', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }

//         return true;
//     }
// }

// /* Send Registration Email for Teammate who register via link*/
// if (!function_exists('registration_teammate')) {
//     function registration_teammate($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "Your IFT4 Registration Is Successful";
//         // $subject = "You Are Shortlist for Next Round| ";
//         $name = $userinfo[0]->user_firstname . " " . $userinfo[0]->user_lastname;

//         try {
//             Mail::send('emails.registration_teammate', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }

//         return true;
//     }
// }

// /* Send Registration Email to team originator on Teammate added by invite link */
// if (!function_exists('teamcomplete')) {
//     function teamcomplete($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "Your IFT4 team is now complete";
//         $name = $userinfo[0]->user_firstname . " " . $userinfo[0]->user_lastname;

//         try {
//             Mail::send('emails.teammateaddad', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }
//         return true;
//     }
// }

// /* Invite Team Member*/
// if (!function_exists('Inviteteammember')) {
//     function Inviteteammember($content, $email)
//     {
//         $emailcontent = $content;
//         $subject = "Request To Your IFT Teammate Sent Successfully";
//         $name = $email;
//         try {
//             Mail::send('emails.invitemember', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }
// /* Recive Invitation */
// if (!function_exists('reciveinvitation')) {
//     function reciveinvitation($content, $email)
//     {
//         $emailcontent = $content;
//         $subject = $content["userinfo"][0]->user_firstname . " " . $content["userinfo"][0]->user_lastname . " wants to add you to this IFT team";
//         $name = $email;
//         try {
//             Mail::send('emails.reciveinvite', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }
//         return true;
//     }
// }

// /* Send WatchVideo Team Members email */
// if (!function_exists('WatchVideo')) {
//     function WatchVideo($content, $useremail)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $hackathonmilestoneinfo = $content['hackathonmilestoneinfo'];
//         $subject = "You Are Enrolled for   " . $hackathonmilestoneinfo->milestone_name . "| ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         // echo $name;
//         // exit;
//         try {
//             Mail::send('emails.auto.watchvideo', $emailcontent, function ($message) use ($useremail, $name, $subject) {
//                 $message->to($useremail)->subject($subject);
//             });

//         } catch (\Exception $e) {
//             return $e;
//         }
//         return true;
//     }
// }
// /* Send winner Email */
// if (!function_exists('onWinnerIndividualEmail')) {
//     function onWinnerIndividualEmail($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "You Are Winner ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         try {
//             Mail::send('emails.winner', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }
//         return true;
//     }
// }
// if (!function_exists('onWinnerteamEmail')) {
//     function onWinnerteamEmail($content, $emaillist)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "You Are Winner ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];

//         try {
//             Mail::send('emails.winner', $emailcontent, function ($message) use ($emaillist, $name, $subject) {
//                 $message->to($emaillist, $name)->subject($subject);
//             });

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }
// if (!function_exists('onShortlistIndividualEmail')) {
//     function onShortlistIndividualEmail($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "You Are Shortlist for Next Round ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];

//         try {
//             Mail::send('emails.shortlist', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }
// /* Send onEnrollEmail  Team Member email */
// if (!function_exists('onEnrollEmail')) {
//     function onEnrollEmail($content, $useremail)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $hackathonmilestoneinfo = $content['hackathonmilestoneinfo'];
//         $subject = "You Are Enrolled for   " . $hackathonmilestoneinfo->milestone_name . "| ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         // echo $name;
//         // exit;
//         Mail::send('emails.enrollment', $emailcontent, function ($message) use ($useremail, $name, $subject) {
//             $message->to($useremail)->subject($subject);
//         });
//         try {

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }

// /* Send NotShortlist  Team Member and all other email */
// if (!function_exists('onShotlistteamEmail')) {
//     function onShotlistteamEmail($content, $useremail)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "You Are Not Shortlist for Next Round ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         // echo $name;
//         // exit;
//         Mail::send('emails.notshortlist', $emailcontent, function ($message) use ($useremail, $name, $subject) {
//             $message->to($useremail)->subject($subject);
//         });
//         try {

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }

// /* Send Shortlist  Team Member email */
// if (!function_exists('onShotlistteamEmail')) {
//     function onShotlistteamEmail($content, $useremail)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "You Are Shortlist for Next Round ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         // echo $name;
//         // exit;
//         Mail::send('emails.shortlist', $emailcontent, function ($message) use ($useremail, $name, $subject) {
//             $message->to($useremail)->subject($subject);
//         });
//         try {

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }

// /* Send Shortlist  Team Member email */
// if (!function_exists('onReminerSubmissionMail')) {
//     function onReminerSubmissionMail($content, $useremail)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];
//         $subject = "Your Submission Is Pending ";
//         $name = $userinfo[0]["user_firstname"] . " " . $userinfo[0]["user_lastname"];
//         // echo $name;
//         // exit;
//         Mail::send('emails.remidersubmission', $emailcontent, function ($message) use ($useremail, $name, $subject) {
//             $message->to($useremail)->subject($subject);
//         });
//         try {

//         } catch (\Exception $e) {
//             return false;
//         }
//         return true;
//     }
// }

// /* Send Forgot Password Email */
// if (!function_exists('forgotPasswordEmail')) {
//     function forgotPasswordEmail($content, $email)
//     {
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];

//         $subject = "Reset Your Password ";
//         $name = $userinfo->user_firstname . " " . $userinfo->user_lastname;
//         try {
//             Mail::send('emails.forgotpassword', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//             return true;
//         } catch (\Exception $e) {

//             return false;
//         }
//     }
// }

// /* Mail Certificate */
// if (!function_exists('CertificateMail')) {
//     function CertificateMail($content, $email)
//     {
//         $emailcontent = $content;
//         $subject = " Hurray, Your IFT Idea Is Submitted Successfully";
//         $name = $email;
//         $filepath = $emailcontent["filepath"];
//         $filename = "certificate" . $content["userinfo"][0]->user_firstname . ".jpg";

//         try {
//             Mail::send('emails.submission_with_certificate', $emailcontent, function ($message) use ($email, $name, $subject, $filename, $filepath) {
//                 $message->to($email, $name)->subject($subject)->attach($filepath, [
//                     'as' => $filename,
//                     'mime' => 'application/pdf',
//                 ]);
//             });

//         } catch (\Exception $e) {
//             return false;
//         }
//     }
// }

// if (!function_exists('CreateCertificate')) {
//     function CreateCertificate($name, $token, $user_id, $imgpath = "")
//     {
//         if ($imgpath != "") {
//             $img = Image::make($imgpath);
//         } else {
//             $img = Image::make(public_path('certificate.jpg'));
//         }
//         $img->text(ucwords($name), 340, 340, function ($font) {
//             $font->file(public_path('font.ttf'));
//             $font->size(20);
//             // $font->color('#e1e1e1');
//             // $font->align('center');
//             // $font->valign('bottom');
//             // $font->angle(90);
//         });
//         // $img->text($today, 300/*lest/right*/, 260/* up/down */);
//         $img->save(mediapath . '/certificate/' . $token . "_" . $user_id . '.jpg');
//         return imagedisplaypath . 'certificate/' . $token . "_" . $user_id . '.jpg';
//     }
// }

// //code for converting .jpg/.png to webp
// if (!function_exists('convert_to_webp')) {
//     function convert_to_webp($filepath, $name)
//     {
//         $webp = $filepath;
//         $im = imagecreatefromstring(file_get_contents($webp));
//         $new_webp = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $webp);
//         imagewebp($im, $new_webp, 50);
//         if (file_exists($new_webp)) {
//             $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
//             $fullpath = 'media/' . date("Y") . "/" . date('m') . '/' . $name;
//             if (fileuploadtype != "local") {
//                 $result = Storage::disk('s3')->put($fullpath, file_get_contents($new_webp), 'public');
//             }
//             unlink($filepath);
//             unlink($new_webp);
//         }
//         return true;
//     }
// }

// if (!function_exists('checkslugavailability')) {
//     function checkslugavailability($project_slug)
//     {

//         /* Generate Slug */
//         $slug_name = Str::slug($project_slug);

//         /* Get the Table Name */
//         $table_name = "tbl_project";
//         if ($project_slug == "page") {$table_name = "tbl_project";}

//         /* Check Avaialability */
//         $slugcount = DB::table($table_name)
//             ->where('status', 1)
//             ->where('project_slug', '=', Str::slug($project_slug))
//             ->get();

//         if (count($slugcount) == 0) {
//             $slug_name = $slug_name;
//         } else {
//             up:
//             $slug_name1 = $slug_name . "-" . getthreestring();
//             $slugcounter = DB::table($table_name)
//                 ->where('status', 1)
//                 ->where('slug_name', '=', Str::slug($project_slug))
//                 ->get();
//             if (count($slugcounter) == 0) {
//                 $slug_name = $slug_name1;
//             } else {
//                 goto up;
//             }
//         }
//         return $slug_name;
//     }
// }
// //code for checking does url exist for dispalying images
// if (!function_exists('does_url_exists')) {
//     function does_url_exists($url)
//     {
//         $headers = get_headers($url);
//         return stripos($headers[0], "200 OK") ? true : false;
//     }
// }

// if (!function_exists('sendContactInquiry')) {
//     function sendContactInquiry($content, $email, $name)
//     {

//         /* Set business logo */
//         if (fileuploadtype == "local") {
//             if ($content["businessinfo"]->business_dark_logo == "" || $content["businessinfo"]->business_dark_logo == null || $content["businessinfo"]->business_dark_logo == "null") {
//                 $content["businessinfo"]->business_dark_logo = fixedpagefeaturedimage;
//             } else {
//                 if (File::exists(baseimagedisplaypath . $content["businessinfo"]->business_dark_logo)) {
//                     $content["businessinfo"]->business_dark_logo = imagedisplaypath . $content["businessinfo"]->business_dark_logo;
//                 } else {
//                     $content["businessinfo"]->business_dark_logo = fixedpagefeaturedimage;
//                 }
//             }
//         } else {
//             if (does_url_exists(imagedisplaypath . $content["businessinfo"]->business_dark_logo)) {
//                 $content["businessinfo"]->business_dark_logo = imagedisplaypath . $content["businessinfo"]->business_dark_logo;
//             } else {
//                 $content["businessinfo"]->business_dark_logo = fixedpagefeaturedimage;
//             }
//         }

//         if (fileuploadtype == "local") {
//             if ($content["businessinfo"]->business_light_logo == "" || $content["businessinfo"]->business_light_logo == null || $content["businessinfo"]->business_light_logo == "null") {
//                 $content["businessinfo"]->business_light_logo = fixedpagefeaturedimage;
//             } else {
//                 if (File::exists(baseimagedisplaypath . $content["businessinfo"]->business_light_logo)) {
//                     $content["businessinfo"]->business_light_logo = imagedisplaypath . $content["businessinfo"]->business_light_logo;
//                 } else {
//                     $content["businessinfo"]->business_light_logo = fixedpagefeaturedimage;
//                 }
//             }
//         } else {
//             if (does_url_exists(imagedisplaypath . $content["businessinfo"]->business_light_logo)) {
//                 $content["businessinfo"]->business_light_logo = imagedisplaypath . $content["businessinfo"]->business_light_logo;
//             } else {
//                 $content["businessinfo"]->business_light_logo = fixedpagefeaturedimage;
//             }
//         }

//         $emailcontent = $content;

//         Mail::send('ecom_emails.contactemail', $emailcontent, function ($message) use ($email, $name) {
//             $message->to($email, $name)->subject('Inquiry Received');
//         });

//         return true;
//     }
// }

/* generate accesstoken */

// use App\Slim;

if (!function_exists('generateToken')) {
    function generateToken($n = 30)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}

/* price conver to Cr and Lacs */
if (!function_exists('formatBudget')) {
    function formatBudget($amount)
    {
        if ($amount >= 10000000) { // 1 crore or more
            return round($amount / 10000000, 2) . ' Cr onwards';
        } elseif ($amount >= 100000) { // 1 lakh or more
            return round($amount / 100000, 2) . ' Lacs onwards';
        }
        // You can add more conditions if you want to handle other formats like thousands, etc.
        return $amount;
    }
}

if(!function_exists('getimagepath')) {
    function getimagepath($folder,$imagepath){
        $imagepath = url('/').'/public/images/'.$folder."/".$imagepath;
        return $imagepath;
    }
}

if (!function_exists('slug')) {
    function slug($title, $separator = '-', $language = 'en')
    {
        $title = $language ? Str($title, $language) : $title;
        $flip = $separator === '-' ? '_' : '-';

        $title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

        $title = str_replace('@', $separator.'at'.$separator, $title);
        $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', strtolower($title));
        $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

        return trim($title, $separator);
    }
}

//for uploading file from the base64 crop string(used when we were using cropper)
// if (!function_exists('fileupload')) {
//     function fileupload($file)
//     {
//         $constantpath = date("Y") . "/" . date('m');
//         $mediapath = mediapath . "/" . $constantpath;
//         if (!does_url_exists($mediapath)) {
//             File::makeDirectory($mediapath, 0777, true);
//         }

//         $image_parts = explode(";base64,", $file);
//         $image_type_aux = explode("image/", $image_parts[0]);
//         $image_type = $image_type_aux[1];
//         $image_base64 = base64_decode($image_parts[1]);
//         $randomstring = randomnumbergenerator(15); //uniqid();/*rand(1111,9999);*/
//         $filename = date("Y") . date('m') . $randomstring;
//         $extension = '.jpg';
//         $filenamewithextension = $filename . $extension;
//         $storagepath = $mediapath . "/" . $filenamewithextension;
//         $result = file_put_contents($storagepath, $image_base64);

//         if ($result) {
//             return $constantpath . '/' . $filenamewithextension;
//         } else {
//             return null;
//         }
//     }
// }

//random number generator
if (!function_exists('randomnumbergenerator')) {
    function randomnumbergenerator($n)
    {
        // Variable which store final string
        $generated_string = "";

        // Create a string with the help of
        // small letters, capital letters and
        // digits.
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

        // Find the length of created string
        $len = strlen($domain);

        // Loop to create random string
        for ($i = 0; $i < $n; $i++) {
            // Generate a random index to pick
            // characters
            $index = rand(0, $len - 1);

            // Concatenating the character
            // in resultant string
            $generated_string = $generated_string . $domain[$index];
        }

        // Return the random generated string
        return uniqid() . $generated_string;
    }
}

// //code for uploading simple file
// if (!function_exists('fileuploads')) {
//     function fileuploads($file_name, $file, $type = "", $id = "", $foldername)
//     {

//         //for making custom image name by removing the spaces and adding dash
//         $customfilename = strtolower($file_name);
//         //Clean up multiple dashes or whitespaces
//         $string = preg_replace("/[\s-]+/", " ", $customfilename);
//         //Convert whitespaces and underscore to dash
//         $string = preg_replace("/[\s_]/", "-", $string);
//         //for separating the name and extension
//         $file_info = pathinfo($string);
//         $filename = $file_info['filename'];
//         $fileextension = $file_info['extension'];
//         //get constant path

//         //making 8 digit random string for making custom image name
//         $randomstring = randomnumbergenerator(25); /*uniqid();/*rand(1111,9999);*/
//         $filenamewithoutextension = $filename . "-" . $id;

//         // $currenttimestamp = str_replace([' ', ':'], '', Carbon::now()->toDateTimeString());

//         /* Withfile name  */
//         // $fullfilename=$filename."-".$currenttimestamp.'_'.$id.".".$fileextension;
//         /* Without file name  */
//         $fullfilename = $randomstring . '_' . $id . "." . $fileextension;
//         $fullfilename = strtolower($fullfilename);

//         //  echo $fullfilename;exit;

//         $foldername = strtolower($foldername);
//         //Clean up multiple dashes or whitespaces
//         $foldername = preg_replace("/[\s-]+/", " ", $foldername);
//         //Convert whitespaces and underscore to dash
//         $foldername = preg_replace("/[\s_]/", "-", $foldername);
//         // $foldername = preg_replace("/[\s]/", "-", $foldername);

//         // $mediapath =mediapath.$constantpath ;
//         $mediapath = mediapath . $type . '/' . $foldername . '_' . $id;
//         // echo $mediapath;exit;

//         if (fileuploadtype == "local") {
//             if (!File::exists($mediapath)) {
//                 $status = File::makeDirectory($mediapath, 0777, true);
//             }
//             $result = $file->move($mediapath, $fullfilename);
//         } else {
//             $fullpath = '/media/' . date("Y") . "/" . date('m') . '/' . $fullfilename;
//             $result = Storage::disk('s3')->put($fullpath, file_get_contents($file), 'public');
//         }

//         if ($result) {
//             return $fullfilename;
//         } else {
//             return null;
//         }
//     }
// }

// if (!function_exists('sendsms')) {
//     function sendsms($mobile, $otp, $message="",$countrycode=91){
  

//     // $otp = rand(100000,999999);
//     $curl = curl_init();

//     //$url = 'https://api.msg91.com/api/sendhttp.php?authkey=138138A0N1Qn09lS160d30de7P1&mobiles=91'.urlencode($mobile).'&message=Thank%2520you%2520for%2520your%2520interest%2520in%2520Totality%2520OTP%2520to%2520verify%2520your%2520mobile%2520number%2520is%2520'.urlencode($otp).'%2520-TOTALITY&sender=totlty&DLT_TE_ID=1207161044131883034&route=6';
//     // $url = 'https://api.msg91.com/api/sendhttp.php?authkey=138138A0N1Qn09lS160d30de7P1&mobiles=91'.urlencode($mobile).'&message=Your%2520login%2520OTP%2520is%2520'.urlencode($otp).'%2520Please%2520do%2520not%2520share%2520this%2520OTP%2520.%2520-Totality&sender=TOTLTY&DLT_TE_ID=1207170420774811925&route=4';
//     $url = 'https://api.msg91.com/api/sendhttp.php?authkey=138138A0N1Qn09lS160d30de7P1&mobiles=91'.urlencode($mobile).'&message=Thank%2520you%2520for%2520your%2520interest%2520in%2520Totality%2520OTP%2520to%2520verify%2520your%2520mobile%2520number%2520is%2520'.urlencode($otp).'%2520-TOTALITY&sender=TOTLTY&DLT_TE_ID=1207161044131883034&route=4';
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => $url,
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => '',
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 0,
//       CURLOPT_FOLLOWLOCATION => true,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => 'GET',
//       CURLOPT_HTTPHEADER => array(
//         'Cookie: PHPSESSID=dpogi2923c9mubnsjh8986h0i7'
//       ),
//     ));

//     $response = curl_exec($curl);
//     $err = curl_error($curl);

//     curl_close($curl);
//     //echo $response;

//     if ($err) {
//       $response = "cURL Error #:" . $err;
//     }
    
//     return $response;

//       /*
//         $postData = "authkey=138138AnhKsTbNSUQK5e888b2fP1&mobiles=".$mobile."&message=".$message."&sender=CRDCHN&route=4&country=".$countrycode;
      
//         $curl = curl_init();
        
//         curl_setopt_array($curl, array(
//           CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php",
//           CURLOPT_RETURNTRANSFER => true,
//           CURLOPT_ENCODING => "",
//           CURLOPT_MAXREDIRS => 10,
//           CURLOPT_TIMEOUT => 30,
//           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//           CURLOPT_CUSTOMREQUEST => "POST",
//           CURLOPT_POSTFIELDS => $postData //"authkey=138138AnhKsTbNSUQK5e888b2fP1&mobiles=9925743801&message=test%20teste&sender=CREDAI&route=4",
//           CURLOPT_HTTPHEADER => array(
//           "cache-control: no-cache",
//           "content-type: application/x-www-form-urlencoded",
//           "postman-token: 9611c626-a5d5-c2f1-e553-ce1b11ddb249"
//           ),
//         ));
      
//         $response = curl_exec($curl);
//         $err = curl_error($curl);
      
//         curl_close($curl);
//       */
        
//     }
// }

// if (!function_exists('getFilepath')) {
//     function getFilepath($type, $token, $id, $logopath)
//     {
//         if (fileuploadtype == "local") {
//             if ($logopath == "" || $logopath == null || $logopath == "null") {
//                 $logopath = fixedfeaturedimage;
//             } else {
//                 //return imagedisplaypath.$type.'/'.strtolower($token).'_'.$id.'/'.strtolower($logopath);
//                 if (File::exists(mediapath . $type . '/' . strtolower($token) . '_' . $id . '/' . strtolower($logopath))) {

//                     $logopath = imagedisplaypath . $type . '/' . strtolower($token) . '_' . $id . '/' . strtolower($logopath);
//                 } else {
//                     $logopath = imagedisplaypath . $type . '/' . strtolower($token) . '_' . $id . '/' . strtolower($logopath);

//                 }
//             }
//         } else {
//             if (does_url_exists(imagedisplaypath . $logopath)) {
//                 $logopath = imagedisplaypath . $logopath;
//             } else {
//                 $logopath = fixedfeaturedimage;
//             }
//         }
//         return $logopath;
//     }
// }

// //code for uploading file using slim
// if (!function_exists('fileUploadSlim')) {
//     function fileUploadSlim($request, $keyname = 'slim')
//     {
//         // Get posted data, if something is wrong, exit
//         try {
//             $images = Slim::getImages($keyname);
//         } catch (Exception $e) {

//             // Possible solutions
//             // ----------
//             // Make sure you're running PHP version 5.6 or higher

//             Slim::outputJSON(array(
//                 'status' => "failure",
//                 'message' => 'Unknown',
//                 'Exception' => $e,
//             ));

//             return;
//         }

//         // No image found under the supplied input name
//         if ($images === false) {

//             // Possible solutions
//             // ----------
//             // Make sure the name of the file input is "slim[]" or you have passed your custom
//             // name to the getImages method above like this -> Slim::getImages("myFieldName")

//             Slim::outputJSON(array(
//                 'status' => "failure",
//                 'message' => 'No data posted',
//             ));

//             return;
//         }

//         // Should always be one image (when posting async), so we'll use the first on in the array (if available)
//         $image = array_shift($images);

//         // Something was posted but no images were found
//         if (!isset($image)) {

//             // Possible solutions
//             // ----------
//             // Make sure you're running PHP version 5.6 or higher

//             Slim::outputJSON(array(
//                 'status' => "failure",
//                 'message' => 'No images found',
//             ));

//             return;
//         }

//         // If image found but no output or input data present
//         if (!isset($image['output']['data']) && !isset($image['input']['data'])) {

//             // Possible solutions
//             // ----------
//             // If you've set the data-post attribute make sure it contains the "output" value -> data-post="actions,output"
//             // If you want to use the input data and have set the data-post attribute to include "input", replace the 'output' String above with 'input'
//             // The submitted files are checked to see if they are images, if determined they are not images the values are null

//             Slim::outputJSON(array(
//                 'status' => "failure",
//                 'message' => 'No image data',
//             ));

//             return;
//         }

//         // if we've received output data save as file
//         if (isset($image['output']['data'])) {

//             // get the name of the file
//             $name = $image['output']['name'];

//             // get the crop data for the output image
//             $data = $image['output']['data'];

//             // If you want to store the file in another directory pass the directory name as the third parameter.
//             // $output = Slim::saveFile($data, $name, 'my-directory/');

//             // If you want to prevent Slim from adding a unique id to the file name add false as the fourth parameter.
//             // $output = Slim::saveFile($data, $name, 'tmp/', false);

//             // Default call for saving the output data
//             $output = Slim::saveFile($data, $name);
//         }

//         // if we've received input data (do the same as above but for input data)
//         if (isset($image['input']['data'])) {

//             // get the name of the file
//             $name = $image['input']['name'];

//             // get the crop data for the output image
//             $data = $image['input']['data'];

//             // If you want to store the file in another directory pass the directory name as the third parameter.
//             // $input = Slim::saveFile($data, $name, 'my-directory/');

//             // If you want to prevent Slim from adding a unique id to the file name add false as the fourth parameter.
//             // $input = Slim::saveFile($data, $name, 'tmp/', false);

//             // Default call for saving the input data
//             $input = Slim::saveFile($data, $name);
//         }

//         //
//         // Build response to client
//         //
//         $response = array(
//             'status' => 'success',
//         );

//         if (isset($output) && isset($input)) {

//             $response['output'] = array(
//                 'file' => $output['name'],
//                 'path' => $output['path'],
//                 'folderpath' => $output['folderpath'],
//             );

//             $response['input'] = array(
//                 'file' => $input['name'],
//                 'path' => $input['path'],
//                 'folderpath' => $output['folderpath'],
//             );

//         } else {
//             $response['file'] = isset($output) ? $output['name'] : $input['name'];
//             $response['path'] = isset($output) ? $output['path'] : $input['path'];
//             $response['folderpath'] = isset($output) ? $output['folderpath'] : $input['folderpath'];
//         }

//         return $response;
//     }
// }

// if (!function_exists('count_digit')) {
//     function count_digit($number)
//     {
//         return strlen($number);
//     }
// }

// if (!function_exists('divider')) {
//     function divider($number_of_digits)
//     {
//         $tens = "1";

//         if ($number_of_digits > 8) {
//             return 10000000;
//         }

//         while (($number_of_digits - 1) > 0) {
//             $tens .= "0";
//             $number_of_digits--;
//         }
//         return $tens;
//     }
// }

// if (!function_exists('getnumbers')) {
//     function getnumbers($num)
//     {
//         $ext = ""; //thousand,lac, crore
//         $number_of_digits = count_digit($num); //this is call :)
//         if ($number_of_digits > 3) {
//             if ($number_of_digits % 2 != 0) {
//                 $divider = divider($number_of_digits - 1);
//             } else {
//                 $divider = divider($number_of_digits);
//             }

//         } else {
//             $divider = 1;
//         }

//         $fraction = $num / $divider;
//         $fraction = number_format($fraction, 2);
//         if ($number_of_digits == 4 | $number_of_digits == 5) {
//             $ext = "k";
//         }

//         if ($number_of_digits == 6 | $number_of_digits == 7) {
//             $ext = "Lacs";
//         }

//         if ($number_of_digits == 8 | $number_of_digits == 9) {
//             $ext = "Crs";
//         }

//         return $fraction . " " . $ext;
//     }
// }

// if (!function_exists('getIndianCurrency')) {
//     function getIndianCurrency(float $number)
//     {
//         $decimal = round($number - ($no = floor($number)), 2) * 100;
//         $hundred = null;
//         $digits_length = strlen($no);
//         $i = 0;
//         $str = array();
//         $words = array(0 => '', 1 => 'One', 2 => 'Two',
//             3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
//             7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
//             10 => 'ten', 11 => 'Eleven', 12 => 'Twelve',
//             13 => 'Thirteen', 14 => 'fourteen', 15 => 'Fifteen',
//             16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
//             19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
//             40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
//             70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
//         $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
//         while ($i < $digits_length) {
//             $divider = ($i == 2) ? 10 : 100;
//             $number = floor($no % $divider);
//             $no = floor($no / $divider);
//             $i += $divider == 10 ? 1 : 2;
//             if ($number) {
//                 $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
//                 $hundred = ($counter == 1 && $str[0]) ? ' And ' : null;
//                 $str[] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
//             } else {
//                 $str[] = null;
//             }

//         }
//         $Rupees = implode('', array_reverse($str));
//         $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
//         return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
//     }
// }

// if (!function_exists('moneyFormatIndia')) {
//     function moneyFormatIndia($num)
//     {

//         $explrestunits = "";
//         $num = preg_replace('/,+/', '', $num);
//         $words = explode(".", $num);
//         $des = "00";
//         if (count($words) <= 2) {
//             $num = $words[0];
//             if (count($words) >= 2) {$des = $words[1];}
//             if (strlen($des) < 2) {$des = "$des";} else { $des = substr($des, 0, 2);}
//         }
//         if (strlen($num) > 3) {
//             $lastthree = substr($num, strlen($num) - 3, strlen($num));
//             $restunits = substr($num, 0, strlen($num) - 3); // extracts the last three digits
//             $restunits = (strlen($restunits) % 2 == 1) ? "0" . $restunits : $restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
//             $expunit = str_split($restunits, 2);
//             for ($i = 0; $i < sizeof($expunit); $i++) {
//                 // creates each of the 2's group and adds a comma to the end
//                 if ($i == 0) {
//                     $explrestunits .= (int) $expunit[$i] . ","; // if is first value , convert into integer
//                 } else {
//                     $explrestunits .= $expunit[$i] . ",";
//                 }
//             }
//             $thecash = $explrestunits . $lastthree;
//         } else {
//             $thecash = $num;
//         }
//         return "$thecash.$des";
//     }
// }
// //for getting  length three string
// if (!function_exists('getthreestring')) {
//     function getthreestring($length = 3)
//     {
//         $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
//         $string = '';

//         for ($i = 0; $i < $length; $i++) {
//             $string .= $characters[mt_rand(0, strlen($characters) - 1)];
//         }

//         return $string;
//     }
// }

// if (!function_exists('nowPrepareIdeaReminder')) {
//     function nowPrepareIdeaReminder($content, $email)
//     {

//         /* Fetch Content */
//         $emailcontent = $content;
//         $userinfo = $emailcontent['userinfo'];

//         /* Define Subject */
//         // $subject = "Start preparing your idea in 5 simple steps";
//         $subject = "Submit ideas before the last date";

//         /* Define Recipient */
//         $name = $userinfo[0]->user_firstname . " " . $userinfo[0]->user_lastname;

//         /* Send Email */
//         try {
//             Mail::send('emails.finished-learning', $emailcontent, function ($message) use ($email, $name, $subject) {
//                 $message->to($email, $name)->subject($subject);
//             });
//         } catch (\Exception $e) {
//             return $e;
//         }

//         return true;
//     }
// }

// if (!function_exists('sendGeneralPushNotification')) {
//     /* In General Notification Pass Topic  in specific pass device id's cauma seprated list*/
//   function sendGeneralPushNotification($title, $message,$deviceid="") {
//       $path = "https://singlewicket.co.in/resources/assets/images/sswlogo.svg";
//       $type = "/topics/generic"; 
//       $data = array(
//           "to" => $type,
//           "collapse_key" => "type_a",
//           "default_vibrate_timings" => "true",
//           "notification" => array(
//               "body" => $message,
//               "title" => $title,
//               "image" => $path              
//           )
//       );

//       $data_json = json_encode($data);
  
//       $curl = curl_init();
//       curl_setopt_array($curl, array(
//         CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => "",
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => "POST",
//         CURLOPT_POSTFIELDS => $data_json,
//         CURLOPT_HTTPHEADER => array(
//           "Authorization: key=AAAAsw0ER7I:APA91bFS_pBZhVGCh07TtaZ_0O6bYHMnG_1GYAGRvvU6U5Zbmnro_A8ID3GlG-mtR5nXVAQCDw7wkasfRpe-vKS8K74BBkpzD9iQpIuH6-AJ3GWd0t-ruSR5j5P9P4V6tPslg5UMjppa",
//           "Content-Type: application/json"
//         ),
//       ));

//       $response = curl_exec($curl);
//       print_r($response);
//       $err = curl_error($curl);
//       curl_close($curl);

//       if ($err) {
//           return false;
//       } else {
//           return $response;
//       }
//   }
  
// }

// if (!function_exists('sendPushNotificationToSpecific')) {
//   /* In General Notification Pass Topic  in specific pass device id's cauma seprated list*/
//   function sendPushNotificationToSpecific($title, $message, $deviceidlist,$imgpath="") {
//       // $topics = "/topics/generic";      

//       $data = array(
//           /*"to" => "",*/ /* For Specific pass to */
//           "registration_ids"=>[$deviceidlist], /* for specific but multiple at once   */
//           "collapse_key" => "type_a",
//           "default_vibrate_timings" => "true",
//           "notificationPayload" => array(
//               "body" => $message,
//               "title" => $title,
//             //   "image" => $imgpath
//           ),
//           'priority'=>'high'
//       );

//       $data_json = json_encode($data);

//       $curl = curl_init();
//       curl_setopt_array($curl, array(
//         CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => "",
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => "POST",
//         CURLOPT_POSTFIELDS => $data_json,
//         CURLOPT_HTTPHEADER => array(
//           "Authorization: key=AAAAsw0ER7I:APA91bFS_pBZhVGCh07TtaZ_0O6bYHMnG_1GYAGRvvU6U5Zbmnro_A8ID3GlG-mtR5nXVAQCDw7wkasfRpe-vKS8K74BBkpzD9iQpIuH6-AJ3GWd0t-ruSR5j5P9P4V6tPslg5UMjppa",
//           "Content-Type: application/json"
//         ),
//       ));

//       $response = curl_exec($curl);
//       $err = curl_error($curl);
//       curl_close($curl);
//       if ($err) {
//           return false;
//       } else {
//           return $response;
//           // echo $response;
//       }
//   }
  
// }

// /* Check slugn in the table */
// if (!function_exists('checkslugavailability')) {
//     function checkslugavailability($slug_names, $slug_type) {
  
//         /* Generate Slug */
//         $slug_name= Str::slug($slug_names);
  
//         /* Get the Table Name */
//         $table_name = "";
        
//         if($slug_type == "page"){ $table_name = "tbl_page"; }
    
  
//         /* Check Avaialability */
//         $slugcount = DB::table($table_name)
//         ->where('status', 1)
//         ->where('slug_name', '=',Str::slug($slug_name))
//         ->get();
  
//         if(count($slugcount)==0)
//         {
//           $slug_name=$slug_name;
//         }
//         else
//         {
//           up:
//           $slug_name1=$slug_name."-".getthreestring();
//           $slugcounter = DB::table($table_name)
//           ->where('status', 1)
//           ->where('slug_name', '=',Str::slug($slug_name1))
//           ->get();
//           if(count($slugcounter)==0)
//           {
//             $slug_name=$slug_name1;
//           }
//           else
//           {
//             goto up;
//           }
//         }
//         return $slug_name;
//     }
//   }



if (!function_exists('fileUploadSlim')) {
    function fileUploadSlim($request, $keyname = 'slim',$path=mediapath) {
        try {
            
            // Debug: Check if $request is correctly formatted
            Log::info('FileUploadSlim Request Data:', ['request' => $request]);
            
            $images = Slim::getImages($keyname);
           
            // Debug: Check the retrieved images
            Log::info('Retrieved Images:', ['images' => $images]);

        } catch (Exception $e) {
            return [
                'status' => "failure",
                'message' => 'Unknown',
                'Exception' => $e
            ];
        }

        if ($images === false) {
            return [
                'status' => "failure",
                'message' => 'No data posted'
            ];
        }

        $image = array_shift($images);
        
        // if (!isset($image)) {
        //     return [
        //         'status' => "failure",
        //         'message' => 'No images found'
        //     ];
        // }

        $output = null;
        $input = null;

        if (isset($image['output']['data'])) {
            $name = $image['output']['name'];
           
            $data = $image['output']['data'];            
            $output = Slim::saveFile($data, $name, $path);            
        }

        // if (isset($image['input']['data'])) {
        //     $name = $image['input']['name'];
        //     $data = $image['input']['data'];
        //     $input = Slim::saveFile($data, $name, 'public/images/gallery/');

        // }

        $response = ['status' => 'success'];

        if (isset($output)) {
            
            $response['file'] = $output['name'];
            $response['path'] = $output['path'];
            $response['folderpath'] = $output['folderpath'];
            
        } elseif (isset($input)) {
            $response['file'] = $input['name'];
            $response['path'] = $input['path'];
            $response['folderpath'] = $input['folderpath'];
        }

        return $response;
    }
}

//send SMS 
function sendSMS($toMobile, $message, $route = 'TRANS', $senderId = 'PRXPOO', $tid = 'VIP Passcode')
{
    $response = Http::get('https://mdssend.in/api.php', [
        'username' => 'Sibermond',
        'apikey' => 'KkPAz2UcF0rL',
        'senderid' => $senderId,      
        'route' => $route,           
        'mobile' => $toMobile,
        'text' => $message,
        'TID' => $tid,
    ]);
    // dd($response->body());
    return $response->body();
}

// code for mail
if (!function_exists('Passcodemail')) {
    function Passcodemail($content, $users)
    {
        $emailcontent = $content;
        $userinfo = $emailcontent['userinfo'];
        $subject = "Your VIP Access to PropXpo - Realty Rush Week 2025";
        $name = $userinfo->name;
        // print_r($name);
        $email = $userinfo->email;

        try {
            Mail::send('emails.changepassword', $emailcontent, function ($message) use ($email, $name, $subject) {
                $message->to($email, $name)->subject($subject);
            });
        } catch (\Exception $e) {
            return $e;
        }

        return true;
    }
}
if (!function_exists('forgotPassword')) {
    function forgotPassword($content, $users)
    {
        $emailcontent = $content;
        $userinfo = $emailcontent['userinfo'];
        $subject = "Reset Your Password - Sibermond";
        $name = $userinfo->name;
        // print_r($name);
        $email = $userinfo->email;

        try {
            Mail::send('emails.forgotpassword', $emailcontent, function ($message) use ($email, $name, $subject) {
                $message->to($email, $name)->subject($subject);
            });
        } catch (\Exception $e) {
            return $e;
        }

        return true;
    }
}
if (!function_exists('getBrowserDetails')) {
    function getBrowserDetails($userAgent, $ipAddress)
    {
        $browserName = 'Unknown';
        $browserVersion = 'Unknown';
        $platform = 'Unknown';

        if (preg_match('/linux/i', $userAgent)) {
            $platform = 'Linux';
        } elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
            $platform = 'Mac';
        } elseif (preg_match('/windows|win32/i', $userAgent)) {
            $platform = 'Windows';
        }

        if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
            $browserName = 'Internet Explorer';
            preg_match('/MSIE ([0-9.]+)/i', $userAgent, $matches);
            $browserVersion = $matches[1] ?? 'Unknown';
        } elseif (preg_match('/Firefox/i', $userAgent)) {
            $browserName = 'Firefox';
            preg_match('/Firefox\/([0-9.]+)/i', $userAgent, $matches);
            $browserVersion = $matches[1] ?? 'Unknown';
        } elseif (preg_match('/Chrome/i', $userAgent)) {
            $browserName = 'Chrome';
            preg_match('/Chrome\/([0-9.]+)/i', $userAgent, $matches);
            $browserVersion = $matches[1] ?? 'Unknown';
        } elseif (preg_match('/Safari/i', $userAgent)) {
            $browserName = 'Safari';
            preg_match('/Version\/([0-9.]+)/i', $userAgent, $matches);
            $browserVersion = $matches[1] ?? 'Unknown';
        } elseif (preg_match('/Opera/i', $userAgent)) {
            $browserName = 'Opera';
            preg_match('/Opera\/([0-9.]+)/i', $userAgent, $matches);
            $browserVersion = $matches[1] ?? 'Unknown';
        }

        return [
            'browser_name' => $browserName,
            'browser_version' => $browserVersion,
            'browser_platform' => $platform,
            'ip_address' => $ipAddress
        ];
    }
}


function fileuploads($file_name,$file)
    {
        //for making custom image name by removing the spaces and adding dash
        $customfilename= strtolower($file_name);
         //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $customfilename);
          //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        //for separating the name and extension
        $file_info = pathinfo($string);
        $filename = $file_info['filename'];
        $fileextension=$file_info['extension'];
        //get constant path

        $constantpath =  date("Y") . "/" . date('m');

        //making 8 digit random string for making custom image name
        $randomstring= randomnumbergenerator(25);
        $filenamewithoutextension=$filename."-".$randomstring;
        //dynamic path
        $fullfilename=$filename."-".$randomstring.".".$fileextension;
       
       

        // $mediapath =mediapath.$constantpath ; //for older fileuploads 
        $mediapath =mediapath ; 
      if(fileuploadtype=="local")
      {
        if (!File::exists($mediapath)) {
	    		$status= File::makeDirectory( $mediapath ,0777,true);
		    }
        $result = $file[0]->move($mediapath, $fullfilename);
      }
    //   else
    //   {
    //     $fullpath = '/media/'.date("Y") . "/" . date('m').'/'.$fullfilename;
    //     $result = Storage::disk('s3')->put($fullpath, file_get_contents($file[0]), 'public');
    //   }
     
       if($result)
       {
        return $constantpath.'/'. $fullfilename;   
       }
       else
       {
        return NULL;
       }
         
    }


