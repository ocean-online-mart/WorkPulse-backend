@extends('theme.default')

@section('title', 'Dashboard')

@section('content')

             <div class="content">
                <!-- Breadcrumb -->
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Employee Dashboard</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="attendance-employee.html">
                                        <i class="ti ti-smart-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Employee Dashboard</li>
                            </ol>
                        </nav>
                    </div>                    
                    
                </div>
                <!-- /Breadcrumb -->
                <div class="alert bg-secondary-transparent alert-dismissible fade show mb-4">
                    Your Leave Request on“24th April 2024”has been Approved!!!
                    <button type="button" class="btn-close fs-14" data-bs-dismiss="alert" aria-label="Close"><i
                            class="ti ti-x"></i></button>
                </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="mb-3 text-center">
                                        <h6 class="fw-medium text-gray-5 mb-2">Good Morning, {{ Auth::user()->name }}</h6>
                                        <h4>08:35 AM, 11 Mar 2025</h4>
                                    </div>
                                    <div class="attendance-circle-progress mx-auto mb-3" data-value='65'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar border-success"></span>
                                        </span>
                                        <div class="avatar avatar-xxl avatar-rounded">
                                            <img src="{{ asset('theme/img/profiles/avatar-27.jpg') }}"
                                                alt="Img">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="badge badge-md badge-primary mb-3">Production : 3.45 hrs</div>
                                        <h6 class="fw-medium d-flex align-items-center justify-content-center mb-3">
                                            <i class="ti ti-fingerprint text-primary me-1"></i>
                                            Punch In at 10.00 AM
                                        </h6>
                                        <a href="#" class="btn btn-dark w-100">Punch Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 d-flex">
                            <div class="row flex-fill">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border-bottom mb-2 pb-2">
                                                <span class="avatar avatar-sm bg-primary mb-2"><i class="ti ti-clock-stop"></i></span>
                                                <h2 class="mb-2">8.36 / <span class="fs-20 text-gray-5"> 9</span></h2>
                                                <p class="fw-medium text-truncate">Total Hours Today</p>
                                            </div>
                                            <div>
                                                <p class="d-flex align-items-center fs-13">
                                                    <span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
                                                        <i class="ti ti-arrow-up fs-12"></i>
                                                    </span>
                                                    <span>5% This Week</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border-bottom mb-2 pb-2">
                                                <span class="avatar avatar-sm bg-dark mb-2"><i class="ti ti-clock-up"></i></span>
                                                <h2 class="mb-2">10 / <span class="fs-20 text-gray-5"> 40</span></h2>
                                                <p class="fw-medium text-truncate">Total Hours Week</p>
                                            </div>
                                            <div>
                                                <p class="d-flex align-items-center fs-13">
                                                    <span class="avatar avatar-xs rounded-circle bg-success flex-shrink-0 me-2">
                                                        <i class="ti ti-arrow-up fs-12"></i>
                                                    </span>
                                                    <span>7% Last Week</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border-bottom mb-2 pb-2">
                                                <span class="avatar avatar-sm bg-info mb-2"><i class="ti ti-calendar-up"></i></span>
                                                <h2 class="mb-2">75 / <span class="fs-20 text-gray-5"> 98</span></h2>
                                                <p class="fw-medium text-truncate">Total Hours Month</p>
                                            </div>
                                            <div>
                                                <p class="d-flex align-items-center fs-13 text-truncate">
                                                    <span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
                                                        <i class="ti ti-arrow-down fs-12"></i>
                                                    </span>
                                                    <span>8% Last Month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="border-bottom mb-2 pb-2">
                                                <span class="avatar avatar-sm bg-pink mb-2"><i class="ti ti-calendar-star"></i></span>
                                                <h2 class="mb-2">16 / <span class="fs-20 text-gray-5"> 28</span></h2>
                                                <p class="fw-medium text-truncate">Overtime this Month</p>
                                            </div>
                                            <div>
                                                <p class="d-flex align-items-center fs-13 text-truncate">
                                                    <span class="avatar avatar-xs rounded-circle bg-danger flex-shrink-0 me-2">
                                                        <i class="ti ti-arrow-down fs-12"></i>
                                                    </span>
                                                    <span>6% Last Month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div class="mb-3">
                                                        <p class="d-flex align-items-center mb-1"><i
                                                                class="ti ti-point-filled text-dark-transparent me-1"></i>Total Working
                                                            hours</p>
                                                        <h3>12h 36m</h3>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="mb-3">
                                                        <p class="d-flex align-items-center mb-1"><i
                                                                class="ti ti-point-filled text-success me-1"></i>Productive Hours</p>
                                                        <h3>08h 36m</h3>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="mb-3">
                                                        <p class="d-flex align-items-center mb-1"><i
                                                                class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
                                                        <h3>22m 15s</h3>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="mb-3">
                                                        <p class="d-flex align-items-center mb-1"><i
                                                                class="ti ti-point-filled text-info me-1"></i>Overtime</p>
                                                        <h3>02h 15m</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="progress bg-transparent-dark mb-3" style="height: 24px;">
                                                        <div class="progress-bar bg-white rounded" role="progressbar" style="width: 18%;">
                                                        </div>
                                                        <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                            style="width: 18%;"></div>
                                                        <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                            style="width: 5%;"></div>
                                                        <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                            style="width: 28%;"></div>
                                                        <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                            style="width: 17%;"></div>
                                                        <div class="progress-bar bg-success rounded me-2" role="progressbar"
                                                            style="width: 22%;"></div>
                                                        <div class="progress-bar bg-warning rounded me-2" role="progressbar"
                                                            style="width: 5%;"></div>
                                                        <div class="progress-bar bg-info rounded me-2" role="progressbar"
                                                            style="width: 3%;"></div>
                                                        <div class="progress-bar bg-info rounded" role="progressbar" style="width: 2%;">
                                                        </div>
                                                        <div class="progress-bar bg-white rounded" role="progressbar" style="width: 18%;">
                                                        </div>
                                                    </div>
                    
                                                </div>
                                                <div class="co-md-12">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                                        <span class="fs-10">06:00</span>
                                                        <span class="fs-10">07:00</span>
                                                        <span class="fs-10">08:00</span>
                                                        <span class="fs-10">09:00</span>
                                                        <span class="fs-10">10:00</span>
                                                        <span class="fs-10">11:00</span>
                                                        <span class="fs-10">12:00</span>
                                                        <span class="fs-10">01:00</span>
                                                        <span class="fs-10">02:00</span>
                                                        <span class="fs-10">03:00</span>
                                                        <span class="fs-10">04:00</span>
                                                        <span class="fs-10">05:00</span>
                                                        <span class="fs-10">06:00</span>
                                                        <span class="fs-10">07:00</span>
                                                        <span class="fs-10">08:00</span>
                                                        <span class="fs-10">09:00</span>
                                                        <span class="fs-10">10:00</span>
                                                        <span class="fs-10">11:00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 d-flex">
                            <div class="card position-relative flex-fill">
                                <div class="card-header bg-dark">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg avatar-rounded border border-white border-2 flex-shrink-0 me-2">
                                            <img src="{{asset('theme/img/users/user-01.jpg')}}"
                                                alt="Img">
                                        </span>
                                        <div>
                                            <h5 class="text-white mb-1">Stephan Peralt</h5>
                                            <div class="d-flex align-items-center">
                                                <p class="text-white fs-12 mb-0">Senior Product Designer</p>
                                                <span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>
                                                <p class="fs-12">UI/UX Design</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-sm text-white rounded-circle edit-top"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <span class="d-block mb-1 fs-13">Phone Number</span>
                                        <p class="text-gray-9">+1 324 3453 545</p>
                                    </div>
                                    <div class="mb-3">
                                        <span class="d-block mb-1 fs-13">Email Address</span>
                                        <p class="text-gray-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="cb98bfaebbaeb9afaefaf9ff8baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <span class="d-block mb-1 fs-13">Report Office</span>
                                        <p class="text-gray-9">Doglas Martini</p>
                                    </div>
                                    <div>
                                        <span class="d-block mb-1 fs-13">Joined on</span>
                                        <p class="text-gray-9">15 Jan 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                        <h5>Leave Details</h5>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-calendar me-1"></i>2024
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <p class="d-flex align-items-center"><i
                                                            class="ti ti-circle-filled fs-8 text-dark me-1"></i>
                                                        <span class="text-gray-9 fw-semibold me-1">1254</span> on time
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <p class="d-flex align-items-center"><i
                                                            class="ti ti-circle-filled fs-8 text-success me-1"></i>
                                                        <span class="text-gray-9 fw-semibold me-1">32</span> Late Attendance
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <p class="d-flex align-items-center"><i
                                                            class="ti ti-circle-filled fs-8 text-primary me-1"></i>
                                                        <span class="text-gray-9 fw-semibold me-1">658</span> Work From Home
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <p class="d-flex align-items-center"><i
                                                            class="ti ti-circle-filled fs-8 text-danger me-1"></i>
                                                        <span class="text-gray-9 fw-semibold me-1">14</span> Absent
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="d-flex align-items-center"><i
                                                            class="ti ti-circle-filled fs-8 text-warning me-1"></i>
                                                        <span class="text-gray-9 fw-semibold me-1">68</span> Sick Leave
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 d-flex justify-content-md-end">
                                                <div id="leaves_chart"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="todo1">
                                                <label class="form-check-label" for="todo1">Better than <span class="text-gray-9">85%</span>
                                                    of Employees</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                        <h5>Leave Details</h5>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn btn-white border btn-sm d-inline-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-calendar me-1"></i>2024
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">2022</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Total Leaves</span>
                                                <h4>16</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Taken</span>
                                                <h4>10</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Absent</span>
                                                <h4>2</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Request</span>
                                                <h4>0</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Worked Days</span>
                                                <h4>240</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <span class="d-block mb-1">Loss of Pay</span>
                                                <h4>2</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div>
                                                <a href="#" class="btn btn-dark w-100" data-bs-toggle="modal"
                                                    data-bs-target="#add_leaves">Apply New Leave</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <h5>Employee Attendance</h5>
                            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                <div class="me-3">
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control date-range bookingrange"
                                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-chevron-down"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Select Status
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Present</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Absent</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Sort By : Last 7 Days
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Check In</th>
                                            <th>Status</th>
                                            <th>Check Out</th>
                                            <th>Break</th>
                                            <th>Late</th>
                                            <th>Overtime</th>
                                            <th>Production Hours</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                14 Jan 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                06:45 PM
                                            </td>
                                            <td>30 Min</td>
                                            <td>
                                                32 Min
                                            </td>
                                            <td>20 Min</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.55 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                21 Jan 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                06:12 PM
                                            </td>
                                            <td>20 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>45 Min</td>
                                            <td>
                                                <span class="badge badge-danger d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>7.54 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                20 Feb 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                06:13 PM
                                            </td>
                                            <td>50 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>33 Min</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.45 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                15 Mar 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                06:23 PM
                                            </td>
                                            <td>41 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>50 Min</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.35 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                12 Apr 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                06:43 PM
                                            </td>
                                            <td>23 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>10 Min</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.22 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                20 Apr 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                07:15 PM
                                            </td>
                                            <td>03 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.32 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                06 Jul 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                07:13 PM
                                            </td>
                                            <td>32 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge badge-info d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>9.15 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                02 Sep 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                09:17 PM
                                            </td>
                                            <td>14 Min</td>
                                            <td>
                                                12 Min
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.35Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                10 Dec 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-danger-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Absent
                                                </span>
                                            </td>
                                            <td>
                                                09:23 PM
                                            </td>
                                            <td>10 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>45 Min</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>9.25 Hrs
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                15 Nov 2024
                                            </td>
                                            <td>09:00 AM</td>
                                            <td>
                                                <span class="badge badge-success-transparent d-inline-flex align-items-center">
                                                    <i class="ti ti-point-filled me-1"></i>Present
                                                </span>
                                            </td>
                                            <td>
                                                08:15 PM
                                            </td>
                                            <td>12 Min</td>
                                            <td>
                                                -
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center">
                                                    <i class="ti ti-clock-hour-11 me-1"></i>8.35Hrs
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

            @include('theme.modals.add-leave')
    @endsection