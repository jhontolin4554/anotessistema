<div class="modal" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ANOTAR PEDIDO</h5>
                <button wire:click="hideModal" type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="card-body">
                      <div class="form-group">
                        <label for="nombre">DIA</label>
                        <input type="text" class="form-control" id="dia" wire:model="dia" placeholder="DIA DEL PEDIDO" required>
                      </div>
                      <div class="form-group">
                        <label for="nombre">FECHA</label>
                        <input type="date" class="form-control" id="fecha" wire:model="fecha"  required>
                      </div>
                      <div class="form-group">
                        <label for="nombre">CANTIDAD</label>
                        <input type="text" class="form-control" id="cantidad" wire:model="cantidad" placeholder="CANTIDAD DEL PEDIDO" required>
                      </div>
                      <div class="form-group">
                        <label for="nombre">DESCRIPCION</label>
                        <input type="text" class="form-control" id="descripcion" wire:model="descripcion" placeholder="DESCRIPCION">
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
