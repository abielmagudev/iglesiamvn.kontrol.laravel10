@extends('aplicacion')
@section('pagina', 'Miembros')
@section('contenido')
<x-card title='Miembro'>
    <p>Mostrar miembro...</p>
</x-card>
<br>
<x-card title='Familia'>
    <form action="">
        <div class="field">
            <label for="selectFamiliar" class="label">Familiar</label>
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="relacion" id='selectFamiliar'>
                        <option>Nombre de la persona</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <label for="selectParentesco" class="label">Parentesco</label>
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="relacion" id='selectParentesco'>
                        <option>Esposo</option>
                        <option>Hija</option>
                        <option>Hijastro</option>
                        <option>Nieto</option>
                        <option>Abuela</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</x-card>
@endsection
