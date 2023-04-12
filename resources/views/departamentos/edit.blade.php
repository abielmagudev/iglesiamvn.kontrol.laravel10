@extends('aplicacion')
@section('pagina', 'Departamentos')
@section('contenido')
<x-card title='Editar departamento'>
    <form action="{{ route('departamentos.update', $departamento) }}" method="post">
        @include('departamentos._form')
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar departamento</button>
        <a href="{{ route('departamentos.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
