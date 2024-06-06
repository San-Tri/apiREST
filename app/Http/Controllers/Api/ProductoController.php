<?php

// app/Http/Controllers/Api/ProductoController.php
namespace App\Http\Controllers\Api;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoResource;

class ProductoController extends Controller
{
    public function index()
    {
        return ProductoResource::collection(Producto::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto = Producto::create($request->all());

        return new ProductoResource($producto);
    }

    public function show(Producto $producto)
    {
        return new ProductoResource($producto);
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto->update($request->all());

        return new ProductoResource($producto);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}


