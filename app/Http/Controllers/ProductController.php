<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
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
        $categorys=Category::all();
        return view('Products',compact('products','categorys'));
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
    public function store(ProductRequest $request)
    {

         $data = $request->validated();

    if ($request->hasFile('photo')) {
        $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move(public_path('image'), $filename);
        $data['photo'] = $filename;
    }

    Product::create($data);
        auth()->user()->increment('solde',5);
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
        $this->authorize('update',$product);
        return view('Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate=$request->validated();

        $product=Product::findOrFail($id);
        $this->authorize('update',$product);
        $product->update($validate);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $this->authorize('delete',$product);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function AcheteProduct($id){
        $product=Product::findOrFail($id);
        if($product->price > auth()->user()->solde){
        return redirect()->route('products.index')->with('You cant buy this product');
        }
        auth()->user()->increment('solde',$product->price);
        $product->decrement('quantite',1);
            return redirect()->route('products.index');
    }
}
