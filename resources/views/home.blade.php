@extends('layouts.admin')

@section('main-content')

<div class="container-fluid pt-5">
    <div class="card" style="background-color: rgb(23, 28, 51)" >
        <div class="card-header" style="background-color:rgb(23, 28, 51)" >
            <div class="d-flex justify-content-between">
                <h5 class="text-primary">
                    Announcement
                </h5>
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
        </div>
        <div class="card-body text-primary">
          <p class="card-text">To all MA / PRIMARY / SUB AGENT's Paki update po ang inyong mga account ng inyong active Phone #
            at Full name, Upang mas madali po ma direct contact ang mananalo sa ating mga papromo. 📌Upang hindi maantala sa pag claim
             ng prize kaylangan po na updated ang registered contact number. To update CLICK * menu * My account * Edit profile * Save changes
             📌Always update your raffle ticket by clicking UPDATE RAFFLE TICKETS on your dashboard account. Please let us know if updated na upang maisave ng management ang inyong mga Contact INFO. Maraming salamat at more tickets agents🔥 SGLIVE MANAGEMENT!.</p>
        </div>
      </div>

      <div class="card mt-5">
        <div class="card-header bg-dark text-white d-flex">
            <i style="font-size: 2rem; margin-right: 1rem" class="fa-solid fa-house"></i>
            <h1>
                Dashboard
            </h1>
        </div>
        <div class="card-body bg-dark">
                    <div style="flex-wrap: wrap" class="d-flex flex-sm-row justify-content-between flex-column">
                            <div  class="card col  bg-primary text-white">
                                <div class="card-body">
                                  <div class="d-flex text-align-start">
                                  <i style="font-size: 25px; margin-right: 1rem" class="fa-solid fa-wallet"></i>
                                  <h3 class="card-title my-1">Wallet Ballance</h3>
                                  </div>
                                  <h6 class=" mb-2 mt-2" style="color: rgb(238, 236, 236)" >Your current wallet balance</h6>
                                  <div class="text-center">
                                    <h1 class="card-text" style="font-weight: 800" >1100.00</h1>
                                  <a href="#" class="btn btn-primary w-75 text-white">View Transaction Logs</a>
                                  </div>
                                </div>
                              </div>

                              <div class="card col text-white" style="background-color:rgb(23, 28, 51)">
                                <div class="card-body">
                                  <div class=" d-flex text-align-start">
                                  <i style="font-size: 25px; margin-right: 1rem" class="fa-solid fa-wallet"></i>
                                  <h3 class="card-title my-1">Available Commssions</h3>
                                  </div>
                                  <h6 class=" mb-2 mt-2" style="color: rgb(238, 236, 236)" >Commissions that can be drawn</h6>
                                  <div class="text-center">
                                    <h1 class="card-text" style="font-weight: 800" >93.03</h1>
                                  <a href="#" style="background-color:rgb(23, 28, 51)" class="btn w-75 text-white">View earnings</a>
                                  </div>
                                </div>
                              </div>

                          <div class="card col bg-success text-white">
                                <div class="card-body">
                                  <div class=" d-flex text-align-start">
                                  <i style="font-size: 25px; margin-right: 1rem" class="fa-solid fa-wallet"></i>
                                  <h3 class="card-title my-1">Total Network Earnings</h3>
                                  </div>
                                  <h6 class=" mb-2 mt-2" style="color: rgb(238, 236, 236)" >Your total downline earnings.</h6>
                                  <div class="text-center">
                                    <h1 class="card-text" style="font-weight: 800" >1100.00</h1>
                                  <a href="#" class="btn btn-success w-75 text-white">View Commision Breakdown</a>
                                  </div>
                                </div>
                              </div>

                          <div class="card col bg-dark text-white">
                                <div class="card-body">
                                  <div class="d-flex text-align-start">
                                  <i style="font-size: 25px; margin-right: 1rem" class="fa-solid fa-wallet"></i>
                                  <h3 class="card-title my-1">Last Month Earnings</h3>
                                  </div>
                                  <h6 class=" mb-2 mt-2" style="color: rgb(238, 236, 236)" >Your total downline earnings last month.</h6>
                                  <div class="text-center">
                                    <h1 class="card-text" style="font-weight: 800" >433.94</h1>
                                  <a href="#" class="btn btn-dark w-75 text-white">Query Commissions earnings</a>
                                  </div>
                                </div>
                        </div>
            </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="card m-5 w-25" style="background-color: orange">
            <div class="card-body d-flex">
              <input type="text" style="background-color: orange" class="form-control text-white" value="https://sglive888.com/register?agent=a3b98aa9b58c&applicant=true">
              <div class="ml-2">
                <i style="font-size: 2rem; color: white" class="fa-solid fa-copy"></i>
              </div>
            </div>
          </div>

          <div class="card m-5 w-25 bg-success">
            <div class="card-body d-flex">
              <input type="text" class="form-control bg-success text-white" value="https://sglive888.com/register?agent=a3b98aa9b58c&applicant=true">
              <div class="ml-2">
                <i style="font-size: 2rem; color: white" class="fa-solid fa-copy"></i>
              </div>
            </div>
          </div>
      </div>
</div>



@endsection
