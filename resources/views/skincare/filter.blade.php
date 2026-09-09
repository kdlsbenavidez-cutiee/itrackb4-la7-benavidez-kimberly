@extends('layouts.app')
@section('title', 'Filter: ' . $activeFilter)
@section('content')

    <h2>Active Filter: {{ $activeFilter }}</h2>

    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
        </tr>

        @forelse ($skincare as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
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
                <td colspan="5">No skincare products found for this filter.</td>
            </tr>
        @endforelse
    </table>

    <br>
    <a href="{{ route('skincare.index') }}">Back to Skincare List</a>

@endsection