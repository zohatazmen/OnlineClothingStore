@extends('backend.layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="app-body">
        <div class="container-fluid">
            <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ url('/admin/products') }}"><button class="btn btn-dark">Products List</button></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="m-0">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Product Name"
                                name="name" value="{{ old('name', $product->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Product Description">{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="category">Category</label>
                            <input class="form-control" id="category" type="text" placeholder="Enter Product Category"
                                name="category" value="{{ old('category', $product->category) }}">
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="size">Size</label>
                            <input class="form-control" id="size" type="text" placeholder="Enter Product Size"
                                name="size" value="{{ old('size', $product->size) }}">
                            @error('size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="color">Color</label>
                            <input class="form-control" id="color" type="text" placeholder="Enter Product Color"
                                name="color" value="{{ old('color', $product->color) }}">
                            @error('color')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="brand">Brand</label>
                            <input class="form-control" id="brand" type="text" placeholder="Enter Product Brand"
                                name="brand" value="{{ old('brand', $product->brand) }}">
                            @error('brand')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" type="number" step="0.01"
                                placeholder="Enter Product Price" name="price"
                                value="{{ old('price', $product->price) }}">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="discount_price">Discount Price</label>
                            <input class="form-control" id="discount_price" type="number" step="0.01"
                                placeholder="Enter Product Discount Price" name="discount_price"
                                value="{{ old('discount_price', $product->discount_price) }}">
                            @error('discount_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="m-0">
                            <label for="image">Image</label>
                            <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg"
                                name="image" style="padding-bottom:38px">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-dark btn-block" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
