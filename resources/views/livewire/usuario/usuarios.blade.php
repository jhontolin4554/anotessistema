<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

        </div>
        <!-- /.card -->

        <div class="card">

          <div class="card-header">
            <h3 class="card-title">TODOS LOS TRABAJADORES</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <div>
                <button wire:click="showModal" class="btn btn-primary">CREAR TRABAJADOR</button>

                @if($modalVisible)
                @include('livewire.usuario.crearusuario')
                 @endif
                 </div>



            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre </th>
                <th>Acciones</th>

              </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                <td>
                    {{$user->name}}
                </td>

                <td>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <button wire:click="edit({{$user->id}})" class="btn btn-success btn-block" style="width: 90%; font-size: 16px;">EDITAR TRABAJADOR</button>
                        </div>
                        <div class="col-md-4 mb-2">
                            <a href="{{ route('anotes.show',$user->id) }}" class="btn btn-primary btn-block" style="width: 90%; font-size: 16px;">VER ANOTE</a>
                        </div>
                        <div class="col-md-4 mb-2">
                            <a href="{{ route('pedidos.show',$user->id) }}" class="btn btn-primary btn-block" style="width: 90%; font-size: 16px;">VER PEDIDO</a>
                        </div>
                        <div class="col-md-4 mb-2">
                            <button wire:click="eliminar({{$user->id}})" class="btn btn-danger btn-block" style="width: 90%; font-size: 16px;">ELIMINAR TRABAJADOR</button>
                        </div>
                    </div>

                </td>
                </tr>
            @endforeach


              </tbody>
              <tfoot>

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
