<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index2()
    {
        $todaySales = $this->getSales(Carbon::today());
        $yesterdaySales = $this->getSales(Carbon::yesterday());
        $thisMonthSales = $this->getSales(Carbon::now()->startOfMonth());
        $lastMonthSales = $this->getSales(Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth());

        return view('products.index2', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }

    public function getSales($startDate, $endDate = null)
    {
        $query = Sale::whereBetween('created_at', [$startDate, $endDate ?: Carbon::now()]);
        return $query->sum('total_amount');
    }

    public function saleHistory()
    {
        $sales = Sale::with('product')->get();
        return view('products.sale-history', compact('sales'));
    }
}