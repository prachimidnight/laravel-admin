<?php
$page = 'Profile';
$parentname = 'Profile';
$pagename = 'Profile';
$pagetype = 'Profile';
?>
@extends('adminview/layout/master')
@section('body')

    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-4">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">Profile</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="px-5 mb-5">
                    <div class="columns is-multiline">
                        <div class="column is-12-mobile is-12-tablet is-8-desktop is-8-widescreen col-form">
                            <div class="card h-100">
                                <div class="border-bottom card-header px-5 py-3">
                                    <h4 class="fs-6 fw-600 mb-0">Edit Profile</h4>
                                </div>
                                <div class="card-body p-5">
                                    <form id="update-profile" class="addprofile_form" novalidate
                                        enctype="multipart/form-data">
                                        <div class="columns is-multiline">
                                            <div
                                                class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">First Name <span
                                                        class="required-asterisk">*</span></label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" required>
                                                </div>
                                            </div>
                                            <div
                                                class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name <span
                                                        class="required-asterisk">*</span></label>
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="last_name" required>
                                                </div>
                                            </div>
                                            <div
                                                class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">Email <span
                                                        class="required-asterisk">*</span></label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">Phone <span class="required-asterisk">*</span></label>
                                                    <input type="text" class="form-control" name="phone_no"
                                                        id="phone_no" minlength="10" maxlength="10" oninput="validateInput(this)" required>
                                                </div>
                                            </div>
                                            
                                            <div
                                                class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                                                <div class="form-group">
                                                    <div class="profile-item">
                                                        <img class="avatar avatar-xl cursor-pointer" id="profile-image"
                                                            src="media/images/avatars/1.png" alt="Profile Image">
                                                        <input class="is-hidden" type="file" id="fileInput"
                                                            name="profile_image" accept="image/*">
                                                        <button class="btn btn-icon btn-sm btn-success rounded-circle"
                                                            id="upload-profile">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                                <path d="M13.5 6.5l4 4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                                <input type="hidden" name="guest_id" id="guest_id" />
                                                <input type="hidden" name="guid" id="guid" />
                                                <button type="submit" class="btn btn-primary"
                                                    id="sbt">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-form">
                            <div class="card h-100">
                                <div class="border-bottom card-header px-5 py-3">
                                    <h4 class="fs-6 fw-600 mb-0">Change Password</h4>
                                </div>
                                <div class="card-body p-5">
                                    <form id="change-password">
                                        <div class="columns is-multiline">
                                            <div
                                                class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">New Password <span
                                                        class="required-asterisk">*</span></label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control password-field"
                                                            name="new_password" id="new_password" required>
                                                        <span class="input-group-text" onclick="togglePassword(this)">
                                                            <svg class="icon icon-tabler-eye-off toggle-icon"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                                <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                                                <path
                                                                    d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                                                <path d="M3 3l18 18" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                                <div class="form-group">
                                                    <label class="form-label">Confirm Password <span
                                                        class="required-asterisk">*</span></label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control password-field"
                                                            name="confirm_password"
                                                            id="new_password_confirmation" required>
                                                        <span class="input-group-text" onclick="togglePassword(this)">
                                                            <svg class="icon icon-tabler-eye-off toggle-icon"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                                <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                                                <path
                                                                    d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                                                <path d="M3 3l18 18" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <span class="error" id="password-match-message"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                                                <button type="submit" id="change-sbt" class="btn btn-primary">Change</button>
                                            </div>
                                        </div>
                                    </form>
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
        $(document).ready(function(){
            // Hide loader if you have one
            $(".main-loading").hide();


        // Autofill profile form
        $("#first_name").val(sessionStorage.getItem("first_name"));
        $("#last_name").val(sessionStorage.getItem("last_name"));
        $("#email").val(sessionStorage.getItem("email"));
        $("#phone_no").val(sessionStorage.getItem("phone_no"));
        $("#guid").val(sessionStorage.getItem("guid"));
        $("#guest_id").val(sessionStorage.getItem("guest_id"));
        // console.log(sessionStorage.getItem("phone_no"));

        if(sessionStorage.getItem("profile_image")){
            $("#profile-image").attr("src", sessionStorage.getItem("profile_image"));
        }

        // Profile image upload preview
        $("#upload-profile").click(function(e){ e.preventDefault(); $("#fileInput").click(); });
        $("#fileInput").change(function(){
            let reader = new FileReader();
            reader.onload = function(e){ $("#profile-image").attr("src", e.target.result); };
            reader.readAsDataURL(this.files[0]);
        });

        // ---------------- PROFILE UPDATE ----------------
        $("#update-profile").validate({
            rules:{
                first_name: {required:true},
                last_name: {required:true},
                phone_no: {required:true, minlength:10, maxlength:10}
            },
            submitHandler:function(form){
                var formData = new FormData(form);
                formData.append("guid", $("#guid").val());
                $.ajax({
                    url: apipath + "/guest/update",
                    type:"POST",
                    data: formData,
                    contentType:false,
                    processData:false,
                    success:function(res){
                        if(res.status==200){
                            // Update sessionStorage
                            sessionStorage.setItem("guest_id", res.data.guest_id);
                            sessionStorage.setItem("guid", res.data.guid);
                            sessionStorage.setItem("email", res.data.email);
                            sessionStorage.setItem("first_name", res.data.first_name);
                            sessionStorage.setItem("last_name", res.data.last_name);
                            sessionStorage.setItem("phone_no", res.data.phone_no);
                            sessionStorage.setItem("profile_image", res.data.profile_image);

                            Swal.fire("Success","Profile updated successfully!","success");
                            setTimeout(() => {
                                            window.location.href = "{{URL('dashboard')}}";
                                            }, 1000);
                        } else {
                            Swal.fire("Error", res.message, "error");
                            
                        }
                    },
                    error:function(){ Swal.fire("Error","Something went wrong!","error"); }
                });
                return false;
            }
        });
        // ---------------- CHANGE PASSWORD ----------------
        $("#change-password").validate({
            rules: {
            new_password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: "#new_password"
            }
        },
        messages: {
            new_password: {
                required: "Please enter new password",
                minlength: "Password must be at least 6 characters"
            },
            confirm_password: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            }
        },
        submitHandler:function(form){
            let newPassword = $("#new_password").val();
            let confirmPassword = $("#new_password_confirmation").val();
            
            if(newPassword !== confirmPassword) {
                Swal.fire("Warning","Passwords do not match","warning");
                return false;
            }

                $.ajax({
                    url: apipath + "/guest/change-password",
                    type: "POST",
                    data:{
                        guid: $("#guid").val(),
                        new_password: newPassword,
                        confirm_password: confirmPassword
                    },
                    success:function(res){
                        if(res.status==200){
                            Swal.fire("Success","Password changed successfully!","success");
                            form.reset();
                        } else { Swal.fire("Error", res.message, "error"); }
                    },
                    error:function(){ Swal.fire("Error","Something went wrong!","error"); }
                });
                return false; }
            });
        });
    </script>
    @endsection