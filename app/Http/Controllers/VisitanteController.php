<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        return view('visitantes.index');
    }

    public function create()
    {
        return view('visitantes.create')->with('visitante', new Visitante);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Visitante $visitante)
    {
        return view('visitantes.show')->with('visitante', $visitante);
    }

    public function edit(Visitante $visitante)
    {
        return view('visitantes.edit')->with('visitante', $visitante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitante $visitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitante $visitante)
    {
        //
    }
}
