@extends('layouts.admin')

@section('title', 'Edit Asset')

@section('content')


    <div class="pagetitle">
        <h1>Asset</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Asset</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row justify-content-center">

            <!-- Left side columns -->
            <div class="col-lg-6">

                <div class="card recent-sales overflow-auto">
                    <!--
                                                            <div class="filter">
                                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                    <li class="dropdown-header text-start">
                                                                        <h6>Filter</h6>
                                                                    </li>

                                                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                                                </ul>
                                                            </div>
                                                            -->
                    <div class="card-body">                        
                        <div class="col mb-0 mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('type.update', $data_type->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <h5 class="card-header text-center text-dark">Ubah Data Type Asset</h5>
                            <div class="my-3">
                                <label for="nama_type" class="form-label">Nama Type</label>
                                <input type="text" class="form-control" id="nama_type" name="nama_type" value="{{ $data_type->nama_type }}">
                            </div>
                            <a href="{{ route('type.index') }}" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-success">Save change</button>
                        </form>

                    </div>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>




@endsection
