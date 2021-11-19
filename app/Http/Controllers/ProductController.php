<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'products' => Product::all(),
            'no' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'link' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image',
        ]);

        $file = $request->file('image');
        $folder_tujuan = 'img/produk';
        $filename = time() . '_' . $file->getClientOriginalName();
        $validated['image'] = $file->move($folder_tujuan, $filename);

        Product::create($validated);
        return redirect('/dashboard/product')->with('success', 'Berhasil menambahkan Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'image' => 'image',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $folder_tujuan = 'img/produk';
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->move($folder_tujuan, $filename);
            File::delete($product->image);
            $product->update([
                'image' => $filepath
            ]);
        }
        $product->update([
            'name' => $validated['name'],
            'link' => $validated['link'],
            'harga' => $validated['harga'],
            'deskripsi' => $validated['deskripsi'],
        ]);
        return redirect('/dashboard/product')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        File::delete($product->image);
        $product->delete();
        return redirect('/dashboard/product')->with('success', 'Product berhasil dihapus!');
    }
}
