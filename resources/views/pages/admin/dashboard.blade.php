@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-sm-12 col-md-4">
                        <a href="{{ route('asset.index') }}" class="">
                            <div class="card info-card sales-card">

                                <!--<div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>-->

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Total Assets
                                        <!--<span>| Today</span>-->
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-hdd"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $asset_count }}</h6>
                                            <!--<span class="text-success small pt-1 fw-bold">Barang</span>-->
                                            <span class="text-muted small pt-2 ps-1">Item</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Sales Card -->
                    <!-- Sales Card -->
                    <div class="col-sm-12 col-md-4">
                        <a href="#" class="">
                            <div class="card info-card sales-card">

                                <!--<div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>-->

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Total Lending Assets
                                        <!--<span>| Today</span>-->
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-list"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>0</h6>
                                            <!--<span class="text-success small pt-1 fw-bold">Barang</span>-->
                                            <span class="text-muted small pt-2 ps-1">Item</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Sales Card -->
                    <!-- Customers Card -->
                    <div class="col-sm-12 col-md-4">

                        <a href="{{ route('karyawan.index') }}" class="">
                            <div class="card info-card customers-card">

                            <!--<div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>-->

                            <div class="card-body">
                                <h5 class="card-title">
                                    Total Employee <!--<span>| This Year</span>-->
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $karyawan_count }}</h6>
                                        <!--<span class="text-danger small pt-1 fw-bold">12%</span>-->
                                        <span class="text-muted small pt-2 ps-1">People</span>

                                    </div>
                                </div>

                            </div>
                            </div>
                        </a>

                    </div><!-- End Customers Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
