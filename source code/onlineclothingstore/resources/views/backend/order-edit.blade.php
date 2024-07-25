@extends('backend.layouts.app')

@section('title', 'Edit Order')

@section('main-container')
@section('content')
    <section class="content">
        <div class="app-body">
            <main>
                <section class="section-5 pt-3 pb-3 mb-3 bg-white">
                    <div class="container">
                        <h1 class="my-3">Edit Order</h1>

                        <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="customer_name">Name</label>
                                <input type="text" name="customer_name" class="form-control"
                                    value="{{ $order->customer_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_email">Email</label>
                                <input type="email" name="customer_email" class="form-control"
                                    value="{{ $order->customer_email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $order->address }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cart">Cart</label>
                                <textarea name="cart" class="form-control" required>{{ $order->cart }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total Price</label>
                                <input type="number" name="total_price" class="form-control"
                                    value="{{ $order->total_price }}" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Update Order</button>
                        </form>
                    </div>
                </section>
            </main>
        </div>
    </section>
@endsection
@endsection
