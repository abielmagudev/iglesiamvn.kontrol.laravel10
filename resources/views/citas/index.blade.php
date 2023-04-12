@extends('aplicacion')
@section('pagina', 'Eventos')
@section('contenido')
<x-card title='Citas'>
    <x-slot name='options'>
        <a href="{{ route('citas.create') }}" class="button is-link">Nueva</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Atender</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
