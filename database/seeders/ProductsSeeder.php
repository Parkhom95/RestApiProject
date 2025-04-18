<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{

    public function run(): void
    {
        User::factory(5)
        ->has(
            Product::factory(3)
        ->has(ProductImage::factory(rand(1, 4)), 'image')
        ->has(
            ProductReview::factory(rand(0, 10))
        ->for(User::factory()), 'reviews')
        )->create(['is_admin'=>true]);
    }
}
