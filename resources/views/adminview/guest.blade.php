<?php
$page = 'Guest';
$parentname = 'Guest';
$pagename = 'Guest';
$pagetype = 'Guest';
?>
@extends('adminview/layout/master')
@section('body')
    <style>
        .required-asterisk {
            color: red;
        }

        .wrap-text {
            white-space: normal;
            /* Allow wrapping */
            word-break: break-word;
            /* Break long words */
        }

        .required-asterisk {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">

    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-4">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">Guest</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active">Guest</li>
                            </ul>
                        </div>
                        <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                            <div class="form-group mb-0">
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Search">
                            </div>
                            <a class="btn btn-primary btn-add-user" id="btn-add-user" open-sidebar="add-users-sidebar"
                                href="addguest">Add</a>
                        </div>
                    </div>
                </div>
                <div class="px-5 mb-5">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="text-nowrap theme-scrollbar-horizontal">
                                <table class="theme-table">
                                    <thead>
                                        <tr>
                                            <th class="th-with-dropdown active">Order
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Developer Name
                                                <div class="table-filter">

                                                </div>
                                            </th>

                                            <th class="th-with-dropdown">Devloper Contact
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Developer Website
                                                <div class="table-filter">

                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Developer Address
                                                <div class="table-filter">

                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Logs
                                                <div class="table-filter">

                                                </div>
                                            </th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="handle-list-1">
                                        <tr>
                                            <!--dynamically data -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box mt-2">
                                <ul id="pagination" class="pagination pull-right page-item active"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Sidebar -->
        <div id="delete-sidebar" class="theme-sidebar theme-sidebar-sm">
            <div class="theme-sidebar-card">
                <div class="theme-sidebar-header">
                    <h5 class="theme-sidebar-title">Delete</h5>
                    <div class="theme-sidebar-action">
                        <span class="close-sidebar" close-sidebar>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="theme-sidebar-detail">
                    <form class="form" action="">
                        <div class="theme-sidebar-content theme-scrollbar">
                            <div class="columns is-multiline">
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Type "DELETE" in Input Box <span style="color: red;"> *
                                            </span></label>

                                        <input type="text" class="form-control" placeholder="DELETE" id="deletedata">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <input type="hidden" name="developer_id" id="developer_id" />
                                    <button type="submit" class="btn btn-danger w-100" id="delete">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <!-- HTML code remains unchanged -->
    <script>
        $(document).ready(function() {
            $(".main-loading").hide();
        });
    </script>
@endsection
