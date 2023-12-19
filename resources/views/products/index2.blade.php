<!-- resources/views/dashboard/index.blade.php -->

<h1>Dashboard</h1>

<div class="card">
    <h3>Today's Sales</h3>
    <p>${{ $todaySales }}</p>
</div>

<div class="card">
    <h3>Yesterday's Sales</h3>
    <p>${{ $yesterdaySales }}</p>
</div>

<div class="card">
    <h3>This Month's Sales</h3>
    <p>${{ $thisMonthSales }}</p>
</div>

<div class="card">
    <h3>Last Month's Sales</h3>
    <p>${{ $lastMonthSales }}</p>
</div>

<a href="{{ route('products.sale-history') }}">View Sale History</a>
