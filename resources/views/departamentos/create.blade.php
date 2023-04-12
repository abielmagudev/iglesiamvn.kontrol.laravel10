@extends('aplicacion')
@section('pagina', 'Departamentos')
@section('contenido')
<x-card title='Nuevo departamento'>
    <form action="{{ route('departamentos.store') }}" method="post">
        @include('departamentos._form')
        <br>
        <button type="submit" class='button is-success'>Guardar departamento</button>
        <a href="{{ route('departamentos.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
