@extends('backend.layouts.app')

@section('title', 'Product Management')

@section('content')
    <section class="content">
        <div class="app-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">
                        </h6>
                        <a href="{{ url('/admin/product-add') }}" class="btn btn-dark">
                            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Product
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Discount Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th width="160px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->color }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->discount_price }}</td>
                                            <td>
                                                <img src="{{ asset('storage/frontend/images/' . $product->image) }}"
                                                    class="rounded-circle border border-info" width="50px" height="50px"
                                                    alt="Image Not Found">
                                            </td>
                                            <td>
                                                <span
                                                    class="badge {{ $product->status == 1 ? 'badge-success' : 'badge-danger' }} p-2">
                                                    {{ $product->status == 1 ? 'Active' : 'Disabled' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ url('/admin/product-edit/' . $product->id) }}"
                                                    class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form method="post" class="d-inline"
                                                    action="{{ url('/admin/product-delete/' . $product->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Delete"
                                                        onClick="return confirm('Are you sure you want to delete this record?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('customJs')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
