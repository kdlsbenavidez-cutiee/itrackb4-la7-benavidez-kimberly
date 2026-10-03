@extends('layouts.app')
@section('title', 'Skincare Products')
@section('content')

    <h2>Skincare Products</h2>

    <p>
        <a href="{{ route('skincare.create') }}" class="btn btn-primary">
            Add Skincare Product
        </a>
    </p>

    <p>
        <strong>Category Filter:</strong>
        <a href="{{ route('skincare.index', ['category' => 'Cleanser', 'brand' => $brand]) }}">Cleanser</a>
        <a href="{{ route('skincare.index', ['category' => 'Toner', 'brand' => $brand]) }}">Toner</a>
        <a href="{{ route('skincare.index', ['category' => 'Serum', 'brand' => $brand]) }}">Serum</a>
        <a href="{{ route('skincare.index', ['category' => 'Sunscreen', 'brand' => $brand]) }}">Sunscreen</a>
        <a href="{{ route('skincare.index', ['category' => 'Moisturizer', 'brand' => $brand]) }}">Moisturizer</a>
        <a href="{{ route('skincare.index', ['category' => 'Treatment', 'brand' => $brand]) }}">Treatment</a>
    </p>

    <p>
        <strong>Brand Filter:</strong>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'Celeteque']) }}">Celeteque</a>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'Luxe Organix']) }}">Luxe Organix</a>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'The Ordinary']) }}">The Ordinary</a>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'Belo']) }}">Belo</a>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'QuickFX']) }}">QuickFX</a>
        <a href="{{ route('skincare.index', ['category' => $category, 'brand' => 'Oxecure']) }}">Oxecure</a>
    </p>

    <p>
        <a href="{{ route('skincare.index') }}">Clear All Filters</a>
    </p>

    <h3>Active Filters</h3>

    <p>Category: {{ $category }}</p>
    <p>Brand: {{ $brand }}</p>

    <table class="table table-striped table-bordered">
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
        </tr>

        @forelse ($skincare as $item)
            <tr class="@if($item['price'] >= 400) table-warning @endif">
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a href="{{ route('skincare.show', $item['id']) }}">
                        {{ $item['product'] }}
                    </a>
                </td>
                <td>{{ $item['brand'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>₱{{ $item['price'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">As of now, there is no record!</td>
            </tr>
        @endforelse
    </table>

@endsection