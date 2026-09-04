<!DOCTYPE html>
<html>
<head>
    <title>Skincare Products</title>
</head>
<body>

    <h1>My Skincare Products</h1>

    <p>Created by: Kimberly Benavidez</p>

    <p>
        <a href="{{ route('skincare.featured') }}">
            View Featured Product
        </a>
    </p>

    <p>
        <a href="{{ route('skincare.filter') }}">
            View All Products
        </a>
    </p>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
        </tr>

        @foreach ($skincare as $item)
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
        @endforeach

    </table>

</body>
</html>