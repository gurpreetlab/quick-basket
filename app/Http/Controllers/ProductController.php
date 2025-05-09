<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show product details
    public function show($slug)
    {
        $product = Product::with('images')->where('slug', $slug)->firstOrFail();
        // $relatedProducts = Product::with('featured_image')->where('category_id', $product->category_id)->inRandomOrder()->take(4)->get();
        $relatedProducts = Product::with('featured_image')->inRandomOrder()->take(10)->get();


        return view('product.show', compact('product', 'relatedProducts'));
    }
}
