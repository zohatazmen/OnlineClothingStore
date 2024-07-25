@extends('frontend.layouts.main')
@section('title', 'Login')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container"></div>
        </section>

        <section class="section-10">
            <div class="container">
                <div class="login-form">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <h4 class="modal-title">Login Now</h4>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block btn-lg">Login</button>
                    </form>
                    <div class="text-center small">Don't have an account? <a href="{{ route('register') }}">Register Now</a>
                    </div>
                    <div class="text-center small"><a href="{{ route('password.update') }}">Forgot your password?</a></div>
                </div>
            </div>
        </section>
    </main>
@endsection
