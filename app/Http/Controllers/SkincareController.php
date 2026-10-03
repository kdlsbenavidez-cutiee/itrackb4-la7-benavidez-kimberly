<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    private function skincare()
    {
        $path = storage_path('app/skincare.json');

        return json_decode(file_get_contents($path), true);
    }

    private function saveSkincare(array $skincare)
    {
        file_put_contents(
            storage_path('app/skincare.json'),
            json_encode($skincare, JSON_PRETTY_PRINT)
        );
    }

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

    public function create()
    {
        return view('skincare.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product' => 'required|max:255',
            'brand' => 'required|max:255',
            'category' => 'required|in:Cleanser,Toner,Serum,Sunscreen,Moisturizer,Treatment',
            'price' => 'required|numeric|min:1'
        ]);

        $skincare = $this->skincare();

        $id = 1;

        foreach ($skincare as $item) {
            if ($item['id'] >= $id) {
                $id = $item['id'] + 1;
            }
        }

        $data['id'] = $id;

        $skincare[$id] = $data;

        $this->saveSkincare($skincare);

        return redirect()->route('skincare.index')
            ->with('success', 'Skincare product added successfully.');
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