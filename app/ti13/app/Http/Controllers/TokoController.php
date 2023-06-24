<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view ('toko/index');
    }

    public function detail()
    {
        return view ('toko/detail');
    }

    public function about()
    {
        return view ('toko/about');
    }

    public function admin()
    {
        $products = Product::all();
        return view ('toko/admin', compact('products'));
    }

    public function create()
    {
        return view ('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }

    public function edit(product $product)
    {
        return view ('toko/edit', compact('product'));
    }

    public function update(Request $request, product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product update successfully');
    
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'Product deleted successfully');
    
    }

    public function customers()
    {
        $customers = Customer::all();
        return view ('toko/customers', compact('customers'));
    }

    public function create2()
    {
        return view ('toko/create2');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('pelanggan.customers')->with('success', 'Customer created successfully');
    }

    

}
