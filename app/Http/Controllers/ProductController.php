<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Database\Factories\ProductsFactory;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource_;

class ProductController extends Controller
{
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
        $request->validate([
            'name' => 'required',
            'descripcion' => ['required', 'min:5', 'max:200'],
            'price' => 'required',
            'category' => 'required',
            'marca' => 'required',
        ]);
        Product::create($request->all());

        // Retornar con mensajes de session, 'success' es el key y 'Producto agregado correctamente' es el valor de ese mensaje de session
        return redirect()->route('productos.index')->with('success', 'Producto Agregado Correctamente.'); //->with('success', 'Producto agregado correctamente');

    }

    public function destroy($products)
    {
        if(!$products = Product::find($products)) return abort(404);
        $products->delete();
        return redirect()->route('productos.index');
    }

    public function update(Request $request, $products)
    {
        if(!$products = Product::find($products)) return abort(404);
        $request->validate([
            'name' => 'required',
            'descripcion' => ['required', 'min:5', 'max:200'],
            'price' => 'required',
            'category' => 'required',
            'marca' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto Modificado Correctamente.');;
    }

    public function edit($products)
    {
        if(!$products = Product::find($products)) return abort(404);
        return view('products.edit', compact('products'));
    }

}
