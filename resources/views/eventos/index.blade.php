@extends('aplicacion')
@section('pagina', 'Eventos')
@section('contenido')
<x-card title='Eventos'>
    <x-slot name='options'>
        <a href="{{ route('eventos.create') }}" class="button is-link">Nuevo</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
