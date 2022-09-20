@extends('layouts.admin')

@section('main-content')

<div class="d-flex justify-content-between p-4 pt-5" style="flex-wrap: wrap">
    <div class="card bg-dark w-25 h-50 p-4">
        <div class="card-header bg-dark text-white">
          <h5>Commission Earning</h5>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-white text-center ">
                <h3>961.00</h3>
                <p>Total Earnings</p>
            </div>
        </div>
      </div>

  <div class="w-75 px-3">
    <div class="p-4 text-white">
        <h5>Commission Breakdown</h5>
    </div>

    <table id="table_id" class="table text-center text-white">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">FIGHT NUMBER</th>
            <th scope="col">PLAYER</th>
            <th scope="col">BET AMOUNT</th>
            <th scope="col">RATE</th>
            <th scope="col">EARNINGS</th>
            <th scope="col">DATE</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">55400151</th>
            <td>172</td>
            <td>Christ2k22</td>
            <td>100.00</td>
            <td>5%</td>
            <td class="text-success">+5.00</td>
            <td>
                2022-09-17 12:39:39 pm
            </td>
          </tr>
          <tr>
            <th scope="row">55400151</th>
            <td>172</td>
            <td>Christ2k22</td>
            <td>100.00</td>
            <td>5%</td>
            <td class="text-success">+5.00</td>
            <td>
                2022-09-17 12:39:39 pm
            </td>
          </tr>
          <tr>
            <th scope="row">55400151</th>
            <td>172</td>
            <td>Christ2k22</td>
            <td>100.00</td>
            <td>5%</td>
            <td class="text-success">+5.00</td>
            <td>
                2022-09-17 12:39:39 pm
            </td>
          </tr>
        </tbody>
      </table>
  </div>
</div>

@endsection
