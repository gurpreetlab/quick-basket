<div class="row">
    @foreach ($products as $product)
        <div class="col-12 col-md-6 mb-3">
            <div class="d-flex align-items-center gap-4 featured-product">
                <div class="col-6">
                    <a href="{{ route('product.show', $product['slug']) }}">
                        <h4 class="pro-title poppins-medium">
                            {{ $product['name'] }}
                        </h4>
                    </a>
                    <div class="my-2">
                        <x-product.rating :ratings="rand(11, 999)" />
                    </div>
                    <button class="btn btn-sm btn-outline-dark">Add to Cart</button>
                </div>
                <div class="col-6">
                    <div>
                        <a href="{{ route('product.show', $product['slug']) }}">
                            <img src="{{ asset($product['featured_image']['image_url']) }}" class="pro-img"
                                alt="product-image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
