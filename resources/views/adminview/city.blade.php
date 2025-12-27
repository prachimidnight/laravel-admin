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
                                    <a href="masters">Masters</a>
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
                                        <label class="form-label">Country<span class="required-asterisk">*</span></label>
                                        <select name="country_id" id="country_id" class="form-control" required>
                                            <option value="">Select Country</option>
                                            <!-- Options will be populated dynamically -->
                                        </select>
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">State<span class="required-asterisk">*</span></label>
                                        <select name="state_id" id="state_id" class="form-control" required>
                                            <option value="">Select State</option>
                                            <!-- Options will be populated dynamically -->
                                        </select>
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">City Name<span
                                                class="required-asterisk">*</span></label>
                                        <input type="text" name="city_name" id="city_name"class="form-control" required>
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
    function notifyuser(type, message) {
        $.notify(message, type);
    }

        var currentPage = 1;
        var pagelimit = 5;
        var totalEntries = 0;


        $(document).ready(function() {
            getallcity();
            $(".main-loading").hide();
            
            $("#search").on('input', function() {
                var filterData = {
                    "search": $(this).val()
                };
                currentPage = 1;
                getallcity(currentPage, 0, 5, filterData); // HARDCODED 5
            });
        });

        // Pagination button clicks
        $(document).on('click', '.pagination .page-item:not(.disabled) a', function(e) {
            e.preventDefault();
            
            var $li = $(this).parent();
            var pageText = $(this).text().trim();
            
            // Check if it's prev button (first li)
            if ($li.is(':first-child')) {
                if (currentPage > 1) {
                    currentPage--;
                }
            }
            // Check if it's next button (last li)  
            else if ($li.is(':last-child')) {
                var totalPages = Math.ceil(totalEntries / 5); // HARDCODED 5
                if (currentPage < totalPages) {
                    currentPage++;
                }
            }
            // It's a page number
            else if (!isNaN(pageText) && pageText !== '') {
                currentPage = parseInt(pageText);
            }
            
            var filterData = $("#search").val() ? {"search": $("#search").val()} : "";
            getallcity(currentPage, (currentPage - 1) * 5, 5, filterData); // HARDCODED 5
        });

        function getallcity(page = 1, offset = 0, limit = 5, filterData = "") {
            var formdata = {
                offset: offset,
                limit: 5, // HARDCODED - Force 5
            };
                        
            if (filterData && filterData.search !== undefined && filterData.search !== "") {
                formdata['search'] = filterData.search;
            }
            
            $.ajax({
                url: apipath + "/city/list",
                type: 'POST',
                dataType: 'json',
                data: formdata,
                success: function(response) { 
                    $('#handle-list-1').empty();

                    if (!response.data || response.data.length === 0) {
                        $('#handle-list-1').html(`
                            <tr>
                                <td colspan="4" class="no-data-row text-center">
                                    Data Not Found
                                </td>
                            </tr>
                        `);
                        $('.card-footer span').text('Showing 0 to 0 of 0 Entries');
                        $('.pagination').html('');
                        return;
                    }
                    // Backend returns 'count' field - this is the total records
                    totalEntries = response.count || 0;
                    
                    $.each(response.data, function(index, item) {
                        var serialNumber = offset + index + 1;
                                
                                $('#handle-list-1').append(`
                                    <tr>
                                        <td>
                                            <div class="is-flex is-align-items-center is-gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-direction drag-handle cursor-pointer">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M9 10l3 -3l3 3" />
                                                    <path d="M9 14l3 3l3 -3" />
                                                </svg>
                                                ${serialNumber}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tag-rounded-wrapper">
                                                <div class="tag-rounded tag-rounded-gray">
                                                    <span class="avatar avatar-md">
                                                        <span class="user-name-latter latter-j">${item.city_name.charAt(0)}</span>
                                                    </span>
                                                    <div>
                                                        <b>${item.city_name}</b>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <a href="#" open-sidebar="edit-users-sidebar" id="openedit" 
                                                data-guid="${item.guid}" 
                                                data-city_name="${item.city_name}"
                                                data-country_id="${item.country_id}"
                                                data-state_id="${item.state_id}">
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

                    // Update pagination
                    var start = offset + 1;
                    var end = offset + response.data.length;
                    $('.card-footer span').text(`Showing ${start} to ${end} of ${totalEntries} Entries`);
                    
                    renderPagination();
                },
                error: function(error) {
                    console.log("Error fetching city data:", error);
                }
            });
        }

        function renderPagination() {
            
            var totalPages = Math.ceil(totalEntries / 5); // HARDCODED 5

            if (totalPages <= 1) {
                // console.log('Only 1 page, hiding pagination');
                $('.pagination').html('');
                return;
            }
            
            var html = '';
            
            // Previous button
            html += `
                <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 7l-5 5l5 5"></path>
                            <path d="M17 7l-5 5l5 5"></path>
                        </svg>
                    </a>
                </li>
            `;
            
            // Page numbers
            for (var i = 1; i <= totalPages; i++) {
                html += `
                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                        <a href="#">${i}</a>
                    </li>
                `;
            }
            
            // Next button
            html += `
                <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7l5 5l-5 5"></path>
                            <path d="M13 7l5 5l-5 5"></path>
                        </svg>
                    </a>
                </li>
            `;
            
            $('.pagination').html(html);
        }

        // Rest of functions remain same...
        $(document).on("click", "#btn-add-user", function() {
            $('#add-users-sidebar form').validate().resetForm(); // ✅ ADD
            $('#add-users-sidebar form')[0].reset(); 
            $('#guid').val(''); 
            $('#city_name').val('');
            getCountries();
            getstates();
            $('#add-users-sidebar').addClass('show');
            $('.theme-sidebar-title').html("Add City");
            $('#sbt').html("Add");
        });

        $(document).on("click", "#openedit", function() {
            $('#add-users-sidebar form').validate().resetForm(); // ✅ ADD
            $('#add-users-sidebar form')[0].reset();    
            var guid = $(this).data("guid");
            $("#guid").val(guid);
            var city_name = $(this).data("city_name");
            var country_id = $(this).data("country_id");
            var state_id = $(this).data("state_id");
            $("#city_name").val(city_name);

            getCountries(function() {
                if(country_id) {
                    $('#country_id').val(country_id);
                }
            });

            getstates(function() {
                if(state_id) {
                    $('#state_id').val(state_id);
                }
            });

            $('#sbt').html("Save changes");
            $('.theme-sidebar-title').html("Edit City");
            $('#add-users-sidebar').addClass('active');
        });

        $("#add-users-sidebar form").submit(function(e) {
            e.preventDefault();
        }).validate({
            submitHandler: function(form) {
                var formData = new FormData(form);
                var guid = $('#guid').val();
                var url = guid ? apipath + "/city/update" : apipath + "/city/create";

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
                            $(".form-control").val("");
                            $('#add-users-sidebar').removeClass('active');
                            notifyuser('success', 'City saved successfully');
                            setTimeout(() => {
                                currentPage = 1;
                                getallcity();
                            }, 1000);
                        } else {
                            notifyuser('error', 'An error occurred');
                        }
                    },
                    complete: function() {
                        $(".btn-primary").html('Add').removeAttr("disabled");
                    }
                });
                return false;
            }
        });

        function getCountries(callback) {
            $.ajax({
                type: 'POST',
                url: apipath + '/country/list',
                dataType: 'json',
                success: function(response) {
                    $('#country_id').empty();
                    $('#country_id').append('<option value="">Select Country</option>');
                    $.each(response.data, function(index, item) {
                        $('#country_id').append(`<option value="${item.country_id}">${item.country_name}</option>`);
                    });
                    if(callback && typeof callback === 'function') {
                        callback();
                    }
                }
            });
        }

        function getstates(callback) {
            $.ajax({
                type: 'POST',
                url: apipath + '/state/list',
                dataType: 'json',
                success: function(response) {
                    $('#state_id').empty();
                    $('#state_id').append('<option value="">Select State</option>');
                    $.each(response.data, function(index, item) {
                        $('#state_id').append(`<option value="${item.state_id}">${item.state_name}</option>`);
                    });
                    if(callback && typeof callback === 'function') {
                        callback();
                    }
                }
            });
        }

        $(document).on('click', '.opendelete', function(e) {
            e.preventDefault();
            var guid = $(this).data('guid');
            $('#guid').val(guid);
            $('#add-users-sidebar').removeClass('active show');
            $('#delete-sidebar').addClass('active');
            $('#delete-sidebar .theme-sidebar-title').html("Delete City");
        });

        $(document).on('click', '#delete', function (e) {
            e.preventDefault();
            var deleteInput = $('#deletedata').val().trim();

            if (deleteInput === "DELETE") {
                var guid = $('#guid').val();

                $.ajax({
                    type: 'POST',
                    url: apipath + "/city/delete",
                    dataType: 'json',
                    data: { guid: guid },
                    success: function (response) {
                        $('#delete-sidebar').removeClass('active');
                        notifyuser('success', 'City deleted successfully');
                        setTimeout(() => {
                            getallcity(currentPage, (currentPage - 1) * pagelimit, pagelimit);
                        }, 1000);
                    },
                    error: function (err) {
                        // console.error('Error deleting data:', err);
                        notifyuser('error', 'There was an error deleting the City');
                    }
                });
            } else {
                notifyuser('warn', "Please type 'DELETE' to confirm deletion");
            }
        });
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