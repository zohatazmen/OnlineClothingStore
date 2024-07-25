<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zoha clothing :: Administrative Panel</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/adminlte.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/zohaalogo.svg') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="{{ url('backend/css/custom.css') }}">
    <style>
        /* Custom styles for sidebar */
        .main-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            overflow-y: auto;
            z-index: 1000;
        }

        .content-wrapper {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        .sidebar-collapse .main-sidebar {
            width: 80px;
            /* Adjust width as needed for collapsed state */
        }

        .sidebar-collapse .content-wrapper {
            margin-left: 80px;
            /* Adjust margin as needed for collapsed state */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav pl-2">
                <!-- Breadcrumb can go here if needed -->
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="{{ url('backend/img/picofme.png') }}" class='img-circle elevation-2' width="40"
                            height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>{{ Auth::guard('admin')->user()->name }}</strong></h4>
                        <div class="mb-3">{{ Auth::guard('admin')->user()->email }}</div>
                        <div class="dropdown-divider"></div>

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>
                <p class="disc" style="display: inline;">
                    ©<?php echo date('Y'); ?> Zoha's Online Clothing Brand | Developed by
                    <a href="mailto:zohatazmen@example.com" style="display: inline;">Zoha Tazmen</a>
                </p>
            </strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('backend/js/adminlte.min.js') }}"></script>
    <script src="{{ url('backend/js/demo.js') }}"></script>
    @yield('customJs')

    <script>
        $(document).ready(function() {
            $('[data-widget="pushmenu"]').PushMenu({
                screenCollapseSize: 767,
                autoCollapseSize: 992,
                enableRemember: true,
                noTransitionAfterReload: true
            });
        });
    </script>
</body>

</html>
