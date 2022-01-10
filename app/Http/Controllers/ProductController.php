<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        //$furbies = Product::all();
        $furbies = Product::orderBy('id')->get();
        return view('products.index', ['furbies' => $furbies]);
    }
    public function show($id) {
        $furby = Product::findOrFail($id);
        //$furby = Product::where('id', $id);
        return view('products.show', ['furby' => $furby]);
    }
}
