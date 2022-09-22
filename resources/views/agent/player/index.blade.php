@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid mt-5">
        <div>
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4>Sub Agent Network</h4>
                    <h5 class="card-title">User List</h5>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <table class="table text-center text-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">POINTS</th>
                        <th scope="col">PRIMARY AGENT</th>
                        <th scope="col">AGENT</th>
                        <th scope="col">PLAYERS</th>
                        <th scope="col">REGISTER DATE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <th scope="row">{{  $player->id }}</th>
                            <td>{{  $player->username }}</td>
                            <td>0.00</td>
                            <td>{{  $player->createdBy->username ?? 'No Agent' }}</td>
                            <td>Not Applicable</td>
                            <td>
                                <button class="btn btn-success">Allowed</button>
                            </td>
                            <td>{{ $player->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
