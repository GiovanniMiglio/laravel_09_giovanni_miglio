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
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        
        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->save();
        return redirect()->route('annunci.create')->with('success', 'Annuncio creato con successo!');
    }
        public function index()
        {
            $products = Product::all();
            return view('annunci.index', ['products' => $products]);
        }
}