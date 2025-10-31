<?php
$page = 'Login';
$parentname = 'Login';
$pagename = 'Login';
$pagetype = 'Login';
?>
@Include('adminview.layout.head')
<body class="authentication-page">
    <div class="authentication-bg">
        <img class="auth-bg" src="{{URL::asset('resources/views/adminview/assets')}}/images/main-bg.png" width="1920" height="1080"
            alt="Authentication BG" />
    </div>

    <div class="authentication-wrapper">
        <div class="authentication-card card">
            <img class="auth-logo-element" src="{{URL::asset('resources/views/adminview/assets')}}/images/" alt="Logo" />
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
                            <div class="form-group">
                                <label class="form-label">Password <span class="required-asterisk">*</span></label>
                                <div class="input-group form-control" style="border: none">
                                    <input type="password" class="" name="password" id="password" autocomplete="off" />
                                    <span class="input-group-password" onclick="togglePasswordVisibility()">
                                        <i class="fa fa-eye-slash" id="togglePasswordIcon"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="column is-12 col-form">
                            <button id="hoot_login_signin_submit" class="btn btn-black  w-100" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
    var apipath = "http://localhost/laravel-admin/api";

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("togglePasswordIcon");

            if (passwordInput.type === "password") {
                // Show the password and change the icon to 'eye-open' (fa-eye)
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                // Hide the password and change the icon to 'eye-closed' (fa-eye-slash)
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        }
        $(document).ready(function(){
        $("#frm-login").on("submit", function(e){
        e.preventDefault();
            const email = $("#email").val();
            const password = $("#password").val();
            $.ajax({
                url: apipath + "/guest/login",
                type: "POST",
                data: { email, password },
                success: function(res){
                    if(res.status === 200){
                        Swal.fire("Success", res.message, "success"); 
                    } else {
                        Swal.fire("Error", res.message, "error");
                    }
                },
            });
        });
    });
</script>
</body>
</html>
