<!DOCTYPE html>
<html>
<head>
    <title>Skincare Product Details</title>
</head>
<body>

    <h1>{{ $item['product'] }}</h1>

    <p><strong>ID:</strong> {{ $item['id'] }}</p>
    <p><strong>Product:</strong> {{ $item['product'] }}</p>
    <p><strong>Brand:</strong> {{ $item['brand'] }}</p>
    <p><strong>Category:</strong> {{ $item['category'] }}</p>
    <p><strong>Price:</strong> ₱{{ $item['price'] }}</p>

    <p>Created by: Kimberly Benavidez</p>

    <a href="{{ route('skincare.index') }}">Back to Skincare List</a>

</body>
</html>