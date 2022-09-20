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
                <th scope="col">SUB AGENT</th>
                <th scope="col">PLAYERS</th>
                <th scope="col">STATUS</th>
                <th scope="col">REGISTER DATE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">74029</th>
                <td>Chris44</td>
                <td>0.00</td>
                <td>Test</td>
                <td>0</td>
                <td>1</td>
                <td>
                    <button class="btn btn-success">Allowed</button>
                </td>
                <td>2022-07-20 03:09:48 am</td>
              </tr>
              <tr>
                <th scope="row">74029</th>
                <td>Chris44</td>
                <td>0.00</td>
                <td>Test</td>
                <td>0</td>
                <td>1</td>
                <td>
                    <button class="btn btn-success">Allowed</button>
                </td>
                <td>2022-07-20 03:09:48 am</td>
              </tr>
              <tr>
                <th scope="row">74029</th>
                <td>Chris44</td>
                <td>0.00</td>
                <td>Test</td>
                <td>0</td>
                <td>1</td>
                <td>
                    <button class="btn btn-success">Allowed</button>
                </td>
                <td>2022-07-20 03:09:48 am</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection
