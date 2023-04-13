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

<hr class="my-6">

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
    <label for="selectRelacion" class="label">Relación</label>
    <div class="control">
        <div class="select is-fullwidth">
            <select name="relacion" id='selectRelacion'>
                <option>Esposo</option>
                <option>Hija</option>
                <option>Hijastro</option>
                <option>Nieto</option>
                <option>Abuela</option>
            </select>
        </div>
    </div>
</div>

<hr class="my-6">

<div class="field">
    <label for="radioMismaResidencia" class="label">Residencia</label>
    <div class="control control-border mb-3">
        <label class="radio">
            <input type="radio" name="residencia" value="1" id='radioMismaResidencia' checked>
            <span>Misma del familiar</span>
        </label>
        <label class="radio">
            <input type="radio" name="residencia" value="0" id='radioDiferenteResidencia'>
            <span>Diferente a la del familiar</span>
        </label>
    </div>
    <div class="control">
        <div class="select is-fullwidth">
            <select name="nacionalidad">
                <option>Buscar y seleccionar familiar para rellenar la misma residencia</option>
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

<hr class="my-6">

<div class="field">
    <label for="inputTelefono" class="label">Teléfono</label>
    <div class="control">
        <input type="text" name="telefono" id="inputTelefono" class='input'>
    </div>
</div>
<div class="field">
    <label for="inputMovil" class="label">Móvil</label>
    <div class="control">
        <input type="text" name="movil" id="inputMovil" class='input'>
    </div>
</div>
<div class="field">
    <label for="inputCorreoElectronico" class="label">Correo electrónico</label>
    <div class="control">
        <input type="email" name="correo_electronico" id="inputCorreoElectronico" class='input'>
    </div>
</div>
<div class="field">
    <label for="textareaEmergencia" class="label">Emergencia</label>
    <div class="control">
        <textarea class="textarea" name='emergencia' id="textareaEmergencia" rows='3'></textarea>
    </div>
</div>

<hr class="my-6">

<div class="field">
    <label for="textareaProfesiones" class="label">Profesión(es)</label>
    <div class="control">
        <textarea class="textarea" name='profesiones' id="textareaProfesiones" rows='3'></textarea>
    </div>
</div>
<div class="field">
    <label for="textareaOcupaciones" class="label">Ocupación(es)</label>
    <div class="control">
        <textarea class="textarea" name='ocupaciones' id="textareaOcupaciones" rows='3'></textarea>
    </div>
</div>

<hr class="my-6">

<div class="field">
    <label for="inputRegistro" class="label">Registro</label>
    <input type="date" name="registro" id="inputRegistro" class='input'>
</div>
<div class="field">
    <label for="radioEstatusActivo" class="label">Estatus</label>
    <div class="control control-border">
        <label class="radio">
            <input type="radio" name="estatus" value="1" id='radioEstatusActivo' checked>
            <span>Activo, si disponible</span>
        </label>
        <label class="radio">
            <input type="radio" name="estatus" value="0" id='radioEstatusInactivo'>
            <span>Inactivo, no disponible</span>
        </label>
    </div>
</div>
<div class="field">
    <label for="textareaNotas" class="label">Notas</label>
    <div class="control">
        <textarea class="textarea" name='notas' id="textareaNotas" rows='3'></textarea>
    </div>
</div>

<hr class="my-6">

<div class="field">
    <label for="fileFotografia" class="label">Fotografía</label>
    <div class="file has-name is-fullwidth">
        <label class="file-label">
            <input class="file-input" type="file" name="fotografia" id="fileFotografia">
            <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    Choose a file…
                </span>
            </span>
            <span class="file-name">
                Screen Shot 2017-07-29 at 15.54.25.png
            </span>
        </label>
    </div>
</div>

@csrf
