@extends('aplicacion')
@section('pagina', 'Usuarios')
@section('contenido')
<x-card title='Usuarios'>
    <x-slot name='options'>
        <a href="{{ route('usuarios.create') }}" class="button is-link">Nuevo</a>
    </x-slot>
    <div class="table-container">
        <table class="table is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th></th>
                    <th>Usuario</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</x-card>
@endsection
