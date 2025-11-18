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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js" integrity="sha512-uE2UhqPZkcKyOjeXjPCmYsW9Sudy5Vbv0XwAVnKBamQeasAVAmH6HR9j5Qpy6Itk1cxk+ypFRPeAZwNnEwNuzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        $(document).ready(function() {
          $("#frm-login").validate({
              submitHandler: function(form) {
                  var formData = {
                      email: $("#email").val(),
                      password: $("#password").val(),
                      dynamicurl: "user/login"
                  };

                  $(".btn-primary").html('Loading...').attr('disabled', true);

                  $.ajax({
                      method: "POST",
                      url: apipath + "/guest/login",
                      data: formData,
                      dataType: "json",
                      success: function(response) {

                          if (response.status == 200) {

                            sessionStorage.setItem("guid", response.data.guid);
                            // console.log("Saved GUID:", response.data.guid);
                            
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
                                        var finaljson = response.data;
                                          $.each(finaljson, function(key, value) {
                                            sessionStorage.setItem(key, value);

                                          });

                                          notifyuser('success', 'Login successful');
                                          setTimeout(() => {
                                           window.location.href = "{{URL('dashboard')}}";
                                          }, 1000);
                                      }
                                  },
                                  complete: function() {
                                      $('.main-loading').hide();
                                      $(".btn-primary").html('LOGIN').removeAttr("disabled");
                                  },
                                  error: function() {
                                      notifyuser('error', 'An error occurred while processing your request.');
                                  }
                              });
                          } else {
                              notifyuser('error', response.message || 'Invalid credentials, please try again.');
                              $(".btn-primary").html('LOGIN').removeAttr("disabled");
                          }
                      },
                      error: function(xhr) {
                          notifyuser('error', xhr.responseJSON?.message || 'Something went wrong.');
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
