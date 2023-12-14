<div class="modal" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CREAR TRABAJADOR</h5>
                <button wire:click="hideModal" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="card-body">
                      <div class="form-group">
                        <label for="nombre">NOMBRE</label>
                        <input type="text" class="form-control" id="name" wire:model="name" placeholder="NOMBRE TRABAJADOR" required>
                      </div>



                    </div>
                    <!-- /.card-body -->



            </div>
            <div class="modal-footer">
                <button wire:click="hideModal" type="button" class="btn btn-secondary">Cerrar</button>
                <button wire:click="guardar" type="button" class="btn btn-primary">Guardar</button>

            </div>
        </div>
    </div>
</div>
