<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware(['agent', 'admin'], ['except' => ['index', 'show', 'create', 'store']]);
    }
 
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type'        => 'required',
            'tec_title'   => 'required|min:2',
            'size'        => 'required',
            'colour'      => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'price'       => 'required'
        ]);

        $product = new Product;
        $product->type        = $request->input('type');
        $product->title       = $request->input('title');
        $product->tec_title   = $request->input('tec_title');
        $product->size        = $request->input('size');
        $product->colour      = $request->input('colour');
        $product->supplier    = $request->input('supplier');
        $product->mpn         = $request->input('mpn');
        $product->cover_image = $request->input('cover_image');
        $product->description = $request->input('description');
        $product->barcode     = $request->input('barcode');
        $product->qoh         = $request->input('qoh');
        $product->trade       = $request->input('trade');
        $product->price       = $request->input('price');
        $product->slug        = $request->input('slug');
        $product->save();

        return redirect('/admin');

    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
