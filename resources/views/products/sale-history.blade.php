<!-- resources/views/dashboard/sale-history.blade.php -->

<h1>Sale Transaction History</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total Amount</th>
            <th>Sale Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>${{ $sale->total_amount }}</td>
                <td>{{ $sale->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
