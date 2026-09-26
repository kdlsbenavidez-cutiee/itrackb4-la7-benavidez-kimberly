<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index(Request $request)
    {
        $skincare = $this->skincare();

        $category = $request->query('category', 'all');
        $brand = $request->query('brand', 'all');

        $filtered = [];

        foreach ($skincare as $item) {
            $categoryMatch = $category === 'all' || $item['category'] === $category;
            $brandMatch = $brand === 'all' || $item['brand'] === $brand;

            if ($categoryMatch && $brandMatch) {
                $filtered[] = $item;
            }
        }

        return view('skincare.index', [
            'skincare' => $filtered,
            'category' => $category,
            'brand' => $brand
        ]);
    }

    private function skincare()
    {
        return [
            1 => [
                'id' => 1,
                'product' => 'Gentle Facial Cleanser',
                'brand' => 'Celeteque',
                'category' => 'Cleanser',
                'price' => 299,
            ],
            2 => [
                'id' => 2,
                'product' => 'Hydrating Toner',
                'brand' => 'Luxe Organix',
                'category' => 'Toner',
                'price' => 199,
            ],
            3 => [
                'id' => 3,
                'product' => 'Niacinamide Serum',
                'brand' => 'The Ordinary',
                'category' => 'Serum',
                'price' => 550,
            ],
            4 => [
                'id' => 4,
                'product' => 'Sunscreen SPF 50',
                'brand' => 'Belo',
                'category' => 'Sunscreen',
                'price' => 399,
            ],
            5 => [
                'id' => 5,
                'product' => 'Moisturizing Cream',
                'brand' => 'QuickFX',
                'category' => 'Moisturizer',
                'price' => 349,
            ],
            6 => [
                'id' => 6,
                'product' => 'Acne Spot Gel',
                'brand' => 'Oxecure',
                'category' => 'Treatment',
                'price' => 299,
            ],
        ];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $skincare = $this->skincare();

        if (!isset($skincare[$id])) {
            abort(404);
        }

        $item = $skincare[$id];

        return view('skincare.show', [
            'item' => $item
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $skincare = $this->skincare();

        $item = $skincare[3];

        return view('skincare.featured', [
            'item' => $item
        ]);
    }
}