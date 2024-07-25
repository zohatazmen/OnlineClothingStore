@extends('backend.layouts.app')

@section('title', 'Add New Product')

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
                    <a href="{{ url('/admin/products') }}"><button class="btn btn-dark">Products List</button></a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/admin/product-add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="m-0">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Product Name"
                                name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Product Description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="category">Category</label>
                            <input class="form-control" id="category" type="text" placeholder="Enter Product Category"
                                name="category" value="{{ old('category') }}">
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="size">Size</label>
                            <input class="form-control" id="size" type="text" placeholder="Enter Product Size"
                                name="size" value="{{ old('size') }}">
                            @if ($errors->has('size'))
                                <span class="text-danger">{{ $errors->first('size') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="color">Color</label>
                            <input class="form-control" id="color" type="text" placeholder="Enter Product Color"
                                name="color" value="{{ old('color') }}">
                            @if ($errors->has('color'))
                                <span class="text-danger">{{ $errors->first('color') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="brand">Brand</label>
                            <input class="form-control" id="brand" type="text" placeholder="Enter Product Brand"
                                name="brand" value="{{ old('brand') }}">
                            @if ($errors->has('brand'))
                                <span class="text-danger">{{ $errors->first('brand') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" type="number" step="0.01"
                                placeholder="Enter Product Price" name="price" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="discount_price">Discount Price</label>
                            <input class="form-control" id="discount_price" type="number" step="0.01"
                                placeholder="Enter Product Discount Price" name="discount_price"
                                value="{{ old('discount_price') }}">
                            @if ($errors->has('discount_price'))
                                <span class="text-danger">{{ $errors->first('discount_price') }}</span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="image">Image</label>
                            <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg"
                                name="image" style="padding-bottom:38px">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-dark btn-block" type="submit" value="Add Product" name="submit">
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
