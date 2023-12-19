<!-- resources/views/products/index.blade.php -->

<h1>Products</h1>

@foreach($products as $product)
    <p>{{ $product->name }} - Quantity: {{ $product->quantity }} - Price: ${{ $product->price }}</p>
    <form action="{{ route('products.sell', $product) }}" method="post">
        @csrf
        @method('PATCH')
        <button type="submit">Sell</button>
    </form>
    <a href="{{ route('products.edit-price', $product) }}">Edit Price</a>
@endforeach

<a href="{{ route('products.create') }}">Add New Product</a>
