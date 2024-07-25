@extends('frontend.layouts.main')
@section('title', 'Reset Password')
@section('main-container')
<main>
    <section class="section-10">
        <div class="container">
            <div class="login-form">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
                
            </div>
        </div>
    </section>
</main>
@endsection
