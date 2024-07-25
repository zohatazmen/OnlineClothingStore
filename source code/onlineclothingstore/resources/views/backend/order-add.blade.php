@extends('backend.layouts.app')

@section('title', 'Add New Order')

@section('content')
    <div class="app-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block p-4 border-left-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="container-fluid">
            <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ route('admin.orders.index') }}"><button class="btn btn-dark">Orders List</button></a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.orders.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="m-0">
                            <label for="customer_name">Customer Name</label>
                            <input class="form-control" id="customer_name" type="text" placeholder="Enter Customer Name"
                                name="customer_name" value="{{ old('customer_name') }}">
                            @if ($errors->has('customer_name'))
                                <span class="text-danger">{{ $errors->first('customer_name') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="customer_email">Customer Email</label>
                            <input class="form-control" id="customer_email" type="email"
                                placeholder="Enter Customer Email" name="customer_email"
                                value="{{ old('customer_email') }}">
                            @if ($errors->has('customer_email'))
                                <span class="text-danger">{{ $errors->first('customer_email') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" placeholder="Enter Address"
                                name="address" value="{{ old('address') }}">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="cart">Cart (JSON format)</label>
                            <textarea class="form-control" id="cart" name="cart" placeholder="Enter Cart">{{ old('cart') }}</textarea>
                            @if ($errors->has('cart'))
                                <span class="text-danger">{{ $errors->first('cart') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="total_price">Total Price</label>
                            <input class="form-control" id="total_price" type="number" step="0.01"
                                placeholder="Enter Total Price" name="total_price" value="{{ old('total_price') }}">
                            @if ($errors->has('total_price'))
                                <span class="text-danger">{{ $errors->first('total_price') }}</span>
                            @endif
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-dark btn-block" type="submit" value="Add Order" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
@endsection
