@extends('frontend.layouts.main')
@section('title', 'Cart')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <h1 class="my-3">Your Cart</h1>

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Session::get('cart', []) as $productId => $product)
                            <tr>
                                <td>
                                    <img src="{{ asset('frontend/images/' . $product['image']) }}" width="50"
                                        alt="{{ $product['name'] }}">
                                    {{ $product['name'] }}
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('cart.update') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $productId }}">
                                        <input type="number" name="quantity" value="{{ $product['quantity'] }}"
                                            min="1">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>
                                </td>
                                <td>${{ $product['price'] * $product['quantity'] }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.remove') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $productId }}">
                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
            </div>
        </section>
    </main>
@endsection
