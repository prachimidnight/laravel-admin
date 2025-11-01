<?php
$page = 'Leads';
$parentname = 'Leads';
$pagename = 'Leads';
$pagetype = 'Leads';
?>
@extends('adminview/layout/master')
@section('body')
    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-4">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">Leads</h1>
                            <ul class="breadcrumbs mt-1">
                                {{-- <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active highlight">Leads</li> --}}
                            </ul>
                        </div>
                        <div class="lead-filter-btn">
                            <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                                <div class="form-group mb-0">
                                    <input type="text" id="search" name="search" class="form-control"
                                        placeholder="Search">
                                </div>
                            </div>
                            <div class="dropdown is-flex-shrink-0" id="dropdown-container">
                                <div class="lead-filter" id="dropdown-trigger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-filter">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
                                    </svg>
                                </div>
                            
                                <div class="dropdown-menu pt-1 pb-1" id="dropdown-menu" style="display: none; right: 0; position: absolute; background-color: white; box-shadow: 0 8px 16px rgba(0,0,0,0.1);">
                                    <a class="dropdown-item" href="#" data-sortby="first_name" data-sorttype="asc">A to Z</a>
                                    <a class="dropdown-item" href="#" data-sortby="first_name" data-sorttype="desc">Z to A</a>
                                </div>
                            </div>
                            
                            <div class="dropdown is-flex-shrink-0" id="">
                                <div id="">
                                    <button style="color: #fff; font-weight: 700; padding:12px 18px 11px 18px;" id="exportBtn" class="lead-filter" type="button">EXPORT</button>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="lead-filter">
                            
                        </div> --}}
                    </div>
                </div>
                <div class="px-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="lead-filter">
                                <div class="column is-2 col-form">
                                    <div class="form-group custom-select">
                                        
                                        <select name="project_id" class="form-control select" id="roledata">
                                            <option value="">Project</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="text-nowrap theme-scrollbar-horizontal">
                                <table class="theme-table">
                                    <thead>
                                        <tr>                                      
                                            <th class="th-with-dropdown active">NO</th>
                                            <th class="th-with-dropdown">NAME</th>
                                            <th class="th-with-dropdown">CONTACT</th>
                                            <th class="th-with-dropdown">LEAD SOURCE</th>
                                            <th class="th-with-dropdown">TYPE</th>
                                            <th class="th-with-dropdown">USOURCE</th>
                                            <th class="th-with-dropdown">UMEDIUM</th>
                                            <th class="th-with-dropdown">UCAMPAIGN</th>		
                                            <th class="th-with-dropdown">OTHER UTM  </th>                                            
                                            <th class="th-with-dropdown">TIMESTAMP</th>                                            
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

        <!-- Add City Sidebar -->
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
                                        <label class="form-label">First Name<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Last Name<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="last_name" id="last_name" class="form-control">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Email<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Mobile No<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="contact_no" id="contact_no" minlength="8" maxlength="10" class="form-control">
                                    </div>
                                </div>
                                <div class="column is-12 col-form">
                                    <div class="form-group custom-select">
                                        <label class="form-label">Project<span class="required-asterisk">*</span></label>
                                        <select name="project_id" class="form-control select" id="roledata">
                                            <option value="">Project</option>
                                        </select>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

    <!-- HTML code remains unchanged -->
    <script>
      $(document).ready(function() {
          $(".main-loading").hide();
      });
    </script>
@endsection