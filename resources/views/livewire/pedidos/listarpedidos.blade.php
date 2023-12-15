<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

        </div>
        <!-- /.card -->

        <div class="card">

          <div class="card-header">
            <h3 class="card-title">TODOS LOS PEDIDOS</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive p-0">

                <button wire:click="showModal" class="btn btn-primary">CREAR PEDIDO DEL TRABAJADOR</button>

                @if($modalVisible)
                @include('livewire.pedidos.crearpedidos')
                 @endif

                 <a href="{{ route('usuarios.index') }}" class="btn btn-primary">

                    <p>
                     VOLVER
                    </p>
                  </a>




                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id </th>
                      <th>Fecha</th>
                      <th>Cantidad</th>
                      <th>Dia</th>
                      <th>Descripcion</th>
                      <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($pedidos as $pedido)
                      <tr>
                        <td>
                            {{$pedido->id}}
                        </td>

                      <td>
                          {{$pedido->fecha}}
                      </td>
                      <td>
                          {{$pedido->cantidad}}
                      </td>
                      <td>
                          {{$pedido->dia}}
                      </td>
                      <td>
                          {{$pedido->descrip}}
                      </td>
                      <td>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <button wire:click="edit({{$pedido->id}})" class="btn btn-success btn-block" style="font-size: 16px;">EDITAR ANOTE</button>
                            </div>
                            <div class="col-md-6 mb-2">
                                <button wire:click="eliminar({{$pedido->id}})" class="btn btn-danger btn-block" style="font-size: 16px;">ELIMINAR ANOTE</button>
                            </div>
                        </div>

                      </td>
                      </tr>
                  @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                          <th>
                           LA CANTIDAD DE PEDIDOS SON {{$this->totalCantidad}}

                          </th>

                        </tr>
                        </tfoot>
                  </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

