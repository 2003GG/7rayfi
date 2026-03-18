<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('Product'.compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'order_id'=>'required|exists:orders,id',
        ]);

        $product=Product::create($validate);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product=Product::findOrFail($id);
        return view('Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'order_id'=>'required|exists:orders,id',
        ]);

        $product=Product::findOrFail($id);
        $product->update($validate);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
