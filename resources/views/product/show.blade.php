@extends('layouts.app')

@section('content')
    <!-- Product Details -->
    <div class="row gap-3 my-5">
        <div class="col-12 col-md-5">
            <!-- main slider -->
            <div class="pro-detail-card-img mb-3">
                <img src="{{ asset($product['images'][0]['image_url']) }}" id="main-pro-detail-image" alt="product-image"
                    class="w-100 pro-detail-image" />
            </div>

            <!-- thumb slider -->
            <div class="row row-cols-4">
                <div class="col">
                    @foreach ($product['images'] as $image)
                        <img src="{{ asset($image['image_url']) }}" alt="product-image" class="w-100 pro-detail-image" />
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <!-- product name -->
            <h2 class="mb-3">{{ $product['name'] }}</h2>

            <!-- rating -->
            <x-product.rating :ratings="rand(11, 999)" />

            <h3 class="pro-detail-price poppins-medium my-3">
                ₹{{ $product['discount_price'] }}
                <span><del>₹{{ $product['price'] }}</del></span>
            </h3>
            <p class="mb-3">{{ $product['description'] }}</p>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-dark poppins-light d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                        fill="#FFFFFF">
                        <path
                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                    </svg>
                    Add to Cart
                </button>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <h4 class="mb-3 mt-5">Related Products</h4>
    <div class="owl-carousel">
        @foreach ($relatedProducts as $product)
            <div class="item">
                <x-product :product="$product" />
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 4
                    },
                    576: {
                        items: 4
                    },
                    768: {
                        items: 4
                    },
                    992: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endsection
