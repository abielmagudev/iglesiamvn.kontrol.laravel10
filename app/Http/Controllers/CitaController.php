<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        return view('citas.index');
    }

    public function create()
    {
        return view('citas.create')->with('cita', new Cita);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Cita $cita)
    {
        return view('citas.create')->with('cita', $cita);
    }

    public function edit(Cita $cita)
    {
        return view('citas.edit')->with('cita', $cita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
