<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\Storage; // Add this line


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'productTitle' => 'required|string',
            'productPrice' => 'required|numeric',
            'productQuantity' => 'required|integer',
            'productDescription' => 'required|string',
            'formFileMultiple' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'productTitle.required' => 'The Product Name field is required.',
            'productPrice.required' => 'The Product Price field is required.',
            'productQuantity.required' => 'The Quantity field is required.',
            'productDescription.required' => 'The Description field is required.',
            'formFileMultiple.required' => 'The Product Image field is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();
        $productCount = Product::count();
        $product = new Product();
        $product->productName = $validatedData['productTitle'];
        $product->productPrice = $validatedData['productPrice'];
        $product->productQuantity = $validatedData['productQuantity'];
        $product->productDescription = $validatedData['productDescription'];
        $product->status = 1;
        $product->sortOrder = $productCount + 1;
        if ($request->hasFile('formFileMultiple')) {
            $image = $request->file('formFileMultiple');
            $imageName = uniqid() . '.' . $image->extension();
            $imagePath = public_path('admin/upload/product');

            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $product->productImage = 'admin/upload/product/' . $imageName;
        }
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $request->validate([
            'productTitle' => 'required|string|max:255',
            'productPrice' => 'required|numeric',
            'productQuantity' => 'required|integer',
            'formFileMultiple' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $product = Product::findOrFail($id);
        $product->productName = $request->productTitle;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;

        if ($request->hasFile('formFileMultiple')) {
            // Delete the old image if it exists
            if ($product->productImage) {
                Storage::disk('public')->delete($product->productImage);
            }

            // Move and save the new image
            $image = $request->file('formFileMultiple');
            $imageName = uniqid() . '.' . $image->extension();
            $imagePath = public_path('admin/upload/product');

            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);
            $product->productImage = 'admin/upload/product/' . $imageName;
        }

        $product->productDescription = $request->productDescription;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
