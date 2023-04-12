@extends('aplicacion')
@section('pagina', 'Escritorio')
@section('contenido')
@include('escritorio.index.miembros')
@include('escritorio.index.cumpleanios')
<div class="columns mb-6">
    <div class="column">
        @include('escritorio.index.departamentos')
    </div>
    <div class="column">
        @include('escritorio.index.visitantes')
    </div>
</div>
@endsection
