@extends('layouts.admin')

@section('main-content')

<div>
    <div>
        <div class="">
            <div class="card-body p-5" style="background: rgb(34, 34, 34); border: none">
              <h1 class="card-title text-danger" style="font-weight: 800" >150 Exp Fights</h1>
              <p class="card-text text-danger" style="font-weight: 800">SABONG EVENT 1</p>
            </div>
        </div>
              <div class="bg-gray-700 p-3 ">
              <div class="btn btn-danger ">
                    <a href="/arena" class="text-white d-flex" style="text-decoration: none" >
                        <i style="color: white; font-size: 1rem; padding-top: 3px; padding-right: 10px" class="fa-solid fa-arrow-right"></i>
                        <h5>Enter Arena</h5>
                </a>
              </div>
              </div>
    </div>
</div>

@endsection
