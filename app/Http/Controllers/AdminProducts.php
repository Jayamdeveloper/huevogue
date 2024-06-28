<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Product;

class AdminProducts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("admin-products.list-products", compact("products"));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
    public function create(Request $request)
    {
        $product = null;

        if ($request->has('id')) {
            $product = Product::find($request->id);
        }
        return view("admin-products.add-edit-product", compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateStatus(Request $request)
    {

        $product = Product::find($request->productId);
        if ($product) {
            $product->status = $request->status;
            $product->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Product not found.']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
