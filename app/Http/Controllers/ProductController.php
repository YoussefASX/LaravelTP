<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }
    public function GetById($id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
    public function Create(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
    public function Delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted']);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
