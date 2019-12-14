<?php

namespace App\Http\Controllers;

use App\OrdenDetalle;
use App\Orden;
use App\Libro;
use Illuminate\Http\Request;



class OrdenDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos = OrdenDetalle::all();
        return view('orden_detalle.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Orden::all();
        $datos1 = Libro::all();
        return view('orden_detalle.create', compact('datos','datos1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $datos = new OrdenDetalle();
        $datos->orden_id = $request->orden;
        $datos->libro_id = $request->libro;
        $datos->cantidad = $request->cantidad;
        $datos->precio_orden = $request->precio_orden;
        $datos->total = $request->total;
        $datos->save();  
        return redirect('/orden_detalle');
        //return view('orden_detalle.mensaje',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenDetalle $ordenDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenDetalle $ordenDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenDetalle $ordenDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenDetalle $ordenDetalle)
    {
        //
    }
}
