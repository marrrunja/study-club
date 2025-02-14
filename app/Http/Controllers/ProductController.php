<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            "code" => $request->code,
            "name" => $request->nama,
            "description" => $request->deskripsi,
            "qty" => $request->kuantitas,
            "price" => $request->harga
        ]);
        return redirect()->route('products.index')->with('status', 'berhasil menambahkan produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('product.edit',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        Product::find($id)->update([
            "code" => $request->code,
            "name" => $request->nama,
            "description" => $request->deskripsi,
            "qty" => $request->kuantitas,
            "price" => $request->harga
        ]);
        return redirect()->route('products.index')->with('status','produk dengan id ' . $id . ' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('status', 'data dengan id ' . $id . ' berhasil dihapus');
    }
}
