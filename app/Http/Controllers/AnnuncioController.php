<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AnnuncioController extends Controller
{
    public function create()
    {
        return view('annunci.create');
    }
public function store(Request $request)
{
    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);

    return redirect()->route('annunci.create')
                     ->with('success', 'Annuncio creato con successo!');
}
        public function index()
        {
            $products = Product::all();
            return view('annunci.index', ['products' => $products]);
        }
}