@extends('frontend.layouts.main')
@section('title', 'Shop')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <div class="light-font">
                    <ol class="breadcrumb primary-color mb-0">
                        <li class="breadcrumb-item"><a class="white-text" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="section-6 pt-5">
            <div class="container">
                <div class="row">
                    <!-- Category Filter Section -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Filters</h5>
                                <form method="GET" action="{{ route('shop') }}">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="">All</option>
                                            <option value="men">Men</option>
                                            <option value="women">Women</option>
                                            <option value="kids">Kids</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <select name="size" id="size" class="form-control">
                                            <option value="">All</option>
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <select name="color" id="color" class="form-control">
                                            <option value="">All</option>
                                            <option value="red">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="white">White</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <select name="brand" id="brand" class="form-control">
                                            <option value="">All</option>
                                            <option value="brand1">Brand 1</option>
                                            <option value="brand2">Brand 2</option>
                                            <option value="brand3">Brand 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" name="min_price" id="min_price" class="form-control"
                                            placeholder="Min Price">
                                        <input type="number" name="max_price" id="max_price" class="form-control mt-2"
                                            placeholder="Max Price">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-dark">Apply Filters</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Product Listings Section -->
                    <div class="col-md-9" id="product-list">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4 mb-4 product-item" data-category="{{ $product->category }}">
                                    <div class="card product-card category-all">
                                        <div class="product-image position-relative">
                                            <a href="#" class="product-img">
                                                <img class="card-img-top"
                                                 src="{{ asset('storage/frontend/images/' . $product->image) }}"
                                                    alt="Product Image">
                                            </a>
                                            <a class="wishlist" href="#"><i class="far fa-heart"></i></a>
                                            <div class="product-action">
                                                <form action="{{ route('add.to.cart') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button class="btn btn-dark" type="submit">
                                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="card-body text-center mt-3">
                                            <a class="h6 link" href="#">{{ $product->name }}</a>
                                            <div class="price mt-2">
                                                <span class="h5"><strong>${{ $product->price }}</strong></span>
                                                @if ($product->discount_price)
                                                    <span
                                                        class="h6 text-underline"><del>${{ $product->discount_price }}</del></span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
