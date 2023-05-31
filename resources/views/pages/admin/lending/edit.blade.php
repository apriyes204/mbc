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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('asset.update', $asset->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <h5 class="card-header text-center text-dark">Ubah Data Asset</h5>
                            <div class="my-3">
                                <label for="label_code" class="form-label">Label Code</label>
                                <input type="text" class="form-control" id="label_code" name="label_code"
                                    value="{{ $asset->label_code }}">
                            </div>
                            <div class="my-3">
                                <label for="selectype" class="form-label">Type</label>
                                <select name="id_type" id="selecttype" class="form-select">
                                    <option value="{{ $asset->id_type}}">Jangan dirubah</option>
                                    @foreach ($data_type as $item)                                        
                                        <option value="{{ $item->id }}">{{ $item->nama_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <label for="brand" class="form-label">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" value="{{ $asset->brand }}">
                            </div>
                            <div class="my-3">
                                <label for="model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="model" name="model" value="{{ $asset->model }}">
                            </div>
                            <div class="my-3">
                                <label for="serial_number" class="form-label">Serial Number</label>
                                <input type="text" class="form-control" id="serial_number" name="serial_number" value="{{ $asset->serial_number }}">
                            </div>
                            <div class="my-3">
                                <label for="buy_of_date" class="form-label">Buy of Date</label>
                                <input type="month" class="form-control" id="buy_of_date" name="buy_of_date" value="{{ $asset->buy_of_date }}">
                            </div>
                            <div class="my-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="{{ $asset->harga }}">
                            </div>
                            <div class="my-3">
                                <label for="processor" class="form-label">Processor</label>
                                <input type="text" class="form-control" id="processor" name="processor" value="{{ $asset->processor }}">
                            </div>
                            <div class="my-3">
                                <label for="ram" class="form-label">Ram</label>
                                <input type="text" class="form-control" id="ram" name="ram" value="{{ $asset->ram }}">
                            </div>
                            <div class="my-3">
                                <label for="hdd" class="form-label">Harddisk</label>
                                <input type="text" class="form-control" id="hdd" name="hdd" value="{{ $asset->hdd }}">
                            </div>
                            <div class="my-3">
                                <label for="monitor" class="form-label">Monitor/VGA</label>
                                <input type="text" class="form-control" id="monitor" name="monitor" value="{{ $asset->monitor }}">
                            </div>
                            <div class="my-3">
                                <label for="lan" class="form-label">Lan</label>
                                <select name="lan" id="lan" class="form-select">
                                    <option value="{{ $asset->lan}}">Jangan dirubah</option>           
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <a href="{{ route('asset.index') }}" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-success">Save change</button>
                        </form>

                    </div>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>




@endsection
