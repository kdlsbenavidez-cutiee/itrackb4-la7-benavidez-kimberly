<?php

namespace Database\Seeders;

use App\Models\Skincare;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Skincare::create([
            'product' => 'Gentle Facial Cleanser',
            'brand' => 'Celeteque',
            'category' => 'Cleanser',
            'price' => 299 ]);    
            
            $this->call([SkincareSeeder::class]);
    }
}
