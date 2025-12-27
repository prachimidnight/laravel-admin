<?php
$page = 'Login';
$parentname = 'Login';
$pagename = 'Login';
$pagetype = 'Login';
?>
@Include('adminview.layout.head')
<style>
    .required-asterisk {
        color: red;
    }
</style>
<body class="authentication-page">
    <div class="authentication-bg">
        <img class="auth-bg" src="{{URL::asset('resources/views/adminview/assets')}}/images/main-bg.png" width="1920" height="1080"
            alt="Authentication BG" />
    </div>

    <div class="authentication-wrapper">
        <div class="authentication-card card">
            <div class="auth-logo-force">
                <img 
                    src="{{ URL::asset('resources/views/adminview/assets') }}/images/avatars/OIP.jpeg"
                    alt="Logo"
                >
            </div>
                        <form class="form" id="frm-login" novalidate>
                <div id="login" class="auth-item">
                    <div class="columns is-multiline">
                        <div class="column is-12 col-form">
                            <div class="form-group">
                                <label class="form-label">Username <span class="required-asterisk">*</span></label>
                                <input type="text" class="form-control" name="email" id="email" autocomplete="off" />
                            </div>
                        </div>
                        <div class="column is-12 col-form">
                            <div class="form-group" style="position: relative;"> 
                                <label class="form-label">Password <span class="required-asterisk">*</span></label>
                                
                                <input type="password" class="form-control" name="password" id="password" autocomplete="off" />
                                
                                <span class="input-group-password" onclick="togglePasswordVisibility()" 
                                    style="position:absolute; right:15px; cursor:pointer; 
                                           top: 50%; /* Start alignment from 50% of parent form-group */
                                           padding-top: 25px; /* Adjust based on label height */
                                           transform: translateY(-50%);">
                                    
                                    <i class="fa fa-eye-slash" id="togglePasswordIcon"></i>
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="column is-12 col-form text-center">
                            <button id="hoot_login_signin_submit" class="btn login-btn btn-small" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js" integrity="sha512-uE2UhqPZkcKyOjeXjPCmYsW9Sudy5Vbv0XwAVnKBamQeasAVAmH6HR9j5Qpy6Itk1cxk+ypFRPeAZwNnEwNuzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var apipath = "http://localhost/laravel-admin/api";

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("togglePasswordIcon");

            if (passwordInput.type === "password") {
            
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        }
        $(document).ready(function() {
            $("#frm-login").validate({
            rules: {
                email: { required: true },
                password: { required: true }
            },
            messages: {
                email: { required: "Username is required" },
                password: { required: "Password is required" }
            },
            errorElement: "small",
            errorClass: "error",

            errorPlacement: function (error, element) {
                error.insertAfter(element); 
            },

            highlight: function (element) {
                $(element).addClass("error");
            },
            unhighlight: function (element) {
                $(element).removeClass("error");
            },
        submitHandler: function(form) {
            var formData = {
                email: $("#email").val(),
                password: $("#password").val(),
                dynamicurl: "user/login"
            };

            // $(".btn-primary").html('Loading...').attr('disabled', true);

            $.ajax({
                method: "POST",
                url: apipath + "/guest/login",
                data: formData,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        sessionStorage.setItem("guid", response.data.guid);

                        let userdata = response.data;

                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ URL('set_session') }}",
                            data: { userdata: JSON.stringify(userdata) },
                            dataType: 'json',
                            success: function(data1) {
                                if (data1.status == 200) {
                                    $.each(response.data, function(key, value) {
                                        sessionStorage.setItem(key, value);
                                    });

                                    notifyuser('success', 'Login successful');
                                    setTimeout(() => {
                                        window.location.href = "{{URL('dashboard')}}";
                                    }, 1000);
                                }
                            },
                            complete: function() {
                                $(".btn-primary").html('LOGIN').removeAttr("disabled");
                            }
                        });
                    } else {
                        notifyuser('error', response.message || 'Invalid credentials');
                        $(".btn-primary").html('LOGIN').removeAttr("disabled");
                    }
                },
                error: function(xhr) {
                    notifyuser('error', 'Something went wrong');
                    $(".btn-primary").html('LOGIN').removeAttr("disabled");
                }
            });
            return false;
        }
    });
});

      function notifyuser(type, message) {
            $.notify(message, type);
        }
</script>
</body>
</html>
