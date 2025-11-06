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
                                            <!--dynamically data -->
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
    <!-- HTML code remains unchanged -->
    
    <script>
        $(document).ready(function() {
            getallguest();
            $(".main-loading").hide();
            $("#search").on('input', function() {
                var filterData = {
                    "search": $(this).val()
                };
                getallguest(page = 1, offset = 0, limit = pagelimit, filterData);

            });
        });

        $(document).on("click", "#openedit", function() {
        var guid = $(this).data("guid");
        $("#guid").val(guid);

        var first_name = $(this).data("first_name");
        $("#first_name").val(first_name);

        $('#sbt').html("Save changes");
        $('.theme-sidebar-title').html("Edit Guest");
        $('#add-users-sidebar').addClass('active');
    });

    // Only Update Guest
    $("#add-users-sidebar form").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            $(".btn-primary").html('Loading...').attr('disabled', true);

            var formData = new FormData(form);
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
                        Swal.fire({
                            icon: 'success',
                            title: 'Updated!',
                            text: 'Guest updated successfully!',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        notifyuser('error', 'An error occurred while updating');
                    }
                },
                complete: function() {
                    $(".btn-primary").html('Save changes').removeAttr("disabled");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    $(".btn-primary").html('Save changes').removeAttr("disabled");
                }
            });

            return false;
        }
    });

   
        //Get all guest
        function getallguest(page = 1, offset = 0, limit = pagelimit, filterData = "") {
            var formdata = {
                offset: offset,
                limit: limit,
            };
            if (filterData && filterData.search !== undefined && filterData.search !== "") {
                formdata['search'] = filterData.search;
            }
            $.ajax({
                url: apipath + "/guest/list",
                type: 'POST',
                dataType: 'json',
                data: formdata,
                success: function(response) {
                    $('#handle-list-1').empty();

                    $.each(response.data, function(index, item) {
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
                                   
                                    <td>
                                        <input type="checkbox" class="gift-checkbox" data-guest-id="${item.guest_id}" ${item.is_gift == 1 ? 'checked' : ''} />
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
                                              <a href="#" open-sidebar="edit-users-sidebar"  id="openedit" data-guid=${item.guid} data-first_name=${item.first_name}>
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                      <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                                                      <path d="M13.5 6.5l4 4"></path>
                                                  </svg>
                                              </a>
                                              <a href="#" open-sidebar="delete-sidebar" class="opendelete" data-guid=${item.guid}>
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
        $(document).on('click', '.opendelete', function(e) {
            e.preventDefault();
            var guid = $(this).data('guid');
            $('#guid').val(guid);
            $('#delete-sidebar').addClass('active');
        });

        $(document).on('click', '#delete', function(e) {
            e.preventDefault();

            var deleteInput = $('#deletedata').val().trim();

            if (deleteInput === "DELETE") {
                var guid = $('#guid').val();

                // AJAX call to delete data
                $.ajax({
                    type: 'POST',
                    url: apipath + "/guest/delete",
                    dataType: 'json',
                    data: {
                        guid: guid
                    },
                    success: function(response) {
                        // console.log('Data deleted successfully:', response);
                        $('#delete-sidebar').removeClass('active');

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Guest has been deleted successfully.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(err) {
                        console.error('Error deleting data:', err);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'There was an error deleting the Guest. Please try again.',
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Input Required',
                    text: "Please type 'DELETE' in the input box to confirm deletion.",
                });
            }
        });
    </script> 
@endsection
