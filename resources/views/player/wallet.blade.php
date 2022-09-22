@extends('layouts.admin')

@section('main-content')



<div class="mt-5">
    <div class="flex-wrap row justify-content-around ">
            <div class="col col-sm-2 mt-3 player-col">
                <div class=" card bg-dark p-2">
                    <div class="pt-3 px-2 text-white">
                        <h3>
                            Transfer Points Form
                        </h3>
                    </div>
                        <div class="card-body">
                            <div class="card  text-white" style="background-color: rgb(34, 34, 150)">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Your Points</h5>
                                  <h4 class="mb-2">0.02</h4>
                                </div>
                              </div>
                        </div>
                  </div>
            </div>

              <div class="col col-8 px-3" style="width: 90%">
                <div class="text-white p-3">
                    <h5>
                        Recent Transfers
                    </h5>
                </div>
                <table class="table text-center text-white">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        {{-- <th scope="col">BY</th> --}}
                        <th scope="col">SENDER</th>
                        <th scope="col">RECEIVER</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">DATE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1690128</th>
                        {{-- <td>Test</td> --}}
                        <td>Test</td>
                        <td>Dens16</td>
                        <td>@344.00</td>
                        <td>PAID</td>
                        <td>2022-09-20 03:39:28 pm</td>
                      </tr>
                      <tr>
                        <th scope="row">1690128</th>
                        {{-- <td>Test</td> --}}
                        <td>Test</td>
                        <td>Dens16</td>
                        <td>@344.00</td>
                        <td>PAID</td>
                        <td>2022-09-20 03:39:28 pm</td>
                      </tr>
                      <tr>
                        <th scope="row">1690128</th>
                        {{-- <td>Test</td> --}}
                        <td>Test</td>
                        <td>Dens16</td>
                        <td>@344.00</td>
                        <td>PAID</td>
                        <td>2022-09-20 03:39:28 pm</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
        </div>
    </div>

@endsection
