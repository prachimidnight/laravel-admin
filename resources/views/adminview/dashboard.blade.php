<?php
$page = 'Dashboard';
$parentname = 'Dashboard';
$pagename = 'Dashboard';
$pagetype = 'Dashboard';
?>
@extends('adminview/layout/master')
@section('body')
    <body>
        <div class="theme-wrapper">
            <div class="theme-content">
                <div class="px-5 py-4">
                    <div class="card-title">
                        <h1 class="fs-5 fw-600 lh-1">Dashboard</h1>
                    </div>
                </div>
                <div class="px-5">
                    <div class="mb-3">
                        <div class="columns is-mobile is-multiline row-dashboard">
                            <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard">
                                <a href="projects">
                                    <div class="card dashboard-card">
                                        <div class="dashboard-detail">
                                            <div class="dashboard-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                            </div>
                                            <div class="dashboard-desc">
                                                <h3 id="projectcount">0</h3>
                                                <span>Residential Projects</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard">
                                <a href="commercial-projects">
                                    <div class="card dashboard-card">
                                        <div class="dashboard-detail">
                                            <div class="dashboard-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M3 21l18 0" />
                                                    <path d="M5 21v-14l8 -4v18" />
                                                    <path d="M19 21v-10l-6 -4" />
                                                    <path d="M9 9l0 .01" />
                                                    <path d="M9 12l0 .01" />
                                                    <path d="M9 15l0 .01" />
                                                    <path d="M9 18l0 .01" />
                                                </svg>
                                            </div>
                                            <div class="dashboard-desc">
                                                <h3 id="commercialcount">0</h3>
                                                <span>Commercial Projects</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                              <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard restricted-content" style="display:none;">
                                  <a href="plot-projects">
                                      <div class="card dashboard-card">
                                          <div class="dashboard-detail">
                                              <div class="dashboard-icon">
                                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="60"  height="60"
                                                      viewBox="0 0 24 24"  fill="none"  stroke="currentColor"
                                                      stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"
                                                      class="icon icon-tabler icons-tabler-outline icon-tabler-building-estate">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                      <path d="M3 21h18" /><path d="M19 21v-4" />
                                                      <path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z" />
                                                      <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14" />
                                                      <path d="M9 17v4" />
                                                      <path d="M8 13h2" />
                                                      <path d="M8 9h2" />
                                                  </svg>
                                              </div>
                                              <div class="dashboard-desc">
                                                  <h3 id="plotcount">0</h3>
                                                  <span>Plot Projects</span>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard restricted-content" style="display:none;">
                                  <a href="weekend-projects">
                                      <div class="card dashboard-card">
                                          <div class="dashboard-detail">
                                              <div class="dashboard-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                      viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                      class="icon icon-tabler icons-tabler-outline icon-tabler-building-community">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                                      <path d="M13 7l0 .01" />
                                                      <path d="M17 7l0 .01" />
                                                      <path d="M17 11l0 .01" />
                                                      <path d="M17 15l0 .01" />
                                                  </svg>
                                              </div>
                                              <div class="dashboard-desc">
                                                  <h3 id="weekendhomecount">0</h3>
                                                  <span>Weekend Home Projects</span>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard restricted-content" style="display:none;">
                                  <a href="developers">
                                      <div class="card dashboard-card">
                                          <div class="dashboard-detail">
                                              <div class="dashboard-icon">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                      viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                      class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                                  </svg>
                                              </div>
                                              <div class="dashboard-desc">
                                                  <h3 id="developercount">0</h3>
                                                  <span>Developers</span>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                            <div class="column is-12-mobile is-6-tablet is-6-desktop is-4-widescreen col-dashboard">
                                <a href="proxpo-leads">
                                    <div class="card dashboard-card">
                                        <div class="dashboard-detail">
                                            <div class="dashboard-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                            </div>
                                            <div class="dashboard-desc">
                                                <h3 id="leadcount">0</h3>
                                                <span>Leads</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                   <!-- Chart 10 -->
              <div class="columns is-multiline mb-3">


                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Registration Trends</h5>
                        </div>
                        <div class="dropdown" data-chart="registration-trends">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1">
                            <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat10" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-10"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Chart 14 -->
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Usource wise Leads</h5>
                        </div>
                        <div class="dropdown" data-chart="usource-wise-leads">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1">
                            <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat14" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-14"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Chart 13 -->
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Touchpoint wise Leads</h5>
                        </div>
                        <div class="dropdown" data-chart="touchpoint-wise-trends">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1">
                            <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat13" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-13"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Chart 1 -->
                  <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Leads</h5>
                        </div>
                        <div class="dropdown" data-chart="leads">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1">
                            <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-1"></div>
                      </div>
                    </div>
                  </div>
                      
                  <!-- Chart 2 -->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Usource wise Leads</h5>
                        </div>
                        <div class="dropdown" data-chart="usource-lead">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1">
                            <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat2" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-2"></div>
                      </div>
                    </div>
                  </div>
                 <!-- Chart 3 -->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Umedium wise Leads</h5>
                        </div>
                      <div class="dropdown" data-chart="umedium-lead">
                        <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                          </svg>
                        </button>
                        <div class="dropdown-menu pt-0 pb-1" >
                          <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                          <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                          {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                        </div>
                        <input type="hidden" id="grv_cat3" name="filter" value="thisweek">

                      </div>
                    </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-3"></div>
                      </div>
                    </div>
                  </div>

                 <!-- Chart 4 -->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Ucampaign wise Leads</h5>
                        </div>
                        <div class="dropdown" data-chart="ucampaign-lead">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1" >
                            <span class="fs-8 fw-bold dark-3 bg-light is-block d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat4" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-4"></div>
                      </div>
                    </div>
                  </div>
                <!--chart 5-->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Residencial Property Lead</h5>
                        </div>
                        <div class="dropdown" data-chart="residencial-lead">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1" >
                            <span class="fs-8 fw-bold dark-3 bg-light is-block d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat5" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-5"></div>
                      </div>
                    </div>
                  </div>

                 <!-- Chart 6 -->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Commercial Property Lead</h5>
                        </div>
                        <div class="dropdown" data-chart="commercial-lead">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1" >
                            <span class="fs-8 fw-bold dark-3 bg-light is-block d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat6" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-6"></div>
                      </div>
                    </div>
                  </div>

                  <!-- Chart 7 -->
                  <div class="column is-12-mobile is-6-tablet is-12-desktop is-6-widescreen restricted-content" style="display:none;">
                    <div class="card h-100">
                      <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Plot Property Lead</h5>
                        </div>
                        <div class="dropdown" data-chart="plot-lead">
                          <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                            </svg>
                          </button>
                          <div class="dropdown-menu pt-0 pb-1" >
                            <span class="fs-8 fw-bold dark-3 bg-light is-block d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="today">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                            <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                            {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                          </div>
                          <input type="hidden" id="grv_cat7" name="filter" value="thisweek">
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="theme-chart" id="chart-7"></div>
                      </div>
                    </div>
                  </div>

                <!-- Chart 8 -->
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen restricted-content" style="display:none;">
                    <div class="card h-100">
                        <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Weekend Property Lead</h5>
                            </div>
                            <div class="dropdown" data-chart="weekend-lead">
                                <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-dots-vertical">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu pt-0 pb-1">
                                    <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                                    <a class="dropdown-item mt-2" href="javascript:void(0);" data-value="today">Today</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                                </div>
                                <input type="hidden" id="grv_cat8" name="filter" value="thisweek">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="theme-chart" id="chart-8"></div>
                        </div>
                    </div>
                </div>

                <!-- Chart 9 -->
                  <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen restricted-content" style="display:none;">
                    <div class="card h-100">
                        <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Registered User</h5>
                            </div>
                            <div class="dropdown" data-chart="register-user">
                                <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-dots-vertical">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu pt-0 pb-1">
                                    <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                                    <a class="dropdown-item mt-2" href="javascript:void(0);" data-value="today">Today</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                                </div>
                                <input type="hidden" id="grv_cat9" name="filter" value="thisweek">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="theme-chart" id="chart-9"></div>
                        </div>
                    </div>
                </div>

                <!-- Chart 11 -->
                  <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen restricted-content" style="display:none;">
                    <div class="card h-100">
                        <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Project wise Lead</h5>
                            </div>
                            <div class="dropdown" data-chart="project-wise-lead">
                                <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-dots-vertical">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu pt-0 pb-1">
                                    <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                                    <a class="dropdown-item mt-2" href="javascript:void(0);" data-value="today">Today</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                                </div>
                                <input type="hidden" id="grv_cat11" name="filter" value="thisweek">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="theme-chart" id="chart-11"></div>
                        </div>
                    </div>
                </div>

                <!-- Chart 12 -->
                  <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen restricted-content" style="display:none;">
                    <div class="card h-100">
                        <div class="card-header pb-0 is-flex is-justify-content-space-between is-gap-3">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Developer wise Lead</h5>
                            </div>
                            <div class="dropdown" data-chart="developer-wise-lead">
                                <button class="bg-transparent border-0" type="button" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-dots-vertical">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu pt-0 pb-1">
                                    <span class="fs-8 fw-bold dark-3 bg-dark-6 d-block px-3 py-2 rounded-top mb-2">Select Time Range</span>
                                    <a class="dropdown-item mt-2" href="javascript:void(0);" data-value="today">Today</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="yesterday">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisweek">This Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last7days">Last 7 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastweek">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thismonth">This Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="last28days">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastmonth">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="thisyear">This Year</a>
                                    <a class="dropdown-item" href="javascript:void(0);" data-value="lastyear">Last Year</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);" data-value="custom">Custom</a> --}}
                                </div>
                                <input type="hidden" id="grv_cat12" name="filter" value="thisweek">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="theme-chart" id="chart-12"></div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </body>   
@endsection
