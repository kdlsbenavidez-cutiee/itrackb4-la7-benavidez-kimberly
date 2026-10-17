<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index(Request $request)
    {
        $skincare = Skincare::all();
        $category = $request->query('category');
        $brand = $request->query('brand');

        return view('skincare.index', compact('skincare', 'category', 'brand'));
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

        Skincare::create($data);

        return redirect()->route('skincare.index')
            ->with('success', 'Skincare product added successfully.');
    }

    public function show(string $id)
    {
        $skincare = Skincare::findOrFail($id);

         return view('skincare.show', ['item' => $skincare]);

    }

    public function featured()
    {
        $item = Skincare::findOrFail(3);

        return view('skincare.featured', ['item' => $item]);
    }
}