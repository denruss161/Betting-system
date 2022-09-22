<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adcd8fe147.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../player/player.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper" class="sidebar-toggled" style="background-color: rgb(34, 34, 34); position: relative">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar accordion toggled text-white"  style="background-color: rgb(34, 34, 34);" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand text-white d-flex align-items-center justify-content-center" href="/agent/home">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Agent Dashboard</div>
        </a>

        {{-- @role('admin') --}}
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link text-white" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Inbox') }}
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/cashout">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Cashout Request') }}</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <div class="sidebar-heading">
            {{ __('Commisions') }}
        </div>

        <!-- Nav Item - Profile -->
         <!-- Nav Item - About -->
         <li class="nav-item">
            <a class="nav-link text-white" href="/agent/commissions">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('Commision Breakdown') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <div class="sidebar-heading">
            {{ __('My Account') }}
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/points">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Transfer Points') }}</span>
            </a>
        </li>


        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link text-white" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Edit Profile') }}</span>
            </a>
        </li>

        <div class="sidebar-heading">
            {{ __('My Network') }}
        </div>

        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/sub-agents">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Sub Agents') }}</span>
            </a>
        </li>

        <!-- Nav Item - About -->
        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/player">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('Player') }}</span>
            </a>
        </li>

        <div class="sidebar-heading">
            {{ __('Create User') }}
        </div>

        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/create-sub">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Create Sub Agents') }}</span>
            </a>
        </li>

        <!-- Nav Item - About -->
        <li class="nav-item">
            <a class="nav-link text-white" href="/agent/create-player">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('Create Player') }}</span>
            </a>
        </li>
        {{-- @endrole --}}

        @role('user')
        <li class="nav-item">
            <a class="nav-link text-white" href="/wallet">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('Wallet') }}</span>
            </a>
        </li>
        @endrole
        <li class="nav-item mb-5">
            <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                {{ __('Logout') }}
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: rgb(37, 37, 37)">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                    @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        {{-- <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Alejandro RH {{ now()->year }}</span>
                </div>
            </div>
        </footer> --}}
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
