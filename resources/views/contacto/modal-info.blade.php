<!-- Modal Edit-->
<div class="modal fade" id="edit{{ $contacto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR CONTACTO</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action=" {{ route('home.update', $contacto->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $contacto->nombre }}" required>

            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $contacto->telefono }}" required>

            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ $contacto->direccion }}" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Delete-->
<div class="modal fade" id="delete{{ $contacto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR CONTACTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=" {{ route('home.destroy', $contacto->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          Estas seguro de eliminar a <strong>{{ $contacto->nombre }}</strong>?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </form>
    </div>
  </class=>
</div>