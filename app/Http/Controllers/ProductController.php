<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function sell(Product $product)
    {
        $product->decrement('quantity');
        return redirect()->route('products.index')->with('success', 'Product sold successfully!');
    }

    public function editPrice(Product $product)
    {
        return view('products.edit-price', compact('product'));
    }

    public function updatePrice(Request $request, Product $product)
    {
        $data = $request->validate([
            'price' => 'required|numeric',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product price updated successfully!');
    }
}