@extends('frontend.layouts.main')
@section('title', 'Register')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container"></div>
        </section>

        <section class="section-10">
            <div class="container">
                <div class="login-form">
                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf
                        <h4 class="modal-title">Register Now</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
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
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone"
                                value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="password"
                                name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password"
                                id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block btn-lg">Register</button>
                    </form>
                    <div class="text-center small">Already have an account? <a href="{{ route('login') }}">Login Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
