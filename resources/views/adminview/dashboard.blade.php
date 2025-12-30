<?php
$page = 'dashboard';
$parentname = 'dashboard';
$pagename = 'dashboard';
$pagetype = 'dashboard';
?>
@extends('adminview/layout/master')
@section('body')
<div class="theme-wrapper">
    <div class="theme-content">

        <!-- ================= TOP HEADER WITH REFRESH ================= -->
        <div class="px-5 py-4">
            <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between mb-4">
                <div class="card-title">
                    <h1 class="fs-5 fw-600 lh-1">Dashboard</h1>
                    <ul class="breadcrumbs mt-1">
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
                <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
                    <button class="btn btn-primary btn-refresh" id="btn-refresh-dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="refresh-icon" class="mr-1">
                            <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
                        </svg>
                        Refresh
                    </button>
                </div>
            </div>
        </div>

        <!-- ================= TOP COUNTS WITH GRADIENT CARDS ================= -->
        <div class="px-5 py-4">
            <div class="columns is-multiline">

                <div class="column is-3">
                    <div class="card gradient-card gradient-purple">
                        <div class="card-body">
                            <a href="{{ url('guest') }}">
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h2 class="count-number" id="total_guests">178+</h2>
                                <h6 class="count-label">Total Guests</h6>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card gradient-card gradient-blue">
                        <div class="card-body">
                            <a href="{{ url('userroles') }}">
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                </div>
                                <h2 class="count-number" id="total_roles">20+</h2>
                                <h6 class="count-label">Total Roles</h6>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card gradient-card gradient-red">
                        <div class="card-body">
                            <a href="{{ url('guest?role_id=4') }}"> 
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h2 class="count-number" id="total_friends">190+</h2>
                                <h6 class="count-label">Total Friends</h6>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card gradient-card gradient-orange">
                        <div class="card-body">
                            <a href="{{ url('guest?role_id=5') }}"> 
                                <div class="card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                                <h2 class="count-number" id="total_business">12+</h2>
                                <h6 class="count-label">Business Relatives</h6>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================= RECENTLY ADDED GUESTS TABLE ================= -->
        <div class="px-5 mb-5">
            <div class="columns">
                <div class="column is-12">
                    <div class="card modern-table-card">
                        <div class="card-body p-5">

                            <div class="is-flex is-align-items-center is-justify-content-space-between mb-4">
                                <h5 class="mb-0 table-title">Recently Added Guests</h5>
                            </div>

                            <div class="text-nowrap theme-scrollbar-horizontal">
                                <table class="theme-table modern-table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Guest</th>
                                            <th>Contact Details</th>
                                            <th>Address</th>
                                            <th>Logs</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dashboard-guest-list">
                                        <tr>
                                            <td colspan="5" class="text-center">Loading...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $(".main-loading").hide();
        loadDashboardData();

        $('#btn-refresh-dashboard').on('click', function() {
            loadDashboardData();
        });
    });

    function loadDashboardData() {
        $('#refresh-icon').addClass('rotating');
        $('#btn-refresh-dashboard').prop('disabled', true);

        $('#dashboard-guest-list').html(`
            <tr>
                <td colspan="5" class="text-center">Loading...</td>
            </tr>
        `);

        $.ajax({
            url: apipath + "/guest/dashboarddata",
            type: "POST",
            dataType: "json",
            success: function (res) {
                if (res.status === 200) {
                    $('#total_guests').text(res.total_guests || 0);
                    $('#total_roles').text(res.total_roles || 0);
                    $('#total_friends').text(res.total_friends || 0);
                    $('#total_business').text(res.total_business || 0);
                    renderDashboardGuests(res.recent_guests);
                }
            },
            error: function () {
                $.notify('Error loading dashboard data', 'error');
                $('#dashboard-guest-list').html(`
                    <tr>
                        <td colspan="5" class="text-danger text-center">Error loading data</td>
                    </tr>
                `);
            },
            complete: function () {
                $('#refresh-icon').removeClass('rotating');
                $('#btn-refresh-dashboard').prop('disabled', false);
            }
        });
    }

    function renderDashboardGuests(data) {
        $('#dashboard-guest-list').empty();

        if (!data || data.length === 0) {
            $('#dashboard-guest-list').html(`
                <tr>
                    <td colspan="5" class="text-center">No data found</td>
                </tr>
            `);
            return;
        }

        $.each(data, function (index, item) {
            $('#dashboard-guest-list').append(`
                <tr>
                    <td><strong>${index + 1}</strong></td>
                    <td>
                        <strong>${item.first_name || ''} ${item.last_name || ''}</strong>
                    </td>
                    <td>
                        <div class="tag-list">
                            <span class="tag tag-with-icon">
                                <div class="tag-icon mr-2 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                                        <path d="M3 7l9 6l9 -6"></path>
                                    </svg>
                                </div>
                                ${item.email || '-'}
                            </span>
                            <span class="tag tag-with-icon">
                                <div class="tag-icon mr-2 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                    </svg>
                                </div>
                                ${item.phone_no || '-'}
                            </span>
                            <span class="tag tag-with-icon">
                                <div class="tag-icon mr-2 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                    </svg>
                                </div>
                                ${item.whatsapp_no || '-'}
                            </span>
                        </div>
                    </td>
                    <td class="wrap-text">
                        ${item.address || '-'}
                    </td>
                    <td>
                        ${new Date(item.created_at).toDateString()}
                    </td>
                </tr>
            `);
        });
    }
    function getRoleName(role_id) {
        const roles = {
            1: 'Super Admin',
            2: 'Admin',
            3: 'Guest',
            4: 'Friends',
            5: 'Business Relative'
        };
        return roles[role_id] || '-';
    }
</script>
@endsection