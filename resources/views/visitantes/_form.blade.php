<div class="field">
    <label for="inputNombre" class="label">Nombre</label>
    <div class="control">
        <input type="text" class="input" name="nombre" id="inputNombre">
    </div>
</div>
<div class="field">
    <label for="inputFecha" class="label">Fecha de su visita</label>
    <div class="control">
        <input type="date" class="input" name="fecha" id="inputFecha">
    </div>
</div>
<div class="field">
    <label for="textareaMotivo" class="label">Motivo de su visita</label>
    <div class="control">
        <textarea name="motivo" id="textareaMotivo" rows="3" class="textarea" placeholder="Ej. Por un familiar, por las redes sociales..."></textarea>
    </div>
</div>
<div class="field">
    <label for="inputContacto" class="label">Modos de contactar</label>
    <div class="control">
        <textarea name="contacto" id="textareaContacto" rows="3" class="textarea" placeholder="Ej. Teléfono(s), email(s), ninguno..."></textarea>
    </div>
</div>
<div class="field">
    <label for="textareaRespuesta" class="label">Respuesta de atención</label>
    <div class="control">
        <textarea name="respuesta" id="textareaRespuesta" rows="3" class="textarea" placeholder="Ej. Agradece la llamada, no fue posible contactar..."></textarea>
    </div>
    <p class="help">Se interpretará como "atendido" al agregar la información de respuesta.</p>
</div>
@csrf
