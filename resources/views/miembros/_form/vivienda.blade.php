<p class="is-italic has-text-info mb-3">Residencia y vivienda</p>
<div class="field">
    <label for="radioMismaVivienda" class="label">Vivienda</label>
    <div class="control control-border mb-3">
        <label class="radio">
            <input type="radio" name="vivienda" value="0" id='radioMismaVivienda' checked>
            <span>Propia</span>
        </label>
        <label class="radio">
            <input type="radio" name="vivienda" value="1" id='radioDiferenteVivienda'>
            <span>Familiar</span>
        </label>
    </div>
    <div class="control">
        <div class="select is-fullwidth">
            <select name="nacionalidad">
                <option>Buscar y seleccionar familiar para rellenar la misma vivienda</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label for="inputDireccion" class="label">Dirección</label>
    <div class="control">
        <input type="text" name="direccion" id="inputDireccion" class='input'>
    </div>
</div>
<div class="field">
    <label for="inputCodigoPostal" class="label">Código postal</label>
    <div class="control">
        <input type="text" name="codigo_postal" id="inputCodigoPostal" class='input'>
    </div>
</div>
<div class="field">
    <label for="selectLocalidad" class="label">Localidad</label>
    <div class="columns">
        <div class="column">
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="pais" id='selectLocalidad'>
                        <option>México</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="control">
                <div class="select is-fullwidth">
                    <select name="estado">
                        <option>Tamaulipas</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="control">
                <input type="text" name="ciudad" class='input' placeholder="Ciudad">
            </div>
        </div>
    </div>
</div>
