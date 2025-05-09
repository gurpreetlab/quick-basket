@extends('layouts.app')

@section('content')
    <!-- banner -->
    <x-banner />

    <!-- Products For You -->
    <h4 class="mb-3 mt-5">Products For You</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach ($products as $product)
            <div class="col mb-4">
                <x-product :product="$product" />
            </div>
        @endforeach
    </div>

    <!-- Featured Product -->
    <div class="my-5">
        <x-product.featured :products="$featuredProducts" />
    </div>

    <!-- New Arrivals -->
    <h4 class="mb-3 mt-5">New Arrivals</h4>
    <div class="owl-carousel">
        @foreach ($newArrivals as $product)
            <div class="item">
                <x-product :product="$product" />
            </div>
        @endforeach
    </div>

    <!-- Ranked Products -->
    <div class="my-5">
        <x-product.featured :products="$rankedProducts" />
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
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endsection
