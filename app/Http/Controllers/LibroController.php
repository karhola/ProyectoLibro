<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Autor;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = libro::all();
        return view('libro.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Autor::all();
        return view('libro.create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $datos = new Libro();
        $datos->autor_id = $request->autor;
        $datos->titulo = $request->titulo;
        $datos->precio = $request->precio;
        $datos->save();  
        return redirect('/libro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libro.show', compact('libro'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //return "hoal";
        return view('libro.edit', compact('libro'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->titulo =$request->titulo;
        $libro->autor_id =$request->autor_id;
        $libro->precio =$request->precio;
        $libro->update();
        $datos = Libro::all();
        return view('libro.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();    
        $datos = Libro::all();
        return view('libro.index',compact('datos'));
    }
}
