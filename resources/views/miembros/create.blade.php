@extends('aplicacion')
@section('pagina', 'Miembros')
@section('contenido')
<x-card title='Nuevo miembro'>
    <form action="{{ route('miembros.store') }}" method="post">
        @include('miembros._form')
        <br>
        <button type="submit" class='button is-success'>Guardar miembro</button>
        <a href="{{ route('miembros.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
