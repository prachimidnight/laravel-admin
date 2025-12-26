<?php
$page = 'Guest';
$parentname = 'Guest';
$pagename = 'Guest';
$pagetype = 'Guest';
?>
@extends('adminview.layout.master')
@section('body')
    <style>
        .required-asterisk {
            color: red;
        }
        .wrap-text {
            white-space: normal;
            word-break: break-word;
        }
        .dropdown-item:hover {
            background-color: #f5f5f5;
        }
        .dropdown-menu {
            margin-top: 5px !important;
        }
        .custom-loading-popup {
            box-shadow: none !important;
            background: transparent !important;
        }
        .custom-loading-popup .swal2-title {
            color: #fff !important;
            font-size: 1.5rem !important;
            margin-bottom: 20px !important;
        }
        .custom-loading-text {
            color: rgba(255, 255, 255, 0.9) !important;
            margin-bottom: 25px !important;
        }
        .custom-loading-popup .swal2-loader {
            border: 4px solid rgba(255, 255, 255, 0.3) !important;
            border-top-color: #fff !important;
            width: 60px !important;
            height: 60px !important;
            animation: swal2-rotate 1s linear infinite !important;
        }
        @keyframes swal2-rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .swal2-container {
            backdrop-filter: blur(3px);
        }
        .filter-dropdown {
            display: none;
            position: absolute;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            min-width: 280px;
            z-index: 1000;
            margin-top: 5px;
            padding: 15px;
        }
        .filter-dropdown.active {
            display: block;
        }
        .filter-section {
            margin-bottom: 15px;
        }
        .filter-section:last-child {
            margin-bottom: 0;
        }
        .filter-label {
            font-weight: 600;
            font-size: 13px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        .filter-option {
            display: block;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.2s;
            font-size: 14px;
            color: #555;
            margin-bottom: 4px;
        }
        .filter-option:hover {
            background-color: #f5f5f5;
        }
        .filter-option input[type="checkbox"] {
            margin-right: 8px;
        }
        .filter-divider {
            height: 1px;
            background-color: #e0e0e0;
            margin: 12px 0;
        }
        .filter-actions {
            display: flex;
            gap: 8px;
            margin-top: 15px;
            padding-top: 12px;
            border-top: 1px solid #e0e0e0;
        }
        .filter-btn {
            flex: 1;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.2s;
        }
        .filter-btn-apply {
            background-color: #007bff;
            color: white;
        }
        .filter-btn-apply:hover {
            background-color: #0056b3;
        }
        .filter-btn-clear {
            background-color: #f5f5f5;
            color: #333;
        }
        .filter-btn-clear:hover {
            background-color: #e0e0e0;
        }
        .dropdown-wrapper {
            position: relative;
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
                            <div class="dropdown-wrapper">
                                <button class="btn btn-primary" id="btn-filter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icon-tabler-filter mr-1">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z"/>
                                    </svg>
                                    Filter
                                </button>
                                <div class="filter-dropdown" id="filter-dropdown">
                                    <div class="filter-section">
                                        <label class="filter-label">Role</label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-role" value="4" />
                                            Friends
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-role" value="5" />
                                            Business Relatives
                                        </label>
                                    </div>
                                    <div class="filter-divider"></div>
                                    <div class="filter-section">
                                        <label class="filter-label">Function</label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="1" />
                                            All Functions
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="2" />
                                            Wedding
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="3" />
                                            Birthday Party
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="4" />
                                            Anniversary
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="5" />
                                            Engagement
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-function" value="6" />
                                            Diwali Get To Gather
                                        </label>
                                    </div>
                                    <div class="filter-divider"></div>
                                    <div class="filter-section">
                                        <label class="filter-label">Gift</label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-gift" value="1" />
                                            Yes
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" class="filter-gift" value="0" />
                                            No
                                        </label>
                                    </div>
                                    <div class="filter-actions">
                                        <button type="button" class="filter-btn filter-btn-apply" id="btn-apply-filter">
                                            Apply
                                        </button>
                                        <button type="button" class="filter-btn filter-btn-clear" id="btn-clear-filter">
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" id="btn-sort">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-arrows-sort mr-1">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 9l4 -4l4 4"/>
                                    <path d="M7 5v14"/>
                                    <path d="M21 15l-4 4l-4 -4"/>
                                    <path d="M17 19v-14"/>
                                </svg>
                                Sort
                            </button>
                            <div class="dropdown-menu" id="sort-dropdown" style="display: none; position: absolute; background: white; border: 1px solid #ddd; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); min-width: 150px; z-index: 1000; margin-top: 5px;">
                                <a href="#" class="dropdown-item sort-option" data-sort="asc" style="display: block; padding: 10px 15px; text-decoration: none; color: #333; transition: background 0.2s;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px; vertical-align: middle;">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline>
                                    </svg>
                                    Ascending (A-Z)
                                </a>
                                <a href="#" class="dropdown-item sort-option" data-sort="desc" style="display: block; padding: 10px 15px; text-decoration: none; color: #333; transition: background 0.2s;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px; vertical-align: middle;">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="19 12 12 5 5 12"></polyline>
                                    </svg>
                                    Descending (Z-A)
                                </a>
                            </div>
                            <a class="btn btn-primary" id="btn-export" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-file-export mr-1">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"/>
                                    <path d="M5 13v-8a2 2 0 0 1 2 -2h7l5 5v5"/>
                                    <path d="M12 15v6"/>
                                    <path d="M9 18l3 3l3 -3"/>
                                </svg>
                                Export
                            </a>
                            <a class="btn btn-primary btn-add-user" id="btn-add-user"
                            open-sidebar="add-guest-sidebar" href="addguest">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                 class="icon icon-tabler icon-tabler-user-plus mr-1">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                 <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/>
                                 <path d="M16 19h6"/>
                                 <path d="M19 16v6"/>
                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h4"/>
                             </svg>
                             Add
                         </a>
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
                                            <th class="th-with-dropdown">Name
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Guest Contact
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Address
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Role
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Category
                                                <div class="table-filter">
                                                </div>
                                            </th>
                                            <th class="th-with-dropdown">Gift
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
                                        </tr>
                                    </tbody>
                                </table>
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
        </div>
        <div id="add-users-sidebar" class="theme-sidebar theme-sidebar-sm">
            <div class="theme-sidebar-card">
                <div class="theme-sidebar-header">
                    <h5 class="theme-sidebar-title">Edit Guest</h5>
                    <div class="theme-sidebar-action">
                        <span class="close-sidebar" close-sidebar>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="theme-sidebar-detail">
                    <form id="updateForm">
                        <div class="theme-sidebar-content theme-scrollbar">
                            <input type="hidden" name="guid" id="guid" />
                            <div class="columns is-multiline">
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name" id="edit_first_name">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" id="edit_last_name">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="edit_email">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Phone No</label>
                                        <input type="text" class="form-control" name="phone_no" id="edit_phone_no"
                                            minlength="8" maxlength="10">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">WhatsApp No</label>
                                        <input type="text" class="form-control" name="whatsapp_no" id="edit_whatsapp_no"
                                            minlength="8" maxlength="10">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="edit_address" rows="3"></textarea>
                                    </div>
                                </div>
                               <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Country </label>
                                        <select class="form-control" name="country" id="country">
                                            <option value="">Select Country</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">State </label>
                                        <select class="form-control" name="state" id="state">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">City </label>
                                        <select class="form-control" name="city" id="city">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="edit_description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <button type="submit" class="btn btn-primary w-100" id="sbt">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                    <input type="hidden" name="guid" id="delete_guid" />
                                    <button type="submit" class="btn btn-danger w-100" id="delete">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        var currentSortOrder = 'asc';
        var currentRoleFilter = null;
        var currentFilters = {
            roles: [],
            functions: [],
            gifts: []
        };
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            currentRoleFilter = urlParams.get('role');
            if (currentRoleFilter) {
                let pageTitle = 'Guest';
                if (currentRoleFilter === '4') {
                    pageTitle = 'Friends';
                } else if (currentRoleFilter === '5') {
                    pageTitle = 'Business Relatives';
                }
                $('.card-title h1').text(pageTitle);
                $('.breadcrumbs .active').text(pageTitle);
            }
            getallguest();
            updateGuestCount();     
            $(".main-loading").hide();
            $("#search").on('input', function() {
                var filterData = {
                    "search": $(this).val(),
                    "sort_order": currentSortOrder,
                    "filters": currentFilters
                };
                getallguest(1, 0, pagelimit, filterData);
            });
            $('#btn-filter').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $('#filter-dropdown').toggleClass('active');
                $('#sort-dropdown').hide();
            });
            $('#btn-sort').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $('#sort-dropdown').toggle();
                $('#filter-dropdown').removeClass('active');
            });
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.dropdown-wrapper').length && 
                    !$(e.target).closest('.dropdown').length) {
                    $('#sort-dropdown').hide();
                    $('#filter-dropdown').removeClass('active');
                }
            });
            $('#btn-apply-filter').on('click', function(e) {
                e.preventDefault();               
                currentFilters = {
                    roles: [],
                    functions: [],
                    gifts: []
                };
                $('.filter-role:checked').each(function() {
                    currentFilters.roles.push($(this).val());
                });
                $('.filter-function:checked').each(function() {
                    currentFilters.functions.push($(this).val());
                });
                $('.filter-gift:checked').each(function() {
                    currentFilters.gifts.push($(this).val());
                });
                $('#filter-dropdown').removeClass('active');
                Swal.fire({
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    backdrop: 'rgba(0, 0, 0, 0.8)', 
                    background: 'transparent',
                    color: '#fff',
                    customClass: {
                        popup: 'custom-loading-popup',
                        htmlContainer: 'custom-loading-text'
                    },
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                var filterData = {
                    "search": $("#search").val(),
                    "sort_order": currentSortOrder,
                    "filters": currentFilters
                };
                getallguest(1, 0, pagelimit, filterData);
                setTimeout(() => {
                    Swal.close();
                }, 500);
            });
            $('#btn-clear-filter').on('click', function(e) {
                e.preventDefault();
                $('.filter-role, .filter-function, .filter-gift').prop('checked', false);
                currentFilters = {
                    roles: [],
                    functions: [],
                    gifts: []
                };
                $('#filter-dropdown').removeClass('active');
                var filterData = {
                    "search": $("#search").val(),
                    "sort_order": currentSortOrder,
                    "filters": currentFilters
                };
                getallguest(1, 0, pagelimit, filterData);
            });
            $('.sort-option').on('click', function(e) {
            e.preventDefault();
                currentSortOrder = $(this).data('sort');
                $('#sort-dropdown').hide();
                Swal.fire({
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    backdrop: 'rgba(0, 0, 0, 0.8)', 
                    background: 'transparent',
                    color: '#fff',
                    customClass: {
                        popup: 'custom-loading-popup',
                        htmlContainer: 'custom-loading-text'
                    },
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                var filterData = {
                    "search": $("#search").val(),
                    "sort_order": currentSortOrder
                };
                getallguest(1, 0, pagelimit, filterData);
                setTimeout(() => {
                    Swal.close();
                }, 500);
            });
        });
        function updateGuestCount() {
            $.ajax({
                url: apipath + "/guest/guest-count",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if(response.status === 200) {
                        $('#guest-count').text(response.count);
                        localStorage.setItem("guest_count", response.count);
                    }
                },
                error: function(err) {
                    console.log("Error fetching count:", err);
                    var savedCount = localStorage.getItem("guest_count") || 0;
                    $('#guest-count').text(savedCount);
                }
            });
        }
        $(document).ready(function () {
            loadCountries();
            loadCategories();
            function loadCountries() {
                $.ajax({
                    url: apipath + "/country/list",
                    type: "POST",
                    dataType: "json",
                    success: function (response) {
                        $('#country').html('<option value="">Select Country</option>');
                        $.each(response.data, function (index, item) {
                            $('#country').append(`<option value="${item.country_id}">${item.country_name}</option>`);
                        });
                    },
                    error: function (xhr) {
                        console.error("Error loading countries:", xhr.responseText);
                    }
                });
            }
            function loadCategories() {
                $.ajax({
                    url: apipath + "/functioncategories/list",
                    type: "POST",
                    dataType: "json",
                    success: function (response) {
                        $('#category').html('<option value="">Select Category</option>');
                        if (response.data && response.data.length > 0) {
                            $.each(response.data, function (index, item) {
                                $('#category').append(`<option value="${item.categories_id}">${item.categories_name}</option>`);
                            });
                        }
                    },
                    error: function (xhr) {
                        console.error("Error loading categories:", xhr.responseText);
                    }
                });
            }
                $(document).on('change', '.gift-checkbox', function () {
                var checkbox = $(this);
                var guid = checkbox.data('guid');
                var isGift = checkbox.is(':checked') ? 1 : 0;
                checkbox.prop('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: apipath + '/guest/update',
                    dataType: 'json',
                    data: {
                        guid: guid,
                        is_gift: isGift
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            notifyuser('success', 'Gift status updated successfully');
                        } else {
                            notifyuser('error', response.message || 'Failed to update gift status');
                            checkbox.prop('checked', !isGift);
                        }
                    },
                    error: function () {
                        notifyuser('error', 'Server error! Please try again');
                        checkbox.prop('checked', !isGift);
                    },
                    complete: function () {
                        checkbox.prop('disabled', false);
                    }
                });
                });
            $('#country').on('change', function () {
                var country_id = $(this).val();
                $('#state').html('<option value="">Select State</option>');
                $('#city').html('<option value="">Select City</option>');
                if (country_id) {
                    $.ajax({
                        url: apipath + "/state/list",
                        type: "POST",
                        dataType: "json",
                        data: { country_id: country_id },
                        success: function (response) {
                            if (response.data && response.data.length > 0) {
                                $.each(response.data, function (index, item) {
                                    $('#state').append(`<option value="${item.state_id}">${item.state_name}</option>`);
                                });
                            } else {
                                $('#state').append('<option value="">No states found</option>');
                            }
                        },
                        error: function (xhr) {
                            console.error("Error loading states:", xhr.responseText);
                        }
                    });
                }
            });
            $('#state').on('change', function () {
                var state_id = $(this).val();
                $('#city').html('<option value="">Select City</option>');
                if (state_id) {
                    $.ajax({
                        url: apipath + "/city/list",
                        type: "POST",
                        dataType: "json",
                        data: { state_id: state_id },
                        success: function (response) {
                            if (response.data && response.data.length > 0) {
                                $.each(response.data, function (index, item) {
                                    $('#city').append(`<option value="${item.city_id}">${item.city_name}</option>`);
                                });
                            } else {
                                $('#city').append('<option value="">No cities found</option>');
                            }
                        },
                        error: function (xhr) {
                            console.error("Error loading cities:", xhr.responseText);
                        }
                    });
                }
            });
        });
        $(document).on("click", "#openedit", function() {
            var $this = $(this);
            var guid = $this.data("guid");
            var first_name = $this.data("first_name");
            var last_name = $this.data("last_name");
            var email = $this.data("email");
            var phone_no = $this.data("phone_no");
            var whatsapp_no = $this.data("whatsapp_no");
            var address = $this.data("address");
            var city_id = $this.data("city_id");
            var state_id = $this.data("state_id");
            var country_id = $this.data("country_id");
            var categories_id = $this.data("categories_id");
            var description = $this.data("description");
            $("#guid").val(guid || '');
            $("#edit_first_name").val(first_name || '');
            $("#edit_last_name").val(last_name || '');
            $("#edit_email").val(email || '');
            $("#edit_phone_no").val(phone_no || '');
            $("#edit_whatsapp_no").val(whatsapp_no || '');
            $("#edit_address").val(address || '');
            $("#edit_description").val(description || '');
            if (categories_id) {
                $('#category').val(categories_id);
            }
            if (country_id) {
                $('#country').val(country_id);
                $.ajax({
                    url: apipath + "/state/list",
                    type: "POST",
                    dataType: "json",
                    data: { country_id: country_id },
                    success: function (response) {
                        $('#state').html('<option value="">Select State</option>');
                        if (response.data && response.data.length > 0) {
                            $.each(response.data, function (index, item) {
                                $('#state').append(`<option value="${item.state_id}">${item.state_name}</option>`);
                            });
                            if (state_id) {
                                $('#state').val(state_id);
                                $.ajax({
                                    url: apipath + "/city/list",
                                    type: "POST",
                                    dataType: "json",
                                    data: { state_id: state_id },
                                    success: function (response) {
                                        $('#city').html('<option value="">Select City</option>');
                                        if (response.data && response.data.length > 0) {
                                            $.each(response.data, function (index, item) {
                                                $('#city').append(`<option value="${item.city_id}">${item.city_name}</option>`);
                                            });
                                            if (city_id) {
                                                $('#city').val(city_id);
                                            }
                                        }
                                    }
                                });
                            }
                        }
                    }
                });
            }
            $('#sbt').html("Save changes");
            $('.theme-sidebar-title').html("Edit Guest");
            $('#add-users-sidebar').addClass('active');
        });
        function notifyuser(type, message) {
            $.notify(message, type);
        }
        $(document).on("submit", "#updateForm", function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.delete('country');
            formData.delete('state');
            formData.delete('city');
            formData.delete('category');
            formData.append('country_id', $('#country').val());
            formData.append('state_id', $('#state').val());
            formData.append('city_id', $('#city').val());
            formData.append('categories_id', $('#category').val());
            formData.append('guid', $('#guid').val());
            var url = apipath + "/guest/update";
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == 200) {
                        $('#add-users-sidebar').removeClass('active');
                        notifyuser('success', 'Guest updated successfully');
                        setTimeout(() => { 
                            location.reload(); 
                        }, 2000);
                    } else {
                        notifyuser('error', data.message || 'Failed to update guest');
                        $(".btn-primary").html('Save changes').removeAttr("disabled");
                    }
                },
                error: function(xhr) {
                    console.error("Update error:", xhr);
                    notifyuser('error', 'Something went wrong. Please try again');
                    $(".btn-primary").html('Save changes').removeAttr("disabled");
                }
            });
        });
        function getallguest(page = 1, offset = 0, limit = pagelimit, filterData = "") {
            var formdata = {
                offset: offset,
                limit: limit
            };
            if (currentRoleFilter) {
                formdata['role_id'] = currentRoleFilter;
             } 
            if (filterData && filterData.search !== undefined && filterData.search !== "") {
                formdata['search'] = filterData.search;
            }
            if (filterData && filterData.sort_order !== undefined) {
                formdata['sort_order'] = filterData.sort_order;
            }
            $.ajax({
            url: apipath + "/guest/list",
            type: 'POST',
            dataType: 'json',
            data: formdata,
            success: function(response) {
                $('#handle-list-1').empty();
                if (!response.data || response.data.length === 0) {
                    $('#handle-list-1').html(`
                        <tr>
                        <td colspan="9" class="no-data-row">
                                Data Not Found
                            </td>
                        </tr>
                    `);
                    return;
                }
                var sortedData = response.data;
                if (filterData && filterData.sort_order) {
                    sortedData = response.data.sort(function(a, b) {
                        var nameA = (a.first_name + ' ' + a.last_name).toLowerCase();
                        var nameB = (b.first_name + ' ' + b.last_name).toLowerCase();
                        
                        if (filterData.sort_order === 'asc') {
                            return nameA.localeCompare(nameB);
                        } else {
                            return nameB.localeCompare(nameA);
                        }
                    });
                }
                $.each(sortedData, function(index, item) {
                    $('#handle-list-1').append(`
                        <tr>
                            <td>
                                <div class="is-flex is-align-items-center is-gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-direction drag-handle cursor-pointer">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 10l3 -3l3 3" />
                                        <path d="M9 14l3 3l3 -3" />
                                    </svg>
                                    ${index + 1}
                                </div>
                            </td>
                            <td>
                                <div class="tag-rounded-wrapper">
                                    <div class="tag-rounded tag-rounded-gray">
                                        <a href="${item.profile_image}" data-fancybox="user-photo">
                                        <img class="avatar avatar-md" src="${item.profile_image}" alt="Avatars" />
                                        </a>
                                        <div>
                                            <b>${item.first_name} ${item.last_name}</b>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="tag-list">
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                                                <path d="M3 7l9 6l9 -6"></path>
                                            </svg>
                                        </div>
                                        ${item.email ? item.email : '-'}
                                    </span>
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        ${item.phone_no ? item.phone_no : '-'}
                                    </span>
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                                        </div>
                                    ${item.whatsapp_no ? item.whatsapp_no : '-'}
                                    </span>
                                </div>
                            </td>
                            <td class="wrap-text">
                                ${item.address ? `${item.address}, ${item.city_name || ''}, ${item.state_name || ''}` : '-'}
                            </td>
                            
                            <td>${item.role_name ? item.role_name : '-'}</td>
                            <td>${item.categories_name ? item.categories_name : '-'}</td>
                            <td>
                                <input type="checkbox" class="gift-checkbox" data-guid="${item.guid}" ${item.is_gift == 1 ? 'checked' : ''} />
                            </td>
                            <td>
                                <div class="theme-date-list">
                                    <div class="theme-date" data-tooltip="Create at: ${new Date(item.created_at).toUTCString()}">
                                        <div class="theme-date-content">
                                        <small>${new Date(item.created_at).toLocaleString('default', { month: 'short', timeZone: 'UTC' })}</small>
                                        <span>${new Date(item.created_at).getUTCDate()}</span>
                                    </div>
                                        <span class="theme-date-footer">${new Date(item.created_at).getUTCFullYear()}</span>
                                    </div>
                                    <div class="theme-date" data-tooltip="Update at: ${new Date(item.updated_at).toUTCString()}">
                                        <div class="theme-date-content"> 
                                        <small>${new Date(item.updated_at).toLocaleString('default', { month: 'short', timeZone: 'UTC' })}</small>
                                        <span>${new Date(item.updated_at).getUTCDate()}</span>
                                    </div>
                                        <span class="theme-date-footer">${new Date(item.updated_at).getUTCFullYear()}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-actions-wrapper">
                                <div class="table-actions">
                                    <a href="#" open-sidebar="add-users-sidebar" id="openedit" 
                                        data-guid="${item.guid}"
                                        data-first_name="${item.first_name || ''}"
                                        data-last_name="${item.last_name || ''}"
                                        data-email="${item.email || ''}"
                                        data-phone_no="${item.phone_no || ''}"
                                        data-whatsapp_no="${item.whatsapp_no || ''}"
                                        data-address="${item.address || ''}"
                                        data-city_id="${item.city_id || ''}"
                                        data-state_id="${item.state_id || ''}"
                                        data-country_id="${item.country_id || ''}"
                                        data-categories_id="${item.categories_id || ''}"
                                        data-description="${item.description || ''}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                            <path d="M13.5 6.5l4 4"></path>
                                        </svg>
                                    </a>
                                    <a href="#" open-sidebar="delete-sidebar" class="opendelete" data-guid="${item.guid}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    `);
                });
            },
            error: function(error) {
                console.log("Error fetching guest data:", error);
            }
        });
    }
    $(document).on('click', '#btn-export', function (e) {
        e.preventDefault();
        const urlParams = new URLSearchParams(window.location.search);
        const roleFilter = urlParams.get('role'); // Default: Guests
        const roleIds = [3, 4, 5];
        $.ajax({
            url: apipath + "/guest/list",
            type: "POST",
            dataType: "json",
            data: { offset: 0, limit: 100, role_id:roleIds},
            success: function (response) {
                if (!response.data || response.data.length === 0) {
                    notifyuser('warn', 'No records found for export');
                    return;
                }
                let excelData = response.data.map(item => ({
                    "First Name": item.first_name || '',
                    "Last Name": item.last_name || '',
                    "Email": item.email || '',
                    "Phone": item.phone_no || '',
                    "WhatsApp": item.whatsapp_no || '',
                    "Address": item.address || '',
                    "Role": item.role_name || '',
                    "Category": item.categories_name || '',
                    "Gift": item.is_gift == 1 ? 'Yes' : 'No',
                    "Created At": item.created_at ? new Date(item.created_at).toLocaleString() : '',
                    "Updated At": item.updated_at ? new Date(item.updated_at).toLocaleString() : ''
                }));
                let ws = XLSX.utils.json_to_sheet(excelData);
                const range = XLSX.utils.decode_range(ws['!ref']);
                for (let R = range.s.r; R <= range.e.r; ++R) {
                    for (let C = range.s.c; C <= range.e.c; ++C) {
                        let cellRef = XLSX.utils.encode_cell({ r: R, c: C });
                        if (!ws[cellRef]) continue;
                        ws[cellRef].s = {
                            border: {
                                top:    { style: "thin", color: { rgb: "000000" } },
                                bottom: { style: "thin", color: { rgb: "000000" } },
                                left:   { style: "thin", color: { rgb: "000000" } },
                                right:  { style: "thin", color: { rgb: "000000" } }
                            }
                        };
                    }
                }
                ws['!cols'] = [
                    { wch: 15 }, { wch: 15 }, { wch: 25 },
                    { wch: 15 }, { wch: 15 }, { wch: 25 },
                    { wch: 15 }, { wch: 15 }, { wch: 10 }, 
                    { wch: 20 }, { wch: 20 }
                ];
                let wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, "Guests");
                let fileName = "guest_export.xlsx";
                if (roleFilter === '4') {
                    fileName = "friends_export.xlsx";
                } else if (roleFilter === '5') {
                    fileName = "business_relatives_export.xlsx";
                }
                XLSX.writeFile(wb, fileName);
                notifyuser('success', 'Data exported successfully');
            },
            error: function(err) {
                console.error('Export error:', err);
                notifyuser('error', 'Failed to export data');
            }
        });
    });
    </script>
@endsection