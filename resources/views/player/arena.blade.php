@extends('layouts.admin')

@section('main-content')

<div class="container-fluid">
    <div class="card bg-dark mb-4">
        <div class="p-3 text-white">
            <h1 style="font-weight: 700">Hello there!</h1>
        </div>
        <div class="text-center flex-column text-white">
            <img height="400" width="70%" src="{{ asset('/img/sabong.png')}}" alt="sabong">
            <h5>You need at least 10 Points to watch our videos. Click the CSR button below to learn how to top-up your account!</h5>
            <a href="/dashboard" class="btn btn-danger mb-5">
                <h5>Back to lobby</h5>
            </a>
        </div>
    </div>
</div>

@endsection
