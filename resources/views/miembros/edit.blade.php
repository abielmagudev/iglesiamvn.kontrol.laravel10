@extends('aplicacion')
@section('pagina', 'Miembros')
@section('contenido')
<x-card title='Editar miembro'>
    <form action="{{ route('miembros.update', $miembro) }}" method="post">
        @include('miembros._form')
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar miembro</button>
        <a href="{{ route('miembros.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
