<div id="theme-menu" class="theme-menu-wrapper">
    <a class="theme-menu-toggle" href="javascript:void(0);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M7 7l5 5l-5 5" />
            <path d="M13 7l5 5l-5 5" />
        </svg>
    </a>
    <a id="theme-menu-close-button" class="theme-menu-close-button" href="javascript:void(0);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-x">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M18 6l-12 12" />
            <path d="M6 6l12 12" />
        </svg>
    </a>
    <div class="theme-menu-logo">
        <img class="theme-menu-logo-default"
            src="{{ URL::asset('resources/views/adminview/assets') }}/images/avatars/OIP.jpeg" alt="Logo" />
        <img class="theme-menu-logo-minimize"
            src="{{ URL::asset('resources/views/adminview/assets') }}/images/avatars/OIP.jpeg" alt="Logo" />
    </div>
    <div class="theme-menu-detail theme-scrollbar">
        <div class="menu-item-wrapper">
            @php
                $userdata = Session::get('userdata');
            @endphp
            @if ($userdata)
                <div class="menu-item">
                    <a class="menu-link" href="dashboard">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-dashboard">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M13.45 11.55l2.05 -2.05" />
                                <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                            </svg>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link with-submenu" href="guest">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                        </span>
                        <span class="menu-title">Guest</span>
                        <span class="tag bg-primary white-text rounded-pill" id="guest-count">0</span>
                        {{-- <span class="submenu-caret">▸</span> <!-- Arrow to indicate dropdown --> --}}
                    </a>
                    {{-- <div class="submenu">
                        <div class="menu-item">
                            <a class="menu-link" href="bulkupload">
                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icon-tabler-upload">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 3v12m0 0l-4 -4m4 4l4 -4"/>
                                        <path d="M4 21h16"/>
                                    </svg>
                                </span>
                                <span class="menu-title">Bulk Upload</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
                
            <div class="menu-item">
                <a class="menu-link" href="masters">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-cube">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M21 16.008v-8.018a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.008c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0l7 -4.008c.619 -.355 1 -1.01 1 -1.718z">
                            </path>
                            <path d="M12 22v-10"></path>
                            <path d="M12 12l8.73 -5.04"></path>
                            <path d="M3.27 6.96l8.73 5.04"></path>
                        </svg>
                    </span>
                    <span class="menu-title">Masters</span>
                </a>
            </div>
            
            @else
                @php
                    header('Location: ' . route('login'));
                    exit();
                @endphp
            @endif
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        updateMenuCounts();
    });

    // document.addEventListener('DOMContentLoaded', function () {

    //     // Arrow (▸) pe click → sirf submenu open/close
    //     document.querySelectorAll('.submenu-caret').forEach(function (arrow) {
    //         arrow.addEventListener('click', function (e) {
    //             e.preventDefault();   // guest page open na ho
    //             e.stopPropagation();  // parent <a> click stop

    //             const menuItem = this.closest('.menu-item');
    //             menuItem.classList.toggle('open');
    //         });
    //     });

    // });

    function updateMenuCounts() {
        var developerGlobalCount = localStorage.getItem("developer_global_count") || 0;
        var leadGlobalCount = localStorage.getItem("leads_global_count") || 0;
        var projectGlobalCount = localStorage.getItem("project_global_count") || 0;
        var plotGlobalCount = localStorage.getItem("plot_global_count") || 0;
        var commercialGlobalCount = localStorage.getItem("commercial_global_count") || 0;
        var weekendGlobalCount = localStorage.getItem("weekend_global_count") || 0;

        $('#developer-count').text(developerGlobalCount);
        $('#leads-count').text(leadGlobalCount);
        $('#project-count').text(projectGlobalCount);
        $('#plot-count').text(plotGlobalCount);
        $('#commercial-count').text(commercialGlobalCount);
        $('#weekend-count').text(weekendGlobalCount);
    }

</script>


