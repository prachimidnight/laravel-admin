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
                                            <label for="profile_image" class="form-label">Guest Image
                                                {{-- Developer Logo <span class="required-asterisk">*</span> --}}
                                            </label>
                                            <div class="input-group file-upload"
                                                onclick="document.getElementById('profile_image').click()">
                                                <span class="form-control file-upload-name">Upload</span>
                                                <input type="file" name="profile_image" id="profile_image"
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
                                            <input type="text" class="form-control" name="whatsapp_no"
                                                id="whatsapp_no" minlength="8" maxlength="10" required>
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

                                    <div class="column is-4-mobile is-4-tablet is-4-desktop is-4-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">Country <span class="required-asterisk">*</span></label>
                                            <select class="form-control" name="country" id="country" required>
                                                <option value="">Select Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="column is-4-mobile is-4-tablet is-4-desktop is-4-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">State <span class="required-asterisk">*</span></label>
                                            <select class="form-control" name="state" id="state" required>
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="column is-4-mobile is-4-tablet is-4-desktop is-4-widescreen col-form">
                                        <div class="form-group">
                                            <label class="form-label">City <span class="required-asterisk">*</span></label>
                                            <select class="form-control" name="city" id="city" required>
                                                <option value="">Select City</option>
                                            </select>
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
                                            <label class="form-label">Description </span></label>
                                            <textarea class="form-control" name="description" id="description" rows="4" ></textarea>
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
        
            // Copy WhatsApp number if checkbox is checked
            $('#is_whatsapp').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#whatsapp_no').val($('#phone_no').val());
                } else {
                    $('#whatsapp_no').val('');
                }
            });
        
            $(document).ready(function () {
                loadCountries();

                // Load all countries
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

                // Load states when a country is selected
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

                // Load cities when a state is selected
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
            // Handle Add Guest form submit

            $("#addproject").validate({
            submitHandler: function(form) {
            $(".btn-primary").html('Loading...').attr('disabled', true);

            var formData = new FormData(form);
            
            // Get the selected text (names) instead of values (IDs)
            var countryName = $('#country option:selected').text();
            var stateName = $('#state option:selected').text();
            var cityName = $('#city option:selected').text();
            
            // Remove the ID values and add names instead
            formData.delete('country');
            formData.delete('state');
            formData.delete('city');
            
            // Append the names
            formData.append('country', countryName);
            formData.append('state', stateName);
            formData.append('city', cityName);
            
            // Also append the IDs if your backend needs them
            formData.append('country_id', $('#country').val());
            formData.append('state_id', $('#state').val());
            formData.append('city_id', $('#city').val());

            var url = apipath + "/guest/create";
            var type = 'POST';

            $.ajax({
                type: type,
                url: url,
                data: formData,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == 200 || data.status == true) {
                        $(".form-control").val("");
                        $("#is_whatsapp").prop("checked", false);
                        $('#country').val('');
                        $('#state').html('<option value="">Select State</option>');
                        $('#city').html('<option value="">Select City</option>');
                        $(".btn-primary").html('Add').removeAttr("disabled");

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Guest added successfully!',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        $(".btn-primary").html('Add').removeAttr("disabled");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message || 'Failed to add guest!'
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    $(".btn-primary").html('Add').removeAttr("disabled");
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please check required fields.'
                    });
                }
            });
            return false;
        }
    });
    });
    </script>     
@endsection