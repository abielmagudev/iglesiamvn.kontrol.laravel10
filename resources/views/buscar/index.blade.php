@extends('aplicacion')
@section('pagina', 'Búsqueda')
@section('contenido')
<x-card title='Personas: 0'>
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
