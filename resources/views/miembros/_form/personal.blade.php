<p class="is-italic has-text-info mb-3">Información personal</p>
<div class="field">
    <label for="inputNombre" class="label">Nombre completo</label>
    <div class="columns">
        <div class="column">
            <div class="control">
                <input type="text" name="nombre" id="inputNombre" class='input' placeholder="Nombre(s)">
            </div>
        </div>
        <div class="column">
            <div class="control">
                <input type="text" name="apellido" id="inputApellido" class='input' placeholder="Apellido(s)">
            </div>
        </div>
    </div>
</div>
<div class="field">
    <label for="inputNacimiento" class="label">Nacimiento</label>
    <input type="date" name="nacimiento" id="inputNacimiento" class='input'>
</div>
<div class="field">
    <label for="selectNacionalidad" class="label">Nacionalidad</label>
    <div class="control">
        <div class="select is-fullwidth">
            <select name="nacionalidad" id='selectNacionalidad'>
                <option>México</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label for="radioGeneroFemenino" class="label">Género</label>
    <div class="control control-border">
        <label class="radio">
            <input type="radio" name="genero" value="f" id='radioGeneroFemenino' checked>
            <span>Femenino</span>
        </label>
        <label class="radio">
            <input type="radio" name="genero" value="m" id='radioGeneroMasculino'>
            <span>Masculino</span>
        </label>
    </div>
</div>
<div class="field">
    <label for="selectEstadoCivil" class="label">Estado civil</label>
    <div class="control">
        <div class="select is-fullwidth">
            <select name="relacion" id='selectEstadoCivil'>
                <option>Desconocido</option>
                <option>Soltero(a)</option>
                <option>Casado(a)</option>
                <option>Divorciado(a)</option>
                <option>Separado(a)</option>
                <option>Viudo(a)</option>
                <option>Union libre</option>
            </select>
        </div>
    </div>
</div>
