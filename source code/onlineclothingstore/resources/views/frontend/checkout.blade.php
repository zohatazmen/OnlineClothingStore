@extends('frontend.layouts.main')
@section('title', 'Checkout')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <h1 class="my-3">Checkout</h1>

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('checkout') }}">
                    @csrf
                    <div class="form-group">
                        <label for="customer_name">Name</label>
                        <input type="text" name="customer_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_email">Email</label>
                        <input type="email" name="customer_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Place Order</button>
                </form>




                @if (Session::has('order_success'))
                    <div class="alert alert-success mt-3">
                        {{ Session::get('order_success') }}
                    </div>
                @endif
            </div>
        </section>
    </main>
@endsection
