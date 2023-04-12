@extends('aplicacion')
@section('pagina', 'Visitante')
@section('contenido')
<x-card title='Nuevo visitante'>
    <form action="{{ route('visitantes.store') }}" method="post">
        @include('visitantes._form')
        <br>
        <button type="submit" class='button is-success'>Guardar visitante</button>
        <a href="{{ route('visitantes.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
