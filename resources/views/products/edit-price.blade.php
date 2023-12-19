<!-- resources/views/products/edit-price.blade.php -->

<h1>Edit Price for {{ $product->name }}</h1>

<form action="{{ route('products.update-price', $product) }}" method="post">
    @csrf
    @method('PATCH')
    <label for="price">New Price:</label>
    <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>

    <button type="submit">Update Price</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>
