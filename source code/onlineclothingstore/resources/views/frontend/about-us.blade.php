@extends('frontend.layouts.main')
@section('title', 'About Us')
@section('main-container')
    <main>
        <section class="section-5 pt-3 pb-3 mb-3 bg-white">
            <div class="container">
                <div class="light-font">
                    <ol class="breadcrumb primary-color mb-0">
                        <li class="breadcrumb-item"><a class="white-text" href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="section-10">
            <div class="container">
                <h1 class="my-3">About Us</h1>
                <p>Welcome to **Zoha's Clothing**, where fashion meets passion! We are dedicated to providing stylish,
                    high-quality clothing that empowers individuals to express their unique personalities.</p>
                <picture>
                    <source media="(max-width: 799px)" srcset="{{ url('frontend/images/kidsbanner.svg') }}" />
                    <source media="(min-width: 800px)" srcset="{{ url('frontend/images/kidsbanner.svg') }}" />
                    <img src="{{ url('frontend/images/kidsbanner.svg') }}" alt="" />
                </picture>

                <h2 class="mt-4">Our Mission</h2>
                <p>At Zoha's Clothing, our mission is to offer a diverse range of fashionable apparel that caters to all
                    tastes and sizes. We believe that everyone deserves to feel confident and beautiful in what they wear.
                </p>
                

                <h2 class="mt-4">Our Story</h2>
                <p>Founded by fashion enthusiasts, Zoha's Clothing started with a simple idea: to create a platform that
                    combines quality, affordability, and style. Our journey began with a small collection of curated pieces,
                    and we have since grown into a beloved brand, trusted by customers for our commitment to excellence.</p>
                    <picture>
                        <source media="(max-width: 799px)" srcset="{{ url('frontend/images/zohabanner.svg') }}" />
                        <source media="(min-width: 800px)" srcset="{{ url('frontend/images/zohabanner.svg') }}" />
                        <img src="{{ url('frontend/images/zohabanner.svg') }}" alt="" />
                    </picture>
                <h2 class="mt-4">What We Offer</h2>
                <ul>
                    <li><strong>Trendy Collections:</strong> From casual wear to elegant outfits, our collections are
                        thoughtfully designed to keep you on-trend.</li>
                    <li><strong>Quality Materials:</strong> We prioritize quality in every piece we offer, ensuring comfort
                        and durability.</li>
                    <li><strong>Customer-Centric Approach:</strong> Your satisfaction is our priority. Our dedicated
                        customer service team is always here to assist you.</li>
                </ul>

                <h2 class="mt-4">Join Our Community</h2>
                <p>We invite you to explore our latest collections and join our vibrant community of fashion lovers. Thank
                    you for choosing Zoha's Clothing. We can’t wait to be a part of your fashion journey!</p>
            </div>
        </section>
    </main>
@endsection
