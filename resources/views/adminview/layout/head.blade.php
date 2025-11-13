<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=preload href="{{URL::asset('resources/views/adminview/assets')}}/fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Guest Invitation Portal</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="canonical" href="" />
<meta name="author" content="">
<meta name="thumbnail" content="" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:creator" content="" />
<meta property="article:publisher" content="" />
<link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png">
<link rel="manifest" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{URL::asset('resources/views/adminview/assets')}}/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png" type="image/x-icon">
<link rel="icon" href="{{URL::asset('resources/views/adminview/assets')}}/favicon/favicon-16x16.png" type="image/x-icon">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

<link rel="stylesheet" type="text/css" href="{{URL::asset('resources/views/adminview/assets')}}/css/bulma.min.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('resources/views/adminview/assets')}}/css/bulma-tooltip.min.css" />
<!--Select2-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<!--End Select2-->
<!--Flatpickr-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<!--End Flatpickr-->
<!--Dropzone-->
<link rel="stylesheet" href="{{URL::asset('resources/views/adminview/assets')}}/css/dropzone.css" />
<!--End Dropzone-->
<!--Quill Editor-->
<link rel="stylesheet" href="{{URL::asset('resources/views/adminview/assets')}}/css/typography.css" />
<link rel="stylesheet" href="{{URL::asset('resources/views/adminview/assets')}}/css/katex.css" />
<link rel="stylesheet" href="{{URL::asset('resources/views/adminview/assets')}}/css/editor.css" />

<link rel="stylesheet" type="text/css" href="{{URL::asset('resources/views/adminview/assets')}}/css/slim.min.css" />
<!--End Quill Editor-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('resources/views/adminview/assets')}}/css/all-custom.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('resources/views/adminview/assets')}}/css/all-responsive.css" />

{{-- <script src="path/to/notifyuser.js"></script> --}}
{{-- <script src="path/to/your-current-script.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


@php
$userdata = Session::get('userdata');

$guest_id = '';
$user_profile_photo = '';
$token = '';
$role_id = '';
$guid = '';
$developer_id = '';

if ($userdata && isset($userdata[0])) {

    $guest_id = $userdata[0]['guest_id'] ?? '';
    $user_profile_photo = $userdata[0]['user_profile_photo'] ?? '';
    $token = $userdata[0]['token'] ?? '';
    $role_id = $userdata[0]['role_id'] ?? '';
    $guid = $userdata[0]['guid'] ?? '';
   
} else {

    // return redirect()->route('login');
}
@endphp

<script>
    var guest_id = '{{ $guest_id }}';
    var user_profile_photo = '{{ $user_profile_photo }}';
    var token = '{{ $token }}';
    var role_id = '{{ $role_id }}';
    var guid = '{{ $guid }}';
   
    sessionStorage.setItem('guest_id', guest_id);
    sessionStorage.setItem('user_profile_photo', user_profile_photo);
    sessionStorage.setItem('token', token);
    sessionStorage.setItem('role_id', role_id);
    sessionStorage.setItem('guid', guid);
 
    function slugify(content) {
        return content.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    }

    function checknull(value) {
        if (value == null || value == "") {
            return "";
        } else {
            return value;
        }
    }

    function notifyuser(type, message) {
        $.notify(message, type);
    }
</script>
