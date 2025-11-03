<?php
$page = 'City';
$parentname = 'City';
$pagename = 'City';
$pagetype = 'City';
?>
@extends('adminview/layout/master')
@section('body')
    <style>
        .required-asterisk {
            color: red;
        }
    </style>

    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-4">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">City</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active">City</li>
                            </ul>
                        </div>
                        <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                            <div class="form-group mb-0">
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Search">
                            </div>
                            <a class="btn btn-primary" id="btn-add-user" open-sidebar="add-users-sidebar"
                                href="#">Add</a>
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
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 5l0 14" />
                                                            <path d="M18 13l-6 6" />
                                                            <path d="M6 13l6 6" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">City
                                                <div class="table-filter">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 5l0 14" />
                                                            <path d="M18 13l-6 6" />
                                                            <path d="M6 13l6 6" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Logs
                                                <div class="table-filter">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 5l0 14" />
                                                            <path d="M18 13l-6 6" />
                                                            <path d="M6 13l6 6" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="handle-list-1">
                                        <tr>
                                            <!--dynamically data-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div
                            class="card-footer is-align-items-center is-flex is-gap-3 is-justify-content-space-between px-5 pb-5">
                            <span class="fs-7 gray-700">Showing 1 to 5 of 5 Entries</span>
                            <ul class="pagination ml-auto">
                                <li class="page-item">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M11 7l-5 5l5 5"></path>
                                            <path d="M17 7l-5 5l5 5"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 7l5 5l-5 5"></path>
                                            <path d="M13 7l5 5l-5 5"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div id="add-users-sidebar" class="theme-sidebar theme-sidebar-sm">
            <div class="theme-sidebar-card">
                <div class="theme-sidebar-header">
                    <h5 class="theme-sidebar-title">Add City</h5>
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
                                        <label class="form-label">City Name<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="city_name" id="city_name"class="form-control">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <input type="hidden" name="guid" id="guid" />
                                    <button type="submit" class="btn btn-primary w-100" id="sbt">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                        <label class="form-label">Type "DELETE" in Input Box  <span style="color: red;"> * </span></label>
                                        <input type="text" class="form-control" placeholder="DELETE" id="deletedata">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <input type="hidden" name="guid" id="guid" />
                                    <button type="submit" class="btn btn-danger w-100" id="delete">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>


    <script>
        $(document).ready(function() {
            $(".main-loading").hide();
    
            // API base path (adjust if needed)
            var apipath = "http://localhost/laravel-admin/api/city";

            function loadCity() {
                $.ajax({
                    url: apipath + '/list',
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        var tableBody = $('#handle-list-1');
                        tableBody.empty();
    
                        if (response.data && response.data.length > 0) {
                            $.each(response.data, function(index, item) {
                                var row = `
                                    <tr>
                                        <td>${index + 1}</td>
                                        <td>${item.city_name}</td>
                                        <td>${item.created_at}</td>
                                        <td class="text-center">
                                        <button class="btn btn-sm btn-icon btn-info edit-btn" data-guid="${item.guid}" data-name="${item.country_name}" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" 
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                class="icon icon-tabler icon-tabler-pencil">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1l1 -4Z"></path>
                                            </svg>
                                        </button>

                                        <button class="btn btn-sm btn-icon btn-danger delete-btn" data-guid="${item.guid}" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" 
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                class="icon icon-tabler icon-tabler-trash">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 7h16"></path>
                                                <path d="M10 11v6"></path>
                                                <path d="M14 11v6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7V4h6v3"></path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            `;
                            tableBody.append(row);
                            });
                        } else {
                            tableBody.append('<tr><td colspan="4" class="text-center">No data found</td></tr>');
                        }
                    },
                    error: function() {
                        $.notify("Error fetching data", "error");
                    }
                });
            }
    
            loadCity(); // Load data on page load

            $('#sbt').click(function(e) {
                e.preventDefault();
    
                var city_name = $('#city_name').val().trim();
                var guid = $('#guid').val();
    
                if (city_name == "") {
                    $.notify("City Name is required", "error");
                    return false;
                }
    
                var url = guid ? apipath + '/update' : apipath + '/create';
    
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { city_name: city_name, guid: guid },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $.notify(response.message, "success");
                            $('#city_name').val('');
                            $('#guid').val('');
                            loadCity();
                            $('[close-sidebar]').click(); // Close sidebar
                        } else {
                            $.notify(response.message, "error");
                        }
                    },
                    error: function(xhr) {
                        $.notify("Something went wrong", "error");
                        console.log(xhr.responseText);
                    }
                });
            });
    
            $('#search').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#handle-list-1 tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
    
        });
    </script>
@endsection
