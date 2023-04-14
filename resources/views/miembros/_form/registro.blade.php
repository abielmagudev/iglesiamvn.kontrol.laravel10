<p class="is-italic has-text-info mb-3">Registro de membresia</p>
<div class="field">
    <label for="inputRegistro" class="label">Registro</label>
    <input type="date" name="registro" id="inputRegistro" class='input'>
</div>
<div class="field">
    <label for="radioEstatusActivo" class="label">Estatus</label>
    <div class="control control-border">
        <label class="radio">
            <input type="radio" name="estatus" value="1" id='radioEstatusActivo' checked>
            <span>Activo</span>
        </label>
        <label class="radio">
            <input type="radio" name="estatus" value="0" id='radioEstatusInactivo'>
            <span>Inactivo</span>
        </label>
    </div>
</div>
<div class="field">
    <label for="textareaNotas" class="label">Notas</label>
    <div class="control">
        <textarea class="textarea" name='notas' id="textareaNotas" rows='3'></textarea>
    </div>
</div>
