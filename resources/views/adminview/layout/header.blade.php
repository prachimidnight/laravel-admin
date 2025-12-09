<div class="theme-header">
    <div class="is-flex is-gap-2 is-align-items-center is-justify-content-end">
        <a id="theme-menu-toggle-res" class="theme-menu-toggle-res" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
        </a>
        <marquee class="marquee-text" direction="left" behavior="scroll" scrollamount="8">
            <span>Welcome to <b>Guest Inviation Portal</b></span>
        </marquee>
        <div class="is-flex is-align-items-center is-gap-2">
            <div class="dropdown dropdown-notifications is-flex-shrink-0">
                <!--notification-->
                {{-- <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                    <span class="rounded-pill tag tag-notifications tag-xs bg-success white-text">5</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                </button> --}}
                <div class="dropdown-menu dropdown-notifications-menu">
                    <div class="dropdown-notifications-header border-bottom">
                        <h5>Notification</h5>
                    </div>
                    <ul class="dropdown-notifications-item-wrapper theme-scrollbar">
                        <li class="dropdown-notifications-item">
                            <img class="avatar avatar-md" src="{{URL::asset('resources/views/adminview/assets')}}/images/avatars/4.png" alt="Avatars">
                            <div class="is-block">
                                <h6>Congratulation John Doe 🎉</h6>
                                <p>Aenean sollicitudin, arcu quis bibendum.</p>
                                <small class="text-muted">1h ago</small>
                            </div>
                        </li>
                        <li class="dropdown-notifications-item">
                            <img class="avatar avatar-md" src="{{URL::asset('resources/views/adminview/assets')}}/images/avatars/2.png" alt="Avatars">
                            <div class="is-block">
                                <h6>Praesent rhoncus finibus dapibus</h6>
                                <p>Nulla est odio, pharetra sed faucibus eu, lacinia a nisi.</p>
                                <small class="text-muted">1 Day ago</small>
                            </div>
                        </li>
                        <li class="dropdown-notifications-item">
                            <img class="avatar avatar-md" src="{{URL::asset('resources/views/adminview/assets')}}/images/avatars/3.png" alt="Avatars">
                            <div class="is-block">
                                <h6>Aliquam nec nisi ac ipsum pulvinar vehicula</h6>
                                <p>Fusce convallis mattis felis, at fermentum quam finibus quis.</p>
                                <small class="text-muted">1 Day ago</small>
                            </div>
                        </li>
                        <li class="dropdown-notifications-item">
                            <img class="avatar avatar-md" src="{{URL::asset('resources/views/adminview/assets')}}/images/avatars/5.png" alt="Avatars">
                            <div class="is-block">
                                <h6>Sed vel arcu finibus, pharetra ipsum</h6>
                                <p>Duis a lobortis felis, vitae bibendum ex.</p>
                                <small class="text-muted">2 Day ago</small>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-outline-primary border-0 view-all-notification rounded-0 w-100" href="#">View all Notification</a>
                </div>
            </div>
            <div class="dropdown is-flex-shrink-0">
                <button class="bg-transparent border-0 fw-700" style="font-size:16px;" type="button" data-toggle="dropdown">
                    <img class="avatar avatar-sm" id="profile-image2" src="{{ asset('public/uploads/profile/profile1.png') }}" alt="Avatars" style="width:50px; height:50px; border-radius:50%;">
                    </button>
                <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="profile">Profile</a>
                    {{-- <a class="dropdown-item" href="/">Logout</a> --}}
                    {{-- <form id="logout-form" action="{{ route('session.destroy') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}

                    {{-- <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> --}}

                    <a class="dropdown-item" id="logout-link"  href="{{route('session.destroy')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>

    var roleId = parseInt(role_id, 10);

    if (roleId == 3) {
        $('.log-in-user').text("Developer");
    } else if (roleId == 1) {
        $('.log-in-user').text("Super Admin");
    }

    if (performance.navigation.type === performance.navigation.TYPE_BACK_FORWARD) {
        window.location.href = "{{ route('login') }}";
    }

    $(document).ready(function() {

        $('.dropdown button').click(function(e) {
        e.stopPropagation(); // Prevent the click event from bubbling up
        $(this).siblings('.dropdown-menu').toggle(); // Toggle the profile dropdown
    });

    // Close profile dropdown if clicked outside
    $(document).click(function(e) {
        if (!$('.dropdown').is(e.target) && $('.dropdown').has(e.target).length === 0) {
            $('.dropdown-menu').hide(); // Close profile dropdown if clicked outside
        }
    });

    var formdata = new FormData();

    var developer_id = sessionStorage.getItem('developer_id');
    var url;

    if (developer_id) {
    url: apipath + "/guest/login",
            url = 'apipath /getalldeveloper';
            formdata.append('developer_id', developer_id);
        } else {
            var user_id = sessionStorage.getItem('user_id');
    url: apipath + "/guest/login",
            url = 'apipath /getalluser';
            formdata.append('user_id', user_id);
        }

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(result) {
                if (result.status == 200) {

                            if (result.data.length > 0) {
                            var userPhoto = result.data[0].profile_image;
                            var devLogo = result.data[0].developer_logo;

                            var fallbackImage = 'resources/uploads/1723887504blank-profile-picture-973460_960_720.webp'; // Use your actual default path

                            if (devLogo && devLogo !== "null" && devLogo.trim() !== "") {
                                $("#profile-image2").attr("src", devLogo);
                            } else if (userPhoto && userPhoto !== "null" && userPhoto.trim() !== "") {
                                $("#profile-image2").attr("src", userPhoto);
                            } else {
                                $("#profile-image2").attr("src", fallbackImage);
                            }
                            }
                        } else {

                        }
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    });
</script> --}}
