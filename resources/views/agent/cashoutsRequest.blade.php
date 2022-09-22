@extends('layouts.admin')

@section('main-content')

    <div class="p-4 pt-5" style="flex-wrap: wrap">
           <div class="d-flex justify-content-center  flex-wrap flex-column">
            <div  class="card col bg-primary text-white">
                <div class="card-body">
                  <div class="d-flex text-align-start">
                  <i style="font-size: 25px; margin-right: 1rem" class="fa-solid fa-wallet"></i>
                  <h3 class="card-title my-1">Wallet Ballance</h3>
                  </div>
                  <div class="text-center">
                    <h1 class="card-text" style="font-weight: 800" >1100.00</h1>
                  </div>
                  <div class="bg-dark h-50 text-center pt-3">
                      <h5>New Cashouts Request (0)</h5>
                      <p class="text-muted">No Result :(</p>
                </div>
                </div>
              </div>

          <div    class="px-3">
            <div class="p-4 text-white">
                <h5>Resent Cash Request</h5>
            </div>

           <div class="table-responsive">
            <table id="table_id"  class="display table text-center text-white">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USER</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DETAILS</th>
                    <th scope="col">DATE</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>200</td>
                    <td>
                        <button class="btn btn-success" style="border-radius: 1.5rem">Completed</button>
                    </td>
                    <td>
                        <button class="btn btn-warning">View</button>
                    </td>
                    <td>
                        2022-09-17 12:39:39 pm
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>500</td>
                    <td>
                        <button class="btn btn-success" style="border-radius: 1.5rem">Completed</button>
                    </td>
                    <td>
                        <button class="btn btn-warning">View</button>
                    </td>
                    <td>
                        2022-09-17 12:39:39 pm
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>1000</td>
                    <td>
                        <button class="btn btn-success" style="border-radius: 1.5rem">Completed</button>
                    </td>
                    <td>
                        <button class="btn btn-warning">View</button>
                    </td>
                    <td>
                        2022-09-17 12:39:39 pm
                    </td>
                  </tr>
                </tbody>
              </table>
           </div>
          </div>
           </div>
    </div>

@endsection
