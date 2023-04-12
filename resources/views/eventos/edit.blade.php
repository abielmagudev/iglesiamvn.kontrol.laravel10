@extends('aplicacion')
@section('pagina', 'Eventos')
@section('contenido')
<x-card title='Editar evento'>
    <form action="{{ route('eventos.update', $evento) }}" method="post">
        @include('eventos._form')
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar evento</button>
        <a href="{{ route('eventos.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
