<!-- resources/views/products/create.blade.php -->

<h1>Add New Product</h1>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>

    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required>

    <button type="submit">Add Product</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>
