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

        // Validar Request

        $products = new Product();

        $products->name = $request->name;
        $products->descripcion = $request->descripcion;
        $products->price = $request->price;
        $products->category = $request->category;
        $products->marca = $request->marca;

        $products->save();

        // Retornar con mensajes de session, 'success' es el key y 'Producto agregado correctamente' es el valor de ese mensaje de session
        return redirect()->route('productos.index'); //->with('success', 'Producto agregado correctamente');
        /*
            Para mostrar estos mensajes de session en la vista blade se puede mostrar asi:

            @session('success')
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endsession

            @session: es la directiva de las vistas blade para validar si existe una variable de session.

            "alert alert-primary": Estas son clases de BootStrap para mostrar alertas. 

            {{ session('success') }}: Esto incrusta el valor de la variable de session 'success' que se esta mandando desde el controlador
        */
    }

    public function edit(Product $products)
    {
        // Si no exite el producto retornar con un abort(404);

        /*

        Ejemplo: 

        Manera simplificada de hacerlo
        if(!$product = Product::find($product)) return abort(404);

        Manera larga
        $product = Product::find($product);

        if(!$product){
            return abort(404);
        }

        */

        return $products;
        // return view('products.edit', compact('products'));
    }

    // Siempre el metodo destroy va hasta el final
    public function destroy($products)
    {
        // Validar que exista el producto si no existe retornar con un abort(404);

        /*

        Ejemplo: 

        Manera simplificada de hacerlo
        if(!$product = Product::find($product)) return abort(404);

        Manera larga
        $product = Product::find($product);

        if(!$product){
            return abort(404);
        }

        */

        $products = Product::find($products);
        $products->delete();
        return redirect()->route('productos.index');
    }

    public function update(Request $request, $products)
    {

        // Primero validar que exista el producto si no existe retornar con un abort(404);

        /*

        Ejemplo: 

        Manera simplificada de hacerlo
        if(!$product = Product::find($product)) return abort(404);

        Manera larga
        $product = Product::find($product);

        if(!$product){
            return abort(404);
        }

        */

        // Despues validat el Request

        $products = Product::find($products);
        $products->name = $request->name;
        $products->descripcion = $request->descripcion;
        $products->price = $request->price;
        $products->category = $request->category;
        $products->marca = $request->marca;
        $products->save();
        return redirect()->route('productos.index');
    }
}
