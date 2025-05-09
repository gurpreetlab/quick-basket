<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'stock_status',
        'stock_quantity'
    ];

    /**
     * Get the category that the product belongs to.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    /**
     * Get all images associated with the product.
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * Get the first (featured) image of the product.
     */
    public function featured_image()
    {
        return $this->hasOne(ProductImage::class)->oldestOfMany();
    }

    /**
     * Accessor to calculate the effective price of the product.
     */
    public function getEffectivePriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }

    /**
     * Generate a unique SKU for the product.
     *
     * @return string
     */
    public static function generateSku()
    {
        // Unique identifier with timestamp for uniqueness
        $timestamp = now()->timestamp;  // Get the current timestamp
        $randomString = strtoupper(Str::random(6));  // Generate a random 6-character string
        $prefix = 'SKU';  // Prefix for all SKUs

        // Combine prefix, timestamp, and random string
        return strtoupper("{$prefix}-{$timestamp}-{$randomString}");
    }

    // Generate slug from product name before saving
    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = $product->generateSlug($product->name);
        });

        static::updating(function ($product) {
            if ($product->isDirty('name')) {
                $product->slug = $product->generateSlug($product->name);
            }
        });
    }

    /**
     * Generate a URL-friendly slug from the product name.
     *
     * @param string $name
     * @return string
     */
    public function generateSlug($name)
    {
        $slug = Str::slug($name);  // Generate the initial slug from the product name

        // Check if the slug already exists in the database
        $existingSlugCount = Product::where('slug', $slug)->count();

        // If the slug already exists, keep incrementing until it's unique
        $counter = 1;
        $originalSlug = $slug; // Keep the original slug to append numbers if needed
        while ($existingSlugCount > 0) {
            $slug = $originalSlug . '-' . $counter;  // Append the counter
            $existingSlugCount = Product::where('slug', $slug)->count(); // Check again for uniqueness
            $counter++; // Increment counter
        }

        return $slug;
    }
}
