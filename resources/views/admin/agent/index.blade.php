@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid mt-5" style="height: 100vh">
        <div>
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4>Referred Agent Network</h4>
                    <h5 class="card-title">User List</h5>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="d-flex justify-content-end align-items-end mb-2">
                <button class="btn btn-success mr-2"
                    data-referral="{{ auth()->user()->referralToken->referral_token ?? 'No Token' }}" id="referralBtn">Copy Referral
                    Link</button>
                <a class="btn btn-primary" href="{{ route('admin.agents.create') }}">Create Agent</a>
            </div>
           <div style="overflow-x: scroll;" class="">
            <table class="table text-center text-white">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">POINTS</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">REGISTER DATE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($referredAgents as $referredAgent)
                        <tr>
                            <th scope="row">{{ $referredAgent->id }}</th>
                            <td>{{ $referredAgent->username }}</td>
                            <td>{{ number_format($referredAgent->balance, 2) }}</td>
                            <td>
                                <button class="btn btn-success">Allowed</button>
                            </td>
                            <td>{{ $referredAgent->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
        </div>
    </div>


    @push('scripts')
        <script type="text/javascript">
            const button = document.querySelector('#referralBtn')

            button.addEventListener('click', function () {
               navigator.clipboard.writeText("{{ config('app.url') }}" + "invite/create?referral_token=" + button.dataset.referral)
            })
        </script>
    @endpush
@endsection
