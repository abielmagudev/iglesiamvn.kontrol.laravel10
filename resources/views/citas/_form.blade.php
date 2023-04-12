<div class="field">
    <label for="inputFecha" class="label">Fecha y hora</label>
    <div class="columns">
        <div class="column">
            <div class="control">
                <input type="date" class='input' name="fecha" id="inputFecha">
            </div>
        </div>
        <div class="column">
            <div class="control">
                <input type="time" class='input' name="hora" id="inputHora">
            </div>
        </div>
    </div>
</div>
<div class="field">
    <label for="inputNombre" class="label">Nombre</label>
    <div class="control">
        <input type="text" class="input" name="nombre" id="inputNombre">
    </div>
</div>
<div class="field">
    <label for="selectAtender" class="label">Atender</label>
    <div class="select is-fullwidth">
        <select id="selectAtender">
            <option>Consejero 1</option>
            <option>Consejero 2</option>
            <option>Consejero 3</option>
        </select>
    </div>
</div>
@csrf
