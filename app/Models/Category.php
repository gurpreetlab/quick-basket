<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_id'
    ];

    /**
     * Get the parent category of the current category, if any.
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get all child categories of the current category.
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Get all products under this category.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_product');
    }
}
