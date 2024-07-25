@extends('frontend.layouts.main')
@section('title', 'My Account')
@section('main-container')
    <main>
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h2 class="h5 mb-0 pt-2 pb-2">Personal Information</h2>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('account.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ $user->phone }}"
                                class="form-control">
                        </div>

                        <button type="submit" class="btn btn-dark">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
