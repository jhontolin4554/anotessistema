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
                <th>Foto</th>
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
                    <img src="{{ asset(Auth::user()->profile_photo_path) }}" class="img-circle elevation-2" alt="User Image" style="width: 50px; height: 50px;">
                </td>

                <td>
        <button wire:click="edit({{$user->id}})" class="btn btn-success">EDITAR TRABAJADOR</button>
        <a href="{{ route('anotes.show',$user->id) }}" class="btn btn-primary">
            <p>
                VER ANOTE
               </p>
        </a>
        <a href="{{ route('pedidos.show',$user->id) }}" class="btn btn-primary">
            <p>
                VER PEDIDO
               </p>
        </a>

        <button wire:click="eliminar({{$user->id}})" class="btn btn-danger">ELIMINAR TRABAJADOR</button>
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
