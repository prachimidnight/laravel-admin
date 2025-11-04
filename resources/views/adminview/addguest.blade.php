<?php
$page = 'Add Guest';
$parentname = 'Add Guest';
$pagename = 'Add Guest';
$pagetype = 'Add Guest';
?>
@extends('adminview/layout/master')
@section('body')

<body>
    <div class="theme-wrapper">
        <div class="theme-content">
            <div class="px-5 py-4">
                <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                    <div class="card-title">
                        <h1 class="fs-5 fw-600 lh-1">Add Guest</h1>
                        <ul class="breadcrumbs mt-1">
                            <li>
                                <a href="guest">Guest Details</a>
                            </li>
                            <li class="active highlight">Add Guest</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-5 mb-5">
                <div class="card">
                    <div class="card-body p-5">
                        <form id="addproject" class="form" novalidate>
                            <div class="mb-4">
                                <div class="columns is-multiline">

                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="columns is-multiline">

                                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                        <div class="form-group custom-file">
                                            <label for="guest_image" class="form-label">Guest Image
                                                {{-- Developer Logo <span class="required-asterisk">*</span> --}}
                                            </label>
                                            <div class="input-group file-upload"
                                                onclick="document.getElementById('guest_image').click()">
                                                <span class="form-control file-upload-name">Upload</span>
                                                <input type="file" name="guest_image" id="guest_image"
                                                    style="display: none;">
                                                <span class="input-group-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-file-upload">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                        <path
                                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                                        </path>
                                                        <path d="M12 11v6"></path>
                                                        <path d="M9.5 13.5l2.5 -2.5l2.5 2.5"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">First Name <span
                                                    class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="first_name"
                                                id="first_name" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Last Name <span
                                                    class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="last_name"
                                                id="last_name" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Guest Email <span
                                                    class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="email"
                                                id="email" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Guest Phone No <span
                                                    class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="phone_no"
                                                id="phone_no" minlength="8" maxlength="10" required>
                                        </div>
                                    </div>
                                    
                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Guest WhatsApp No <span
                                                    class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="guest_wp"
                                                id="guest_wp" minlength="8" maxlength="10" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="field mt-5">
                                            <label class="checkbox">
                                                <input type="checkbox" id="is_whatsapp" name="is_whatsapp"> Same as WhatsApp
                                                Number
                                            </label>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">City <span class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="city" id="city" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">State <span class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="state" id="state" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Country <span class="required-asterisk">*</span></label>
                                            <input type="text" class="form-control" name="country" id="country" required>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Guest Address <span class="required-asterisk">*</span></label>
                                            <textarea class="form-control" name="address" id="address" rows="4" required></textarea>
                                        </div>
                                    </div>

                                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Description <span class="required-asterisk">*</span></label>
                                            <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="is-flex is-flex-wrap-wrap is-gap-3 pt-5 pl-3">
                                        <input type="hidden" name="guest_id" id="guest_id" />
                                        <button id="btn-add-project" class="btn btn-primary">Add </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
    <script>
        $(document).ready(function () {
            $(".main-loading").hide();
        
            // ✅ Copy WhatsApp number if checkbox is checked
            $('#is_whatsapp').on('change', function () {
                if ($(this).is(':checked')) {
                    $('#guest_wp').val($('#phone_no').val());
                } else {
                    $('#guest_wp').val('');
                }
            });
        
            $('#btn-add-project').on('click', function (e) {
                e.preventDefault();
    
                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var guest_email = $("#guest_email").val();
                var phone_no = $("#phone_no").val();
                var whatsapp_no = $("#guest_wp").val();
                var city = $("#city").val();
                var state = $("#state").val();
                var country = $("#country").val();
                var address = $("#address").val();
                var description = $("#description").val();
        
                // 🧠 Basic validation
                if (
                    first_name == "" || last_name == "" || guest_email == "" ||
                    phone_no == "" || whatsapp_no == "" || city == "" ||
                    state == "" || country == "" || address == "" || description == ""
                ) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Missing Fields',
                        text: 'Please fill all required fields before submitting.'
                    });
                    return;
                }
        
                // ✅ Send data using AJAX
                $.ajax({
                    url: apipath + "/guest/create",
                    type: "POST",
                    dataType: "json",
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        guest_email: guest_email,
                        phone_no: phone_no,
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.status == 200) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Guest Added!',
                                text: 'Guest has been added successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(function () {
                                window.location.href = "guest";
                            });
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Validation Error',
                                text: response.message || "Please check your input fields."
                            });
                        }
                    },
                    error: function (xhr) {
                        console.log("Error adding guest:", xhr);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Failed to add guest. Please try again.'
                        });
                    }
                });
            });
        });
        </script>
@endsection