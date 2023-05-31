@extends('layouts.admin')

@section('title', 'Edit Karyawan')

@section('content')


    <div class="pagetitle">
        <h1>Karyawan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Karyawan</li>
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
                        <form action="{{ route('karyawan.update', $data_karyawan->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <h5 class="card-header text-center fw-bold">Ubah Data Karyawan</h5>
                            <div class="my-3">
                                <label for="nikaryawan" class="form-label">Nomor Induk Karyawan</label>
                                <input type="text" class="form-control" id="nikaryawan" name="nik"
                                    value="{{ $data_karyawan->nik }}">
                            </div>
                            <div class="my-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="name"
                                    value="{{ $data_karyawan->name }}">
                            </div>
                            <div class="my-3">
                                <label for="depart_nama" class="form-label">Departemen</label>
                                {{-- <input type="text" class="form-control" id="nama_departemen" name="type"
                                    value="{{ $data_karyawan->depart_data->nama_departemen }}"> --}}
                                <input class="mb-3 form-control" type="text"
                                    value="{{ $data_karyawan->depart_data->nama_departemen }}"
                                    aria-label="Disabled input example" disabled readonly>
                                <select name="departemen_id" class="form-select" aria-label="depart_nama">
                                    <option value="{{ $data_karyawan->depart_data->id }}" selected>Pilih Departemen</option>
                                    @foreach ($data_departemen as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_departemen }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-3">
                                <label for="depart_nama" class="form-label">Posisi</label>
                                <input class="mb-3 form-control" type="text" value="{{ $data_karyawan->posisi }}" aria-label="Disabled input example" disabled readonly>
                                <select name="posisi" class="form-select" aria-label="depart_nama">
                                    <option value="{{ $data_karyawan->posisi }}">Pilih Posisi</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Asisten Manager">Asisten Manager</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                            <div class="my-3">
                                <label for="depart_nama" class="form-label">Status</label>
                                <input class="mb-3 form-control" type="text"
                                    value=" {{ $data_karyawan->status }}"
                                    aria-label="Disabled input example" disabled readonly>
                                <select name="status" class="form-select" aria-label="depart_nama">
                                    <option value="{{ $data_karyawan->status }}">Pilih Status</option>
                                    <option value="Permanen">Permanen</option>
                                    <option value="Kontrak">Kontrak</option>
                                </select>
                            </div>
                            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary">Save change</button>
                        </form>

                    </div>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>




@endsection
