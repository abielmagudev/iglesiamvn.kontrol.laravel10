@extends('aplicacion')
@section('pagina', 'Mi cuenta')
@section('contenido')
<x-card title='Mi cuenta'>
    <form action="{{ route('citas.update', 1) }}" method="post">
        <div class="field">
            <label for="inputNombre" class="label">Nombre</label>
            <div class="control">
                <input type="text" class="input" name="nombre" id="inputNombre">
            </div>
        </div>
        <div class="field">
            <label for="inputCorreoElectronico" class="label">Correo electrónico</label>
            <div class="control">
                <input type="email" class="input" name="correo_electronico" id="inputCorreoElectronico">
            </div>
        </div>
        <div class="field">
            <label for="inputNuevaContrasena" class="label">Nueva contraseña</label>
            <div class="control">
                <input type="password" class="input" name="nueva_contrasena" id="inputContrasena">
            </div>
        </div>
        <br>
        <button type="submit" class='button is-warning'>Actualizar mi cuenta</button>
    </form>
</x-card>
@endsection
