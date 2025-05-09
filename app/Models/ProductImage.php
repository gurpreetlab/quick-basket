<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_url'
    ];

    /**
     * Get the product that this image is associated with.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the full URL for the image.
     *
     * @return string
     */
    public function getImageUrlAttribute($value)
    {
        return url(Storage::url($value));
    }
}
