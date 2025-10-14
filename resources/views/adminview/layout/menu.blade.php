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
            src="{{ URL::asset('resources/views/adminview/assets') }}/images/propxpo-logo.svg" alt="Logo" />
        <img class="theme-menu-logo-minimize"
            src="{{ URL::asset('resources/views/adminview/assets') }}/images/propexpo_favicon.svg" alt="Logo" />
    </div>
    <div class="theme-menu-detail theme-scrollbar">
        <div class="menu-item-wrapper">
            @php
                $userdata = Session::get('userdata');
            @endphp
            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']))
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

                <div class="menu-item menu-accordion">
                    <a class="menu-link" href="javascript:void(0);">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-buildings">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 21v-15c0 -1 1 -2 2 -2h5c1 0 2 1 2 2v15" />
                                <path d="M16 8h2c1 0 2 1 2 2v11" />
                                <path d="M3 21h18" />
                                <path d="M10 12v0" />
                                <path d="M10 16v0" />
                                <path d="M10 8v0" />
                                <path d="M7 12v0" />
                                <path d="M7 16v0" />
                                <path d="M7 8v0" />
                                <path d="M17 12v0" />
                                <path d="M17 16v0" />
                            </svg>
                        </span>
                        <span class="menu-title">Projects</span>
                        <span class="menu-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-chevron-down">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 9l6 6l6 -6"></path>
                            </svg>
                        </span>
                    </a>

                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="projects">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Residential</span>
                                <span class="tag bg-primary white-text rounded-pill" id="project-count">0</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="commercial-projects">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Commercials</span>
                                <span class="tag bg-primary white-text rounded-pill" id="commercial-count">0</span>
                            </a>
                        </div>

                            <div class="menu-item">
                                <a class="menu-link" href="plot-projects">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Plots / Lands</span>
                                    <span class="tag bg-primary white-text rounded-pill" id="plot-count">0</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link" href="weekend-projects">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Weekend Homes</span>
                                    <span class="tag bg-primary white-text rounded-pill" id="weekend-count">0</span>
                                </a>
                            </div>

                    </div>
                </div>

                <div class="menu-item">
                    <a class="menu-link" href="developers">
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
                        <span class="menu-title">Developers</span>
                        <span class="tag bg-primary white-text rounded-pill" id="developer-count">0</span>
                    </a>
                </div>

                @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)

                <div class="menu-item">
                    <a class="menu-link" href="proxpo-leads">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-list-details">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M13 5h8" />
                                <path d="M13 9h5" />
                                <path d="M13 15h8" />
                                <path d="M13 19h5" />
                                <path
                                    d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                <path
                                    d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            </svg>
                        </span>
                        <span class="menu-title">Leads</span>
                        <span class="tag bg-primary white-text rounded-pill" id="leads-count">0</span>
                    </a>
                </div>

                @endif

                {{-- <div class="menu-item">
                    <a class="menu-link" href="masters">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-cube">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M21 16.008v-8.018a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.008c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0l7 -4.008c.619 -.355 1 -1.01 1 -1.718z">
                                </path>
                                <path d="M12 22v-10"></path>
                                <path d="M12 12l8.73 -5.04"></path>
                                <path d="M3.27 6.96l8.73 5.04"></path>
                            </svg>
                        </span>
                        <span class="menu-title">Masters</span>
                    </a>
                </div> --}}

                @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)
                <div class="menu-item">
                    <a class="menu-link" href="vip">
                        <span class="menu-icon">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h.5" /><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" /></svg>
                        </span>
                        <span class="menu-title">VIP Invitation</span>
                    </a>
                </div>
            @endif

            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)
                <div class="menu-item">
                    {{-- <a class="menu-link" href="luxuryuser">
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
                        <span class="menu-title">Luxury User</span>
                    </a> --}}
                    <a class="menu-link" href="luxuryuser">
                        <span class="menu-icon">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg>
                        </span>
                        <span class="menu-title">Luxury User</span>
                        <!-- <span class="tag bg-primary white-text rounded-pill" id="leads-count">0</span> -->
                    </a>
                </div>
            @endif

          
            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)

                <div class="menu-item">
                    <a class="menu-link" href="deals">
                        <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sort-descending"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l9 0" /><path d="M4 12l7 0" /><path d="M4 18l7 0" /><path d="M15 15l3 3l3 -3" /><path d="M18 6l0 12" /></svg>
                        </span>
                        <span class="menu-title">Deals</span>
                        <!-- <span class="tag bg-primary white-text rounded-pill" id="leads-count">0</span> -->
                    </a>
                </div>

            @endif
            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)
            <div class="menu-item">
                <a class="menu-link" href="bank-auction-deal-listing">
                    <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sort-descending"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l9 0" /><path d="M4 12l7 0" /><path d="M4 18l7 0" /><path d="M15 15l3 3l3 -3" /><path d="M18 6l0 12" /></svg>
                    </svg>
                    </span>
                    <span class="menu-title">Bank Auction Deals</span>
                </a>
            </div>
        @endif

            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)

                <div class="menu-item">
                    <a class="menu-link" href="offer">
                        <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 15l6 -6" /><circle cx="9.5" cy="9.5" r=".5" fill="currentColor" /><circle cx="14.5" cy="14.5" r=".5" fill="currentColor" /><path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" /></svg>
                        </span>
                        <span class="menu-title">Offers</span>
                        <!-- <span class="tag bg-primary white-text rounded-pill" id="leads-count">0</span> -->
                    </a>
                </div>

            @endif
            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)

                <div class="menu-item">
                    <a class="menu-link" href="advertise">
                        <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-badge-ad"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M14 9v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /><path d="M7 15v-4.5a1.5 1.5 0 0 1 3 0v4.5" /><path d="M7 13h3" /></svg>
                        </span>
                        <span class="menu-title">Advertise</span>
                        <!-- <span class="tag bg-primary white-text rounded-pill" id="leads-count">0</span> -->
                    </a>
                </div>

            @endif

            @if ($userdata && isset($userdata[0]) && isset($userdata[0]['role_id']) && $userdata[0]['role_id'] != 3)
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
            @endif
            
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
