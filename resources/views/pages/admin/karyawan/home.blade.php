@extends('layouts.admin')

@section('title', 'Employee')
@section('content')
    <div class="pagetitle row justify-content-between mb-0">

        <div class="col-sm-12 col-md-4">
            <h1>Employee</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ol>
            </nav>
        </div>
        <div class="col-sm-12 col-md-4 mb-3">

            <form action="/admin/karyawan" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="NIK / Nama Karyawan" aria-label="Searching"
                        aria-describedby="search-button-addon" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" id="search-button-addon">
                        <i class="bi bi-search"></i>
                        Cari
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">

                        <div class="col mb-0 mt-3">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                        </div>
                        <table class="table table-borderless ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Departemen</th>
                                    <th style="max-width: 10%" class="text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item => $karyawan)
                                    <tr>
                                        <th scope="row">
                                            {{-- {{ $item + 1 }} --}}
                                            {{ $loop->iteration }}
                                        </th>
                                        <td> {{ $karyawan->nik }} </td>
                                        <td>
                                            <a href="{{ route('karyawan.edit', $karyawan->id) }}"
                                                class="text-primary badge-link-bg">
                                                {{ $karyawan->name }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($karyawan->depart_data->id == 1)
                                                <span class="badge bg-danger">{{ $karyawan->depart_data->nama_departemen }}</span>
                                            @elseif ($karyawan->depart_data->id == 2)
                                                <span class="badge bg-success">{{ $karyawan->depart_data->nama_departemen }}</span>
                                            @elseif ($karyawan->depart_data->id == 3)
                                                <span class="badge bg-secondary">{{ $karyawan->depart_data->nama_departemen }}</span>
                                            @elseif ($karyawan->depart_data->id == 4)
                                                <span class="badge bg-info text-dark">{{ $karyawan->depart_data->nama_departemen }}</span>
                                            @else
                                                <span class="badge bg-dark">{{ $karyawan->depart_data->nama_departemen }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-outline-danger action-button""
                                                data-bs-toggle="modal" data-bs-target="#hapusUser">
                                                <i class="bi bi-trash2"></i>
                                            </button>

                                            <div class="modal fade" id="hapusUser" tabindex="-1"
                                                aria-labelledby="hapusDataLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="hapusDataLabel">Hapus Data</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            Yakin di hapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">
                                                                    Yakin
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center text-light bg-danger" colspan="5">
                                            Data Kosong
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>

                </div>

                {{ $items->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

    {{-- 
    <div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @include('pages.admin.karyawan.create')
    </div>
    --}}

    <div class="modal fade" id="removeData" tabindex="-1" aria-labelledby="hapusDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusDataLabel">Hapus Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Apakah Anda Yakin?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
