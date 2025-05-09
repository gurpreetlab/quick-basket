<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Electronics' => [
                'Mobile Phones',
                'Laptops & Computers',
                'Cameras & Photography',
                'Accessories',
            ],
            'Fashion' => [
                'Men’s Clothing',
                'Women’s Clothing',
                'Shoes',
                'Bags & Accessories',
            ],
            'Home & Kitchen' => [
                'Furniture',
                'Kitchen Appliances',
                'Home Decor',
                'Cleaning Supplies',
            ],
            'Beauty & Personal Care' => [
                'Skincare',
                'Makeup',
                'Hair Care',
                'Fragrances',
            ],
            'Health & Wellness' => [
                'Supplements',
                'Fitness Equipment',
                'Medical Supplies',
            ],
            'Baby & Kids' => [
                'Baby Clothing',
                'Toys',
                'Diapers & Wipes',
                'Baby Gear',
            ],
            'Sports & Outdoors' => [
                'Sportswear',
                'Outdoor Gear',
                'Fitness Accessories',
            ],
            'Automotive' => [
                'Car Accessories',
                'Motorcycle Parts',
                'Tools & Equipment',
            ],
            'Books & Stationery' => [
                'Fiction & Non-Fiction',
                'Educational',
                'Office Supplies',
            ],
            'Grocery & Food' => [
                'Fresh Produce',
                'Snacks & Beverages',
                'Organic & Health Food',
            ],
            'Pet Supplies' => [
                'Pet Food',
                'Toys',
                'Grooming',
            ],
            'Jewelry & Watches' => [
                'Necklaces',
                'Rings',
                'Watches',
                'Bracelets',
            ],
        ];

        foreach ($categories as $parent => $subcategories) {
            $parentCategory = Category::create([
                'name' => $parent,
                'parent_id' => null,
            ]);

            foreach ($subcategories as $subcategory) {
                Category::create([
                    'name' => $subcategory,
                    'parent_id' => $parentCategory->id,
                ]);
            }
        }
    }
}
