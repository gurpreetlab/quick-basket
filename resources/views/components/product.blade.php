<div class="pro-card">
    <div class="pro-card-head">
        <a href="{{ route('product.show', $product['slug']) }}">
            <img class="pro-image" src="{{ asset($product['featured_image']['image_url']) }}" alt="product-image">
        </a>
        {{-- <FavoriteBtn :active="false"></FavoriteBtn> --}}
    </div>
    <a href="{{ route('product.show', $product['slug']) }}">
        <p class="pro-title poppins-medium">{{ $product['name'] }}</p>
    </a>

    <x-product.rating :ratings="rand(11, 999)" />

    <div class="d-flex align-items-start align-items-md-center justify-content-between">
        <button class="btn btn-sm btn-outline-dark h-100">Add to Cart</button>
        <p class="pro-price poppins-medium">₹{{ $product['discount_price'] }}</p>
    </div>
</div>
