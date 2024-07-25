@extends('frontend.layouts.main')
@section('title', 'Forgot Password')
@section('main-container')
    <main>
        <section class="section-10">
            <div class="container">
                <div class="login-form">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h4 class="modal-title">Forgot Password</h4>
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
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block btn-lg">Send Reset Link</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
