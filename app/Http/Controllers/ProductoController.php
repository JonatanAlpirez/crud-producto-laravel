<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['productos'] = Producto::paginate(10);
        return view('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'name'=>'required|string|max:100',
            'price'=>'required|string|max:100',
            'status'=>'required|string|max:100',
            'stock'=>'required|string|max:100'

        ];

        
        $mensaje=['required'=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);
        $datosProducto =  request() -> except('_token');
        Producto::insert($datosProducto);
        
        return redirect('producto')->with('mensaje', 'Producto agregado');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto =  request() -> except(['_token', '_method']);
        Producto::where('id','=',$id)->update($datosProducto);

        return redirect('producto')-> with('mensaje', 'Producto actualizado');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('producto')-> with('mensaje', 'Producto eliminado');
    }
}
