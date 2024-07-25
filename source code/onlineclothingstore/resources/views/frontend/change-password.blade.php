@extends('frontend.layouts.main')
@section('title', 'Change Password')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container"></div>
        </section>

        <section class="section-10">
            <div class="container">
                <div class="login-form">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h4 class="modal-title">Change Password</h4>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" id="old_password"
                                name="old_password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" id="new_password"
                                name="new_password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm New Password"
                                id="new_password_confirmation" name="new_password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block btn-lg">Change Password</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
