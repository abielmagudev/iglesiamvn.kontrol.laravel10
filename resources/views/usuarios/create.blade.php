@extends('aplicacion')
@section('pagina', 'Usuarios')
@section('contenido')
<x-card title='Nuevo usuario'>
    <form action="{{ route('usuarios.store') }}" method="post">
        @include('usuarios._form')
        <div class="field">
            <label for="textContrasena" class="label">Contraseña</label>
            <p>Al guardar, se enviará un correo electrónico con la contraseña generada por la aplicación a la dirección de este usuario.</p>
        </div>
        <br>
        <button type="submit" class='button is-success'>Guardar usuario</button>
        <a href="{{ route('usuarios.index') }}" class="button is-link">Cancelar</a>
    </form>
</x-card>
@endsection
