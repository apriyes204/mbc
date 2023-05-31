@extends('layouts.admin')

@section('title', 'Asset')

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
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">

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
                            </ul>
                        </div>
                        -->
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-sm my-3" data-bs-toggle="modal"
                            data-bs-target="#addDepart">
                            <i class="bi bi-plus pe-2"></i>Add Asset
                        </button>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="row">#</th>
                                    <th>Nama Karyawan</th>
                                    <th>Asset</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Tujuan Pinjam</th>
                                    <th style="max-width: 10%" class="text-center">Hapus</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($order as $item => $pinjam)
                                    <th scope="row">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td>
                                        {{$pinjam->karyawan->name}}
                                    </td>
                                    <td>
                                        {{$pinjam->item_asset}}<br/>
                                    </td>
                                    <td>
                                        {{$pinjam->tgl_pinjam}}
                                    </td>
                                    <td>
                                        {{$pinjam->tgl_balik}}
                                    </td>
                                    <td>
                                        {{$pinjam->tujuan}}
                                    </td>
                                    @empty
                                <tr>
                                    <td class="text-center text-light bg-danger" colspan="7">
                                        Data Kosong
                                    </td>
                                </tr>
                                    @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                
                {{ $order->links('pagination::bootstrap-5') }}
            </div><!-- End Left side columns -->

        </div>
    </section>

    <div class="modal fade" id="addDepart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('pages.admin.lending.create')
    </div>

@endsection
