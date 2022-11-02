<div>
    <select model:wire="q_categoria" name="categoria" class="form-select" id="select_categorias">
        @forelse($categorias as $categoria)
        <option value="$categoria->id">{{ $categoria->nombre }}</option>
        @empty
        <option value="">No hay categorias creadas</option>
        @endforelse
    </select>
    <select select name="subcategoria" class="form-select" id="select_categorias">
        @forelse($subcategorias as $subcategoria)
        <option value="$subcategoria->id">{{ $subcategoria->nombre }}</option>
        @empty
        <option value="">No hay subcategorias creadas</option>
        @endforelse
    </select>
    <div class="form-group mt-1">
        <label for="input_name">Nombre</label>
        <input autofocus type="text" class="form-control @error('nombre')is-invalid @enderror" id="input_name" name="nombre" aria-describedby="nombre" placeholder="Ej: Teclado hyperx" value="{{old('nombre', $producto->nombre)}}">
        @error('nombre')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Verifique nuevamente el nombre
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_altern_name">Nombre Alternativo</label>
        <input autofocus type="text" id="input_altern_name" name="nombre_alternativo" aria-describedby="name" class="form-control @error('nombre_alternativo')is-invalid @enderror" placeholder="Nombre alternativo" value="{{old('nombre_alternativo', $producto->nombre_alternativo)}}">
        @error('nombre_alternativo')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Este campo es incorrecto
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_desc">Descripcion</label>
        <input type="text" class="form-control @error('descipcion')is-invalid @enderror" id="input_desc" name="descripcion" aria-describedby="descripcion" placeholder="Descripcion" value="{{old('descripcion', $producto->descripcion)}}">
        @error('descripcion')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Este campo es incorrecto
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_cost">Costo</label>
        <input type="text" class="form-control @error('costo')is-invalid @enderror" id="input_cost" name="costo" aria-describedby="costo" placeholder="Costo" value="{{old('costo', $producto->costo)}}">
        @error('costo')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Este campo es incorrecto
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_iva">IVA</label>
        <input type="text" class="form-control @error('iva')is-invalid @enderror" id="input_iva" name="iva" aria-describedby="stock" placeholder="Ej: 10.5">
        @error('iva')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Este campo es incorrecto
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_stock">Stock</label>
        <input type="text" class="form-control @error('stock')is-invalid @enderror" id="input_stock" name="stock" aria-describedby="stock" placeholder="Stock" value="{{old('stock', $producto->stock)}}">
        @error('stock')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Este campo es incorrecto
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_imagen">Imagen</label>
        <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="input_imagen" aria-describedby="inputGroupFileAddon" aria-label="Subir" placeholder="Temporalmente url de texto">
        @error('imagen')
        <div id="validationServerImagenFeedback" class="invalid-feedback">
            Formato no valido(jpg, pgn, webp) o demasiado grande(debe ser menor a 5mb)
        </div>
        @enderror
    </div>


</div>
