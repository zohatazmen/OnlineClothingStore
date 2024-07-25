<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zoha Clothing Store :: Administrative Panel</title>
    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/zohaalogo.svg') }}" />
        <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/custom.css') }}">
    <style>
        .custom-bg-dark {
            background-color: #1a1a1a;
            color: #ffffff;
        }
    </style>

</head>

<body class="hold-transition login-page custom-bg-dark">
    <div class="login-box">
        @include('backend.message')
        <div class="card card-outline card-dark">
            <div class="card-header text-center">
                <a class="h2 text-dark">
                    <img src="{{ url('backend/img/zoha4.svg') }}" alt="Logo"
                        style="width: 200px; height: 200px;"><br>
                    Zoha Clothing Admin
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-dark">Sign in to start your session</p>
                <form action="{{ route('admin.authenticate') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" value="{{ old('email') }}" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password"  name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/adminlte.min.js') }}"></script>
    <script src="{{ url('js/demo.js') }}"></script>
</body>

</html>
