<?php
$page = 'Function Categories';
$parentname = 'Function Categories';
$pagename = 'Function Categories';
$pagetype = 'Function Categories';
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
                            <h1 class="fs-5 fw-600 lh-1">Function Categories</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="masters">Masters</a>
                                </li>
                                <li class="active">Function Categories</li>
                            </ul>
                        </div>
                        <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                            <div class="form-group mb-0">
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Search">
                            </div>
                            
                            <a class="btn btn-primary" id="btn-add-category" open-sidebar="add-category-sidebar"
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
                                            <th class="th-with-dropdown">Category Name
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
                                            <th class="th-with-dropdown">Date
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
                                            <th class="th-with-dropdown">Tithi
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
                                    <tbody id="handle-list-categories">
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

        <div id="add-category-sidebar" class="theme-sidebar theme-sidebar-sm">
            <div class="theme-sidebar-card">
                <div class="theme-sidebar-header">
                    <h5 class="theme-sidebar-title">Add Function Category</h5>
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
                                        <label class="form-label">Category Name<span class="required-asterisk">*</span></label>
                                        <input type="text" name="categories_name" id="categories_name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Category Date<span class="required-asterisk">*</span></label>
                                        <input type="date" name="categories_date" id="categories_date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="categories_description" id="categories_description" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <div class="form-group">
                                        <label class="form-label">Function Tithi</label>
                                        <input type="text" name="function_tithi" id="function_tithi" class="form-control">
                                    </div>
                                </div>

                                <div class="column is-12 col-form">
                                    <input type="hidden" name="guid" id="guid" />
                                    <button type="submit" class="btn btn-primary w-100" id="sbt-category">Add</button>
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
                                    <input type="hidden" name="delete_guid" id="delete_guid" />
                                    <button type="submit" class="btn btn-danger w-100" id="delete-category">Delete</button>
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

        $(document).ready(function() {
            getAllCategories();
            $(".main-loading").hide();
            $("#search").on('input', function() {
                var filterData = {
                    "search": $(this).val()
                };
                getAllCategories(page = 1, offset = 0, limit = pagelimit, filterData);
            });
        });

        $(document).on("click", "#btn-add-category", function() {
            $('#guid').val(''); 
            $('#categories_name').val('');
            $('#categories_date').val('');
            $('#categories_description').val('');
            $('#function_tithi').val('');
            $('#add-category-sidebar').addClass('show');
            $('.theme-sidebar-title').html("Add Function Category");
            $('#sbt-category').html("Add");
        });

        $(document).on("click", "#openedit", function() {
            var guid = $(this).data("guid");
            $("#guid").val(guid);

            var categories_name = $(this).data("categories_name");
            var categories_date = $(this).data("categories_date");
            var categories_description = $(this).data("categories_description");
            var function_tithi = $(this).data("function_tithi");
            
            $("#categories_name").val(categories_name);
            $("#categories_date").val(categories_date);
            $("#categories_description").val(categories_description);
            $("#function_tithi").val(function_tithi);

            $('#sbt-category').html("Save changes");
            $('.theme-sidebar-title').html("Edit Function Category");
            $('#add-category-sidebar').addClass('active');
        });

        $("#add-category-sidebar form").submit(function(e) {
            e.preventDefault();
        }).validate({
            submitHandler: function(form) {
                var formData = new FormData(form);

                var guid = $('#guid').val();
                var url = '';
                var type = 'POST'; 
                if (guid != null && guid !== '') {
                    url = apipath + "/functioncategories/update"; 
                } else {
                    url = apipath + "/functioncategories/create";  
                }

                $.ajax({
                    type: type,
                    url: url,
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == 200) {
                            $(".form-control").val("");
                            $(".btn-primary").html('Add').attr('disabled', true);
                            $('#add-category-sidebar').removeClass('active');
                            notifyuser('success', 'Function Category saved successfully');
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            notifyuser('error', 'An error occurred');
                        }
                    },
                    complete: function() {
                        $(".btn-primary").html('Add').removeAttr("disabled");
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        $(".btn-primary").html('Add').removeAttr("disabled");
                    }
                });

                return false;
            }
        });

        function getAllCategories(page = 1, offset = 0, limit = pagelimit, filterData = "") {
            var formdata = {
                offset: offset,
                limit: limit,
            };
            if (filterData && filterData.search !== undefined && filterData.search !== "") {
                formdata['search'] = filterData.search;
            }
            $.ajax({
                url: apipath + "/functioncategories/list",
                type: 'POST',
                dataType: 'json',
                data: formdata,
                success: function(response) {
                    $('#handle-list-categories').empty();

                    if (!response.data || response.data.length === 0) {
                        $('#handle-list-categories').html(`
                            <tr>
                                <td colspan="6" class="no-data-row text-center">
                                    Data Not Found
                                </td>
                            </tr>
                        `);
                        return;
                    }

                    $.each(response.data, function(index, item) {
                        var categoryDate = item.categories_date ? new Date(item.categories_date) : null;
                        var dateDisplay = categoryDate ? categoryDate.toLocaleDateString('en-US', { 
                            year: 'numeric', 
                            month: 'short', 
                            day: 'numeric' 
                        }) : '-';

                        $('#handle-list-categories').append(`
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
                                            <span class="avatar avatar-md">
                                                <span class="user-name-latter latter-j">${item.categories_name.charAt(0)}</span>
                                            </span>
                                            <div>
                                                <b>${item.categories_name}</b>
                                                ${item.categories_description ? '<br><small class="gray-600">' + item.categories_description + '</small>' : ''}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>${dateDisplay}</td>
                                <td>${item.function_tithi || '-'}</td>
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
                                        <a href="#" open-sidebar="edit-category-sidebar" id="openedit" 
                                           data-guid="${item.guid}" 
                                           data-categories_name="${item.categories_name}"
                                           data-categories_date="${item.categories_date}"
                                           data-categories_description="${item.categories_description || ''}"
                                           data-function_tithi="${item.function_tithi || ''}">
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
                    console.log("Error fetching function categories data:", error);
                }
            });
        }

        $(document).on('click', '.opendelete', function(e) {
            e.preventDefault();
            var guid = $(this).data('guid');
            $('#delete_guid').val(guid);
            $('#delete-sidebar').addClass('active');
        });

        $(document).on('click', '#delete-category', function (e) {
            e.preventDefault();

            var deleteInput = $('#deletedata').val().trim();

            if (deleteInput === "DELETE") {
                var guid = $('#delete_guid').val();

                $.ajax({
                    type: 'POST',
                    url: apipath + "/functioncategories/delete",
                    dataType: 'json',
                    data: { guid: guid },

                    success: function (response) {
                        $('#delete-sidebar').removeClass('active');

                        notifyuser('success', 'Function Category deleted successfully');
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    },

                    error: function (err) {
                        console.error('Error deleting data:', err);
                        notifyuser('error', 'There was an error deleting the Function Category');
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