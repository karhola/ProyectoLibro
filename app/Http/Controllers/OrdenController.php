<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Cliente;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = orden::all();
        return view('orden.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Cliente::all();
        return view('orden.create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Orden();
        $datos->cliente_id = $request->cliente;
        $datos->fecha = $request->fecha;
        $datos->tipo_pago = $request->tipo_pago;
        $datos->save();  
        return redirect('/orden');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        return view('orden.show', compact('orden'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        return view('orden.edit', compact('orden'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        $orden->fecha =$request->fecha;
        $orden->cliente_id =$request->cliente_id;
        $orden->tipo_pago =$request->tipo_pago;
        $orden->update();
        $datos = Orden::all();
        return view('orden.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();    
        $datos = Orden::all();
        return view('orden.index',compact('datos'));
    }
}
