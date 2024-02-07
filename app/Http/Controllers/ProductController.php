<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));

    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $datas = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($datas);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $datas = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable'
        ]);

        $product->update($datas);

        return redirect(route('product.index'))->with('success', 'product updated succesfully');
    }

    public function destroy(Product $product) {
        $product->delete();

        return redirect(route('product.index'))->with('success', 'product deleted succesfully');

    }
}
