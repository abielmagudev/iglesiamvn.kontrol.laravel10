@extends('aplicacion')
@section('pagina', 'Eventos')
@section('contenido')
<x-card title='Nuevo evento'>
    <form action="{{ route('eventos.store') }}" method="post">
        @include('eventos._form')
        <br>
        <button type="submit" class='button is-success'>Guardar evento</button>
        <a href="{{ route('eventos.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
