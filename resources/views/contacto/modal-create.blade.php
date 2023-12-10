<!-- Modal Create-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUEVO CONTACTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=" {{ route('home.store') }}" method="post" class="needs-validation" novalidate>
        @csrf
        <div class="modal-body">
          <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <div class="valid-feedback">
              Campo completado!
            </div>
            <div class="invalid-feedback">
              Por favor escriba su nombre.
            </div>
          </div>
          <div>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
            <div class="valid-feedback">
              Campo completado!
            </div>
            <div class="invalid-feedback">
              Por favor escriba su teléfono.
            </div>
          </div>
          <div>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" required>
            <div class="valid-feedback">
              Campo completado!
            </div>
            <div class="invalid-feedback">
              Por favor escriba su dirección.
            </div>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>