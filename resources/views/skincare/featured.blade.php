@extends('layouts.app')
@section('title', 'Featured: ' . $item['product'])
@section('content')

    <h2>{{ $item['product'] }}</h2>
    <p><strong>ID:</strong> {{ $item['id'] }}</p>
    <p><strong>Product:</strong> {{ $item['product'] }}</p>
    <p><strong>Brand:</strong> {{ $item['brand'] }}</p>
    <p><strong>Category:</strong> {{ $item['category'] }}</p>
    <p><strong>Price:</strong> ₱{{ $item['price'] }}</p>

    <a href="{{ route('skincare.index') }}">Back to Skincare List</a>

@endsection