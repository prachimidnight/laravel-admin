<?php
$page = 'Masters';
$parentname = 'Masters';
$pagename = 'Masters';
$pagetype = 'Masters';
?>
@extends('adminview/layout/master')
@section('body')

    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-6">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">Masters</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active">Masters</li>
                            </ul>
                        </div>
                        <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                        </div>
                    </div>
                </div>
                <div class="px-5 mb-5">
                    <div class="columns is-multiline">
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-purple">
                                    <a href="city">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l18 0" />
                                            <path d="M9 8l1 0" />
                                            <path d="M9 12l1 0" />
                                            <path d="M9 16l1 0" />
                                            <path d="M14 8l1 0" />
                                            <path d="M14 12l1 0" />
                                            <path d="M14 16l1 0" />
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                        </svg>
                                        <span>City</span>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                      <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-blue">
                                    <a href="state">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l18 0" />
                                            <path d="M9 8l1 0" />
                                            <path d="M9 12l1 0" />
                                            <path d="M9 16l1 0" />
                                            <path d="M14 8l1 0" />
                                            <path d="M14 12l1 0" />
                                            <path d="M14 16l1 0" />
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                        </svg>
                                        <span>State</span>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-orange">
                                    <a href="country">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l18 0" />
                                            <path d="M9 8l1 0" />
                                            <path d="M9 12l1 0" />
                                            <path d="M9 16l1 0" />
                                            <path d="M14 8l1 0" />
                                            <path d="M14 12l1 0" />
                                            <path d="M14 16l1 0" />
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                        </svg>
                                        <span>Country</span>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                     
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-green">
                                    <a href="userroles">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <span>User Roles</span>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-red">
                                    <a href="guest">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        <span>Guest</span>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>  
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <div class="card gradient-card gradient-blue">
                                    <a href="functioncategories">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icon-tabler-category">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 4h6v6h-6z" />
                                            <path d="M14 4h6v6h-6z" />
                                            <path d="M4 14h6v6h-6z" />
                                            <path d="M14 14h6v6h-6z" />
                                        </svg>
                                        <span>Function Categories</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
    $(document).ready(function () {
        $(".main-loading").hide();

        $.ajax({
            url: apipath + "/guest/dashboarddata",
            type: "POST",
            dataType: "json",
            success: function (res) {
                if (res.status === 200) {
                    $('#guest-count').text(res.total_guests);
                }
            }
        });
    });
    </script>
@endsection
