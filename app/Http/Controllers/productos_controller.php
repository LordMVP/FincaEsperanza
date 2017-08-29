<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\productos;
use DB;

class productos_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = DB::select("SELECT 
            prod.id_product, cate.nombre as 'categoria',  prla.name as 'nombre', prla.description as 'descripcion', prod.price as 'precio', stoc.price_te as 'precio_stock'
            FROM 
            porcinos.ps_product_lang prla,
            porcinos.ps_product prod,
            porcinos.ps_stock stoc,
            porcinos.categorias cate
            where   
            prla.id_product = prod.id_product
            and prod.id_product = stoc.id_product
            and prod.idcategoria = cate.idcategoria");

        //dd($producto);
        //$productos = productos::orderBy('id_product', 'ASC')->paginate(5);
        return view('pagina.productos.productos')->with('productos', $producto);
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
        //
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
