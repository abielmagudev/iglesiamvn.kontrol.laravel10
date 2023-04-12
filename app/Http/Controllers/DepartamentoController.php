<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('departamentos.index');
    }

    public function create()
    {
        return view('departamentos.create')->with('departamento', new Departamento);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Departamento $departamento)
    {
        return view('departamentos.show')->with('departamento', $departamento);
    }

    public function edit(Departamento $departamento)
    {
        return view('departamentos.edit')->with('departamento', $departamento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
