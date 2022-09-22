@extends('layouts.admin')

@section('main-content')

    <div class="mt-5">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="card bg-dark p-2">
                <div class="pt-3 px-2 text-white">
                    <h3>
                        Transfer Points Form
                    </h3>
                </div>
                <div class="d-flex ">
                    <div class="card-body">
                        <div class="card  text-white" style="background-color: rgb(34, 34, 150)">
                            <div class="card-body text-center">
                                <h5 class="card-title">Your Points</h5>
                                <h4 class="mb-2">0.02</h4>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <i style="font-size: 1rem; color:white" class="fa-solid fa-arrow-right"></i>
                    </div>

                    <div class="card-body">
                        <div class="card bg-primary text-white">
                            <div class="card-body text-center">
                                <h5 class="card-title">Select a User</h5>
                                <h4 class="mb-2">0.00</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="height: 1px" class="solid text-white">

                <div>
                    <form method="POST">
                        @csrf
                        <div class="d-flex justify-content-between pb-3">
                            <select class="form-select bg-dark text-white" aria-label="Default select example" name="receiver">
                                <option selected disabled>Select user</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control mx-2 bg-dark text-white" name="amount" placeholder="Amount">
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Deposit Balance</button>
                    </form>
                </div>
            </div>

            <div class="w-75 mt-5 px-3">
                <div class="text-white p-3">
                    <h5>Recent Transfers</h5>
                </div>
                <table class="table text-center text-white">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">SENDER</th>
                        <th scope="col">RECEIVER</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($recentTransfers as $recentTransfer)
                        <tr>
                            <th scope="row">{{ $recentTransfer->id }}</th>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ $recentTransfer->to->holder->name }}</td>
                            <td>{{ $recentTransfer->deposit->amount }}</td>
                            <td>PAID</td>
                            <td>{{ $recentTransfer->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
