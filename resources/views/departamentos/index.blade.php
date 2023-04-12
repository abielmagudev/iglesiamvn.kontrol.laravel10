@extends('aplicacion')
@section('pagina', 'Departamentos')
@section('contenido')
<x-card title='Departamentos'>
    <x-slot name='options'>
        <a href="{{ route('departamentos.create') }}" class="button is-link">Nuevo</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Miembros</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
