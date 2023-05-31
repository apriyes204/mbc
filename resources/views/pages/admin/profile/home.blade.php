@extends('layouts.admin')

@section('title', 'Profile')

@section('content')


    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-xl-12-mb-3">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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

            <div class="col-xl-5 mb-3">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        {{-- <img src="{{ Storage::url($user->url) }}"> --}}
                        {{-- <img src="{{ $user->foto === '' ? url('backend/assets/img/undraw_profile.svg') : $user->foto }}"> --}}
                        <img src="{{ $user->foto === '' ? url('backend/assets/img/undraw_profile.svg') : $user->foto }}" alt="Profile" class="rounded-circle mb-3" style="max-width: 100px;">
                        <h4 class="mt-2 fw-bold">{{ $user->name }}</h4>
                        <h5>{{ $user->depart_data->nama_departemen }}</h5>
                        {{--
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                        --}}
                    </div>
                </div>

            </div>

            <div class="col-xl-7">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>
                            <!--
                                                                    <li class="nav-item">
                                                                        <button class="nav-link" data-bs-toggle="tab"
                                                                            data-bs-target="#profile-settings">Settings</button>
                                                                    </li>
                                                                    -->
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <!--
                                                                        <h5 class="card-title">About</h5>
                                                                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                                                            temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                                                            quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                                                                            <h5 class="card-title">Profile Details</h5>
                                                                        -->

                                <div class="row mt-3 table-responsive-sm">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th scope="col">Nama Lengkap</th>
                                            <td class="text-start"> {{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Departemen</th>
                                            <td class="text-start">{{ $user->depart_data->nama_departemen }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Posisi</th>
                                            <td class="text-start">{{ $user->posisi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <td class="text-start">{{ $user->status }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">No. Telp.</th>
                                            <td class="text-start">{{ $user->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td class="text-start">{{ $user->email }}</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                
                                    <div class="row mb-3">
                                        <div class="text-center d-grid gap-2">
                                            {{-- <button type="button" class="btn btn-success">

                                            </button> --}}
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#uploadGambar"
                                                class="btn btn-success" title="Ganti profile Photo" role="button">Ubah
                                                Photo <i class="bi bi-upload"></i></a>
                                            <div class="modal fade" id="uploadGambar" tabindex="-1" aria-labelledby="uploadGambarLabel" aria-hidden="true">
                                                @include('pages.admin.profile.upload')
                                            </div>
                                        </div>
                                        <!--<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                                        Image</label>-->
                                        <!--<div class="col-md-8 col-lg-9">
                                                                        <img src="{{ $user->foto === '' ? url('backend/assets/img/undraw_profile.svg') : $user->foto }}"
                                                                            alt="Profile" style="max-width: 90px">
                                                                        <div class="pt-2">
                                                                            <a href="#" class="btn btn-primary btn-sm"
                                                                                title="Upload new profile image" role="button">Upload Foto  <i class="bi bi-upload"></i></a>
                                                                            <a href="#" class="btn btn-danger btn-sm"
                                                                                title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                                        </div>
                                                                    </div>-->
                                    </div>
                                    <form action="{{ route('profile.update', $user->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label fw-bold">Full
                                            Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" name="name"
                                                id="fullName" value="{{ $user->name }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="departemen"
                                            class="col-md-4 col-lg-3 col-form-label fw-bold">Departemen</label>
                                        <!--                                        <div class="col-md-8 col-lg-9">
                                                                                    <input name="company" type="text" class="form-control" id="company"
                                                                                        value="Lueilwitz, Wisoky and Leuschke">
                                                                                </div>-->
                                        <div class="col-auto">
                                            <label for="departemen" class="visually-hidden fw-bold">Departemen</label>
                                            <input type="text" readonly class="form-control-plaintext"
                                                id="staticEmail2" value="{{ $user->depart_data->nama_departemen }}">
                                        </div>
                                        <div class="col">
                                            <select class="form-select" name="departemen_id"
                                                aria-label="Default select example">
                                                <option value="{{ $user->depart_data->id }}" selected>Pilih Departemen
                                                </option>
                                                @foreach ($data_departemen as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_departemen }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Country"
                                            class="col-md-4 col-lg-3 col-form-label fw-bold">Posisi</label>
                                        <div class="col-auto">
                                            <label for="posisi" class="visually-hidden">Posisi</label>
                                            <input type="text" readonly class="form-control-plaintext" id="posisi"
                                                value="{{ $user->posisi }}">
                                        </div>
                                        <div class="col">
                                            <select name="posisi" class="form-select" aria-label="depart_nama">
                                                <option value="{{ $user->posisi }}">Pilih Posisi</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Asisten Manager">Asisten Manager</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address"
                                            class="col-md-4 col-lg-3 col-form-label fw-bold">Status</label>
                                        <div class="col-auto">
                                            <label for="status" class="visually-hidden">Status</label>
                                            <input type="text" readonly class="form-control-plaintext"
                                                id="staticEmail2" value="{{ $user->status }}">
                                        </div>
                                        <div class="col">
                                            <select name="status" class="form-select" aria-label="depart_nama">
                                                <option value="{{ $user->status }}">Pilih Status</option>
                                                <option value="Permanen">Permanen</option>
                                                <option value="Kontrak">Kontrak</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label fw-bold">Nomor
                                            Telepon</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="no_telp" type="text" class="form-control" id="Phone"
                                                value="{{ $user->no_telp }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-lg-3 col-form-label fw-bold">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                                <!-- End Profile Edit Form -->

                            </div>
                            <!--
                                                                    <div class="tab-pane fade pt-3" id="profile-settings">

                                                                        <form>

                                                                            <div class="row mb-3">
                                                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                                                    Notifications</label>
                                                                                <div class="col-md-8 col-lg-9">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                                                        <label class="form-check-label" for="changesMade">
                                                                                            Changes made to your account
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                                                        <label class="form-check-label" for="newProducts">
                                                                                            Information on new products and services
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="proOffers">
                                                                                        <label class="form-check-label" for="proOffers">
                                                                                            Marketing and promo offers
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" id="securityNotify"
                                                                                            checked disabled>
                                                                                        <label class="form-check-label" for="securityNotify">
                                                                                            Security alerts
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="text-center">
                                                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                -->
                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="{{ route('change.password') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="current_password" type="password" class="form-control"
                                                id="currentPassword" autocomplete="current-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password" type="password" class="form-control"
                                                id="new_password" autocomplete="current-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_confirm_password" type="password" class="form-control"
                                                id="renewPassword" autocomplete="current-password">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
