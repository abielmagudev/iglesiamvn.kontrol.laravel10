@extends('aplicacion')
@section('pagina', 'Miembros')
@section('contenido')
<x-card title='Miembros'>
    <x-slot name='options'>
        <a href="{{ route('miembros.create') }}" class="button is-link">Nuevo</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Móvil</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
