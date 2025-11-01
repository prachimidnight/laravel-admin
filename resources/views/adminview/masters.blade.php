<?php
$page = 'Masters';
$parentname = 'Masters';
$pagename = 'Masters';
$pagetype = 'Masters';
?>
@extends('adminview/layout/master')
@section('body')

    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-6">
                    <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
                        <div class="card-title">
                            <h1 class="fs-5 fw-600 lh-1">Masters</h1>
                            <ul class="breadcrumbs mt-1">
                                <li>
                                    <a href="dashboard">Dashboard</a>
                                </li>
                                <li class="active">Masters</li>
                            </ul>
                        </div>
                        <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                        </div>
                    </div>
                </div>
                <div class="px-5 mb-5">
                    <div class="columns is-multiline">
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="amenities">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l18 0" />
                                            <path d="M9 8l1 0" />
                                            <path d="M9 12l1 0" />
                                            <path d="M9 16l1 0" />
                                            <path d="M14 8l1 0" />
                                            <path d="M14 12l1 0" />
                                            <path d="M14 16l1 0" />
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                        </svg>
                                        <span>Amenities</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="availability">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" /></svg>
                                        <span>Availability</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="businesstype">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-align-box-left-bottom"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M9 17h-2" /><path d="M13 14h-6" /><path d="M11 11h-4" /></svg>
                                        <span>Business Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="budget">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-moneybag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" /><path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /></svg>
                                        <span>Budget</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="commercialtype">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-google-analytics"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 9m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v9.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z" /><path d="M17 3m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v15.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z" /><path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>
                                        <span>Commercial Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="configuration">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l18 0" />
                                            <path d="M9 8l1 0" />
                                            <path d="M9 12l1 0" />
                                            <path d="M9 16l1 0" />
                                            <path d="M14 8l1 0" />
                                            <path d="M14 12l1 0" />
                                            <path d="M14 16l1 0" />
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                                        </svg>
                                        <span>Configuration</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="constructionstatus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8"></path>
                                            <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
                                          </svg>
                                        <span>Construction Status</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="ownership">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-key"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" /><path d="M15 9h.01" /></svg>
                                        <span>OwnerShip Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="mainentrance">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-door-enter"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 12v.01" /><path d="M3 21h18" /><path d="M5 21v-16a2 2 0 0 1 2 -2h6m4 10.5v7.5" /><path d="M21 7h-7m3 -3l-3 3l3 3" /></svg>
                                        <span>Main Entrance</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="plottype">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>
                                        <span>Plot Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="propertytype">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-app-window"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M6 8h.01" /><path d="M9 8h.01" /></svg>
                                        <span>Property Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="sqftsize">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-box">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                                            <path d="M12 12l8 -4.5"></path>
                                            <path d="M12 12l0 9"></path>
                                            <path d="M12 12l-8 -4.5"></path>
                                          </svg>
                                        <span>Size</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="transcationtype">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M3 10h18" /><path d="M16 19h6" /><path d="M19 16l3 3l-3 3" /><path d="M7.005 15h.005" /><path d="M11 15h2" /></svg>
                                        <span>Transaction Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="buy-rent-type">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-align-box-bottom-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M7 15v2" /><path d="M10 11v6" /><path d="M13 13v4" /></svg>
                                        <span>Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="userrole">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <span>User Role</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="users">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        <span>Users</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="column col-master">
                            <div class="card master-card">
                                <div class="card-body">
                                    <a href="weekendmaster">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="36"  height="36"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                        <span>Weekend Type</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                      
                     
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        $(".main-loading").hide();
    </script>
@endsection
