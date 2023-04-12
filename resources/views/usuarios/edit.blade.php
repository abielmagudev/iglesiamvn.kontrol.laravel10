@extends('aplicacion')
@section('pagina', 'Usuarios')
@section('contenido')
<x-card title='Editar usuario'>
    <form action="{{ route('usuarios.update', $usuario) }}" method="post">
        @include('usuarios._form')
        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox">
                    <span>Enviar una contraseña regenerada por la aplicación a la dirección de este usuario.</span>
                </label>
            </div>
        </div>
        @method('put')
        <br>
        <button type="submit" class='button is-warning'>Actualizar usuario</button>
        <a href="{{ route('usuarios.index') }}" class="button is-link">Regresar</a>
    </form>
</x-card>
@endsection
