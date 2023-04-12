@extends('aplicacion')
@section('pagina', 'Citas')
@section('contenido')
<x-card title='Nueva cita'>
    <form action="{{ route('citas.store') }}" method="post">
        @include('citas._form')
        <br>
        <button type="submit" class='button is-success'>Guardar cita</button>
        <a href="{{ route('citas.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
