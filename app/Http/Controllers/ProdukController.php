<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allProduk = Produk::all();
        return view('produk.index', compact('allProduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allKategori = Kategori::all();
        $allBrand = Brand::all();

        return view('produk.create', compact('allKategori', 'allBrand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:100',
            'kategori_id' => 'required',
            'brand_id' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        Produk::create($validatedData);

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $allKategori = Kategori::all();
        $allBrand = Brand::all();

        return view('produk.edit', compact('produk', 'allKategori', 'allBrand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:100',
            'kategori_id' => 'required',
            'brand_id' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        $produk->update($validatedData);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index');
    }
}