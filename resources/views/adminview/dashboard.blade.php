<?php
$page = 'dashboard';
$parentname = 'dashboard';
$pagename = 'dashboard';
$pagetype = 'dashboard';
?>
@extends('adminview/layout/master')
@section('body')
    <body>
      <div class="theme-wrapper">
        <div class="theme-content">
        <div class="px-5 py-4">
            <div class="card-title">
                <h1 class="fs-5 fw-600 lh-1">Coming soon</h1>
            </div>
        </div>   
    </body>   
    <script>
      $(document).ready(function() {
          $(".main-loading").hide();
      });
    </script>
@endsection
