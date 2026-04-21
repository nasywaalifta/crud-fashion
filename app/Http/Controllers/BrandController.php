<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBrand = Brand::all();
        return view('brand.index', compact('allBrand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validatedData = $request->validate([
            'nama_brand' => 'required|max:100',
            'asal_negara' => 'required|max:100',
        ]);

        // simpan data
        Brand::create($validatedData);

        // redirect ke index brand
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        // buat validasi
        $validatedData = $request->validate([
            'nama_brand' => 'required|max:100',
            'asal_negara' => 'required|max:100',
        ]);

        // update data
        $brand->update($validatedData);

        // redirect ke index brand
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        // redirect ke index brand
        return redirect()->route('brand.index');
    }
}