<?php
    $title = "CMS by TheMidnight";
	$description = "CMS by TheMidnight";
	$keywords = '';
	$image = "seo";
	$type = "website";
	$canurl = '';
?>
{{-- <?php if ($page=="dashboard") { ?> --}}
<?php
    $title = $pagename .' | '. "CMS by Totality";
	$description = "CMS by Totality";
	$keywords = '';
	$image = "seo";
	$type = "website";
	$canurl = "";
    ?>
{{-- <?php } ?> --}}

<meta name="description" content="Updates and statistics" />

<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="robots" content="noindex,nofollow"/>
<link rel="canonical" href="{{URL::asset('/')}}/<?php echo $canurl; ?>" />
<meta name="author" content="CMS">
<meta name="thumbnail" content="{{URL::asset('/media/')}}/seo/<?php echo $image; ?>.jpg" />
<link rel="shortcut icon" href="{{URL::asset('media/favicon/ashar/favicon.ico')}}" />
<meta name="google-site-verification" content="" />
<meta name="indi-verification" content="" />