@extends('layouts.app')
@section('title', 'Skincare Products')
@section('content')

    <p>
        <a href="{{route('skincare.featured')}}">View Featured Product</a>
        |
        <a href="{{route('skincare.filter')}}">View All Products</a>
    </p>

    <table class="table table-striped table-bordered"
        <tr>
            <th>#</th>
            <th>Products</th>
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
                <td colspan="5">As of now , there is no record!.</td>
            </tr>
        @endforelse
    </table>

@endsection