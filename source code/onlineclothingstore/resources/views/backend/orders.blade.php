@extends('backend.layouts.app')

@section('title', 'Order Management')

@section('main-container')
@section('content')
    <section class="content">
        <div class="app-body">
            <main>
                <section class="section-5 pt-3 pb-3 mb-3 bg-white">
                    <div class="container">
                        <h1 class="my-3">Orders</h1>

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <a href="{{ route('admin.orders.create') }}" class="btn btn-dark">Add Order</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Total Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->customer_name }}</td>
                                        <td>{{ $order->customer_email }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>${{ $order->total_price }}</td>
                                        <td>
                                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="text-warning"
                                                title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="POST" action="{{ route('admin.orders.destroy', $order->id) }}"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" title="Delete"
                                                    style="border: none; background: none; padding: 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </section>
            </main>
        </div>
    </section>
@endsection
@endsection
