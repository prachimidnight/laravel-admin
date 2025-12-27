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
                    <button class="btn btn-primary" id="btn-refresh-dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="refresh-icon" class="mr-1">
                            <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
                        </svg>
                        Refresh
                    </button>
                </div>
            </div>
        </div>

        <!-- ================= TOP COUNTS ================= -->
        <div class="px-5 py-4">
            <div class="columns is-multiline">

                <div class="column is-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('guest') }}">
                                <h6>Total Guests</h6>
                                <h2 id="total_guests">0</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('userroles') }}">
                                <h6>Total Roles</h6>
                                <h2 id="total_roles">0</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('guest?role=4') }}"> 
                                <h6>Total Friends</h6>
                                <h2 id="total_friends">0</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ url('guest?role=5') }}"> 
                                <h6>Business Relatives</h6>
                                <h2 id="total_business">0</h2>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================= MAIN CONTENT (LEFT + RIGHT) ================= -->
        <div class="px-5 mb-5">
            <div class="columns">

                <div class="column is-6">
                    <div class="card">
                        <div class="card-body p-5">

                            <div class="is-flex is-align-items-center is-justify-content-space-between mb-2">
                                <h5 class="mb-0">Recently Added Guests</h5>
                            </div>

                            <div class="text-nowrap theme-scrollbar-horizontal">
                                <table class="theme-table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Guest</th>
                                            <th>Guest Contact</th>
                                            <th>Logs</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dashboard-guest-list">
                                        <tr>
                                            <td colspan="4" class="text-center">Loading...</td>
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

<style>
    .btn-icon {
        width: 40px;
        height: 40px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    #refresh-icon {
        transition: transform 0.3s ease;
    }
    
    #refresh-icon.rotating {
        animation: rotate-icon 1s linear infinite;
    }
    
    @keyframes rotate-icon {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    #btn-refresh-dashboard:hover {
        transform: scale(1.05);
        transition: all 0.2s ease;
    }

    #btn-refresh-dashboard:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
</style>

<script>
    $(document).ready(function () {
        $(".main-loading").hide();
        
        loadDashboardData();

        $('#btn-refresh-dashboard').on('click', function() {
            loadDashboardData();
        });           

        $.ajax({
            url: apipath + "/guest/dashboarddata",
            type: "POST",
            dataType: "json",
            success: function (res) {
                if (res.status === 200) {
                    $('#guest-count').text(res.total_guests);
                }
            }
        });
    });

    function loadDashboardData() {
        $('#refresh-icon').addClass('rotating');
        $('#btn-refresh-dashboard').prop('disabled', true);

        $('#dashboard-guest-list').html(`
            <tr>
                <td colspan="4" class="text-center">Loading...</td>
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
                //     $.notify('Dashboard refreshed successfully!', 'success');
                // } else {
                    // $.notify('Failed to load dashboard data', 'error');
                }
            },
            error: function () {
                $.notify('Error loading dashboard data', 'error');
                $('#dashboard-guest-list').html(`
                    <tr>
                        <td colspan="4" class="text-danger text-center">Error loading data</td>
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
                    <td colspan="4" class="text-center">No data found</td>
                </tr>
            `);
            return;
        }

        $.each(data, function (index, item) {
            $('#dashboard-guest-list').append(`
                <tr>
                    <td>${index + 1}</td>
                    <td>
                        <b>${item.first_name || ''} ${item.last_name || ''}</b>
                    </td>
                    <td>
                    <div class="tag-list">
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                                                <path d="M3 7l9 6l9 -6"></path>
                                            </svg>
                                        </div>
                                        ${item.email ? item.email : '-'}
                                    </span>
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        ${item.phone_no ? item.phone_no : '-'}
                                    </span>
                                    <span class="tag tag-with-icon tag-gray">
                                        <div class="tag-icon mr-2 pr-2">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                                        </div>
                                    ${item.whatsapp_no ? item.whatsapp_no : '-'}
                                    </span>
                                </div>
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