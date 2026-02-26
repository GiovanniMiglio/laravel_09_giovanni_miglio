<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class AnnuncioController extends Controller
{
    public function create()
    {
        return view('annunci.create');
    }

    public function store(ProductRequest $request)
    {
        $img = null;

        if ($request->hasFile('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $img,
        ]);

        return redirect()
            ->route('annunci.create')
            ->with('success', 'Annuncio creato con successo!');
    }

    public function index()
    {
        $products = Product::all();
        return view('annunci.index', ['products' => $products]);
    }
}