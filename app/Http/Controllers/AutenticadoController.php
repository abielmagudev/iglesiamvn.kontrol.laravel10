<?php

namespace App\Http\Controllers;

use App\Models\Autenticado;
use Illuminate\Http\Request;

class AutenticadoController extends Controller
{
    public function index()
    {
        return view('autenticado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autenticado $autenticado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autenticado $autenticado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autenticado $autenticado)
    {
        //
    }
}
