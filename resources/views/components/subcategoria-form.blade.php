<div>
    <div class="form-group mt-1">
        <label for="input_name">Nombre</label>
        <input autofocus type="text" class="form-control" id="input_name" name="nombre" aria-describedby="name"
            placeholder="Nueva Subcategoria" value="{{old('nombre', $subcategoria->nombre)}}">
        @error('nombre')
            <div id="validationServerNameFeedback" class="invalid-feedback">
                Verifique nuevamente el nombre
            </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_desc">Descripcion</label>
        <input type="text" class="form-control" id="input_desc" name="descripcion" aria-describedby="descripcion"
            placeholder="Descripcion" value="{{old('descripcion', $subcategoria->descripcion)}}">
    </div>
    <div class="custom-file mt-1">
        <label class="custom-file-label" for="input_imagen">Seleccionar Imagen</label>
        <input type="file" name="imagen" lang="es"
            class="custom-file-input @error('imagen') is-invalid @enderror" id="input_imagen"
            aria-describedby="inputGroupFileAddon" aria-label="Subir" value="{{old('imagen', $subcategoria->imagen)}}">
        @error('imagen')
            <div id="validationServerImagenFeedback" class="invalid-feedback">
                Formato no valido(jpg, pgn, webp) o demasiado grande(debe ser menor a 5mb)
            </div>
        @enderror
    </div>
</div>
