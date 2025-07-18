<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return Product::where('store_id', $request->user()->store_id)->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer'
        ]);

        $validated['store_id'] = $request->user()->store_id;

        return Product::create($validated);
    }
}
