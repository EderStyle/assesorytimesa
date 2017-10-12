<!-- Modal -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nueva categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
                
                    {!! Form::open(['route'=>'asseadm.categories.store']) !!}
                        <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
                        <input type="file" name="picture" id="picture">
                        <textarea name="description" id="description" class="form-control" placeholder="Descripción"></textarea>

        </div>
      </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success btn-sm">Guardar</button>
                    <button type="button" class="btn btn-outline-warning btn-sm" data-dismiss="modal">Cerrar</button>
                    {!! Form::close() !!}
                  </div>
                </div>
  </div>
</div>