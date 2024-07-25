@extends('frontend.layouts.main')
@section('title', 'Edit Account')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <!-- Breadcrumb code can be added if needed -->
            </div>
        </section>

        <section class="section-13">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5 mb-0 pt-2 pb-2">Edit Account</h2>
                            </div>
                            <div class="card-body p-4">
                                <form action="{{ route('account.update') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $user->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ $user->email }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                            value="{{ $user->phone }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
