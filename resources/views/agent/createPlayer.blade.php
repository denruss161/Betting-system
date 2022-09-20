@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <div class="container-fluid mt-5 ">

        <div class="text-center">
        <h1 class="h3 mb-4 text-white">{{ __('Create Sub-Agent') }}</h1>
        </div>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row d-flex justify-content-center ">

        <div class="col-lg-8 order-lg-1 ">

            <div class="card shadow mb-4 bg-dark">

                <div class="card-header py-3 bg-dark">
                    <h6 class="m-0 font-weight-bold text-white">Player's Account</h6>
                </div>

                <div class="card-body">

                    <form method="POST" class=" action="{{ route('profile.update') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small mb-4 text-white">User information</h6>

                        <div class="pl-lg-4  ">
                            <div class="row ">
                                <div class="col-lg-6 ">
                                    <div class="form-group focused ">
                                        <label class="form-control-label text-white" for="name">Username<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Username" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label text-white" for="last_name">Phone Number</label>
                                        <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Phone Number" value="">
                                    </div>
                                </div>
                            </div>

                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label text-white" for="new_password">Password</label>
                                                <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label text-white" for="confirm_password">Confirm password</label>
                                                <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
    </div>

@endsection
