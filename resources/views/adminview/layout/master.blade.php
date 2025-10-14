<!DOCTYPE html>
<html lang="en">
	<head>
	    @include('adminview.layout.head')
	</head>
    <body id="<?php echo $page; ?>" class="header-fixed header-mobile-fixed subheader-enabled page-loading" id="kt_scrolltop">

        <!-- BEGIN: Header-->
        <div class="main-loading">
            <div class="loading-item"></div>
        </div>
        
        @include('adminview.layout.menu')
        @include('adminview.layout.header')
        @yield('body')
        @include('adminview.layout.foot')
        @include('adminview.layout.footer')               
    </body>
</html>