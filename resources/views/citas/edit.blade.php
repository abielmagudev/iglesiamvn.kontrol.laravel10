@extends('aplicacion')
@section('pagina', 'Citas')
@section('contenido')
<x-card title='Editar cita'>
    <form action="{{ route('citas.update', $cita) }}" method="post">
        @include('citas._form')
        <div class="field">
            <label for="textareaResumen" class="label">Resúmen</label>
            <div class="control">
                <textarea name="resumen" id="textareaResumen" rows="5" class="textarea"></textarea>
            </div>
        </div>
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar cita</button>
        <a href="{{ route('citas.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
