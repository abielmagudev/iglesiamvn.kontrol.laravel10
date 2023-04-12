<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index()
    {
        return view('miembros.index');
    }

    public function create()
    {
        return view('miembros.create')->with('miembro', new Miembro);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Miembro $miembro)
    {
        return view('miembros.show')->with('miembro', $miembro);
    }

    public function edit(Miembro $miembro)
    {
        return view('miembros.edit')->with('miembro', $miembro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Miembro $miembro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Miembro $miembro)
    {
        //
    }
}
