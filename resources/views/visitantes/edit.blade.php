@extends('aplicacion')
@section('pagina', 'Visitantes')
@section('contenido')
<x-card title='Editar visitante'>
    <form action="{{ route('visitantes.update', $visitante) }}" method="post">
        @include('visitantes._form')
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar visitante</button>
        <a href="{{ route('visitantes.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
