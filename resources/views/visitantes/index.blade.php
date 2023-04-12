@extends('aplicacion')
@section('pagina', 'Visitantes')
@section('contenido')
<x-card title='Visitantes'>
    <x-slot name='options'>
        <a href="{{ route('visitantes.create') }}" class="button is-link">Nuevo</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Motivo</th>
                    <th>Contacto</th>
                    <th>Respuesta</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
