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
    <label for="checkboxesPermisos" class="label">Permisos</label>
    <div class="columns">
        @foreach(['miembros', 'departamentos', 'eventos', 'citas', 'visitantes', 'usuarios'] as $grupo)        
        <div class="column">
            <div class="box box-border">
                <p class='mb-3 has-text-weight-semibold'>{{ ucfirst($grupo) }}</p>
                <div class='control'>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Lista</span>
                    </label>
                </div>
                <div class='control'>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Ver</span>
                    </label>
                </div>
                <div class='control'>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Crear</span>
                    </label>
                </div>
                <div class='control'>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Editar</span>
                    </label>
                </div>
                <div class='control'>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Eliminar</span>
                    </label>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@csrf
