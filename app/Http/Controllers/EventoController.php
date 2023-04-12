<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        return view('eventos.index');
    }

    public function create()
    {
        return view('eventos.create')->with('evento', new Evento);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Evento $evento)
    {
        return view('eventos.show')->with('evento', $evento);
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit')->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
