<?php

namespace Database\Seeders;

use App\Models\Skincare;
use Illuminate\Database\Seeder;

class SkincareSeeder extends Seeder
{
    public function run(): void
    {
        Skincare::create([
            'product' => 'Gentle Facial Cleanser',
            'brand' => 'Celeteque',
            'category' => 'Cleanser',
            'price' => 299,
        ]);

        Skincare::create([
            'product' => 'Hydrating Toner',
            'brand' => 'Belo',
            'category' => 'Toner',
            'price' => 350,
        ]);

        Skincare::create([
            'product' => 'Niacinamide 10% + Zinc 1%',
            'brand' => 'The Ordinary',
            'category' => 'Serum',
            'price' => 650,
        ]);

        Skincare::create([
            'product' => 'Sunscreen SPF 50',
            'brand' => 'Luxe Organix',
            'category' => 'Sunscreen',
            'price' => 420,
        ]);
    }
}