<!DOCTYPE html>
<html>
<head>
    <title>Skincare Filter</title>
</head>
<body>

    <h1>Skincare Products</h1>

    <h2>Active Filter: {{ $activeFilter }}</h2>

    @if (count($skincare) > 0)

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

    @else

        <p>No skincare products found for this filter.</p>

    @endif

    <br>

    <a href="{{ route('skincare.index') }}">
        Back to Skincare List
    </a>

</body>
</html>