<?php

namespace App\Http\Controllers;

use App\Models\Usuario_est;
use Illuminate\Http\Request;

class UsuarioEstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarioest.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarioest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosUsuarioest = request()->all();
        $datosUsuarioest = request()->except('_token');
        Usuario_est::insert($datosUsuarioest);
        return response()->json($datosUsuarioest);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario_est  $usuario_est
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario_est $usuario_est)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario_est  $usuario_est
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario_est $usuario_est)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario_est  $usuario_est
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario_est $usuario_est)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario_est  $usuario_est
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario_est $usuario_est)
    {
        //
    }
}
