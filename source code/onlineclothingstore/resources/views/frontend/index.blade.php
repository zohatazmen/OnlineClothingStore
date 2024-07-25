@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')


    <main>
        <section class="section-1">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ url('frontend/images/kidsbanner.svg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ url('frontend/images/kidsbanner.svg') }}" />
                            <img src="{{ url('frontend/images/kidsbanner.svg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                                <p class="mx-md-5 px-5">Bright, playful, and comfy, our kids' clothes inspire imagination
                                    and adventure. Designed for fun and freedom, each outfit is perfect for every little
                                    explorer!</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ url('frontend/images/girlbanner.svg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ url('frontend/images/girlbanner.svg') }}" />
                            <img src="{{ url('frontend/images/girlbanner.svg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                                <p class="mx-md-5 px-5">Our girls' clothes combine whimsy and style, celebrating creativity
                                    and individuality. With vibrant colors and playful designs, each piece is perfect for
                                    every little princess!</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{ url('frontend/images/carousel-3-m.jpg') }}" />
                            <source media="(min-width: 800px)" srcset="{{ url('frontend/images/carousel-3.jpg') }}" />
                            <img src="{{ url('frontend/images/carousel-2.jpg') }}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on Branded Clothes</h1>
                                <p class="mx-md-5 px-5">Don't miss out on our exciting sale! Enjoy fantastic discounts on
                                    stylish kids' clothing, perfect for adding fun and flair to your little one's wardrobe!
                                </p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="container">
                <div class="section-title">
                    <h2>Categories</h2>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-3">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{ url('frontend/images/kids.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2>Kids</h2>
                                    <p>100 Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{ url('frontend/images/women.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2>Womens</h2>
                                    <p>100 Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{ url('frontend/images/men.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2>Mens</h2>
                                    <p>100 Products</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
                <div class="row pb-3">
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_1.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 1</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_4.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 4</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_8.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 8</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_10.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 10</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_30.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 30</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_25.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 25</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_22.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 22</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_17.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 17</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Produsts</h2>
                </div>
                <div class="row pb-3">
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_1.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 1</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_4.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 4</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_8.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 8</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_10.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 10</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_30.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 30</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_25.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 25</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_22.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 22</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top"
                                        src="frontend/images/product_17.png" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>


                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product">Product 17</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>$100</strong></span>
                                    <span class="h6 text-underline"><del>$120</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
