<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$catalogo = [
        //    ['producto' => 'Harina de trigo'],
        //    ['producto' => 'Arroz parvorizado'],
        //    ['producto' => 'Chocolate en polvo'],
        //    ['producto' => 'Café liofilizado'],
        //    ['producto' => 'Queso campesino'],
        //];
        //$catalogo = \DB::table('productos')->get();
        //$catalogo =Producto::get();
        //$catalogo=Producto::orderBy('created_at', 'DESC')->get();

        //$catalogo = Producto::latest('cantidad_disponible')->paginate(2);
 
        //return view('catalogo', compact('catalogo'));
        return view('productos.index', [
            'productos' => Producto::latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('productos.show', [
            'producto' => Producto::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
