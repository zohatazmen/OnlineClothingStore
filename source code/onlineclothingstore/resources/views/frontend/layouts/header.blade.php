<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Zoha Clothing Brand</title>
    <meta name="description" content="" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="pinterest" content="nopin" />

    <meta property="og:locale" content="en_AU" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="" />
    <meta property="og:image:alt" content="" />

    <meta name="twitter:title" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:image:alt" content="" />
    <meta name="twitter:card" content="summary_large_image" />


    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/video-js.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}?v=<?php echo rand(111, 999); ?>" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&family=Raleway:ital,wght@0,400;0,600;0,800;1,200&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/zohaalogo.svg') }}" />
    <style>
        .top-header {
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        .top-header .container {
            display: flex;
            align-items: center;
        }

        .top-header .logo {
            width: 100px;
            height: auto;
        }

        .navbar {
            background-color: #343a40;
            padding: 10px 0;
        }

        .navbar a {
            color: #ffffff;
            font-size: 18px;
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar .dropdown-toggle {
            background-color: #343a40;
            border: none;
            color: #ffffff;
            font-size: 18px;
            text-decoration: none;
        }

        .navbar .dropdown-menu {
            background-color: #343a40;
        }

        .navbar .dropdown-item {
            color: #ffffff;
            font-size: 16px;
        }

        .right-nav {
            display: flex;
            align-items: center;
        }

        .right-nav a {
            color: #ffffff;
            font-size: 24px;
            text-decoration: none;
        }

        @media (max-width: 991px) {
            .navbar .menu-btn {
                color: #ffffff;
                font-size: 24px;
                border: none;
                background-color: transparent;
            }

            .navbar-collapse {
                background-color: #343a40;
                margin-top: 10px;
                padding: 10px;
            }

            .navbar-nav {
                text-align: center;
                width: 100%;
            }

            .navbar-nav .nav-item {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }

            .navbar-nav .nav-item a {
                font-size: 18px;
                color: #ffffff;
                text-decoration: none;
            }

            .right-nav {
                margin-top: 10px;
                margin-right: 10px;
            }

            .right-nav a {
                font-size: 24px;
            }

            .logo {
                height: 30px;
                /* adjust the height to your desired value */
                object-fit: contain;
                /* to ensure the logo is not distorted */
            }
        }
    </style>
</head>

<body data-instant-intensity="mousedown">


    <header class="bg-dark">
        <nav class="navbar navbar-expand-xl" id="navbar">
            <div class="d-flex align-items-center">
                <a class="h2 text-dark">
                    <img src="{{ url('backend/img/zoha4.svg') }}" alt="Logo" style="width: 70px; height: 70px;"><br>
                </a>
                <button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="navbar-toggler-icon fas fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-dark {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class=""></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark {{ Request::is('shop') ? 'active' : '' }}" href="{{ url('/shop') }}">
                            <i class=""></i> Shop
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-dark {{ Request::is('about-us') ? 'active' : '' }}"
                            href="{{ url('/about-us') }}">
                            <i class=""></i> About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class=""></i> Account
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ url('/account') }}">My Account</a></li>
                            <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('/change-password') }}">Change Password</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/register') }}">Register</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark {{ Request::is('contact-us') ? 'active' : '' }}"
                            href="{{ url('/contact-us') }}">
                            <i class=""></i> Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark {{ Request::is('reviews') ? 'active' : '' }}"
                            href="{{ url('/reviews') }}">
                            <i class=""></i> Reviews
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-nav py-0">
                <a href="{{ route('cart.index') }}" class="ml-3 d-flex pt-2">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge badge-light">{{ count(Session::get('cart', [])) }}</span>
                </a>
            </div>
        </nav>
    </header>
