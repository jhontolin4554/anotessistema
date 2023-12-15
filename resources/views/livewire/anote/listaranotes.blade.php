<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">

        </div>
        <!-- /.card -->

        <div class="card">

          <div class="card-header">
            <h3 class="card-title">TODOS LOS PANTALONES HECHOS</h3>
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive p-0">
            <div>
                <button wire:click="showModal" class="btn btn-primary">ANOTAR PANTALON</button>

                @if($modalVisible)
                @include('livewire.anote.crearanote')
                 @endif

                 <a href="{{ route('usuarios.index') }}" class="btn btn-primary">

                    <p>
                     VOLVER
                    </p>
                  </a>
                 </div>



                 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>id </th>
                      <th>pantalon</th>
                      <th>Fecha</th>
                      <th>Cantidad</th>
                      <th>Tipo</th>
                      <th>Dia</th>

                      <th>Descripcion</th>
                      <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($anotes as $anote)
                      <tr>
                        <td>
                            {{$anote->id}}
                        </td>
                        <td>
                            {{$anote->pantalon}}
                        </td>
                      <td>
                          {{$anote->fecha}}
                      </td>
                      <td>
                          {{$anote->cantidad}}
                      </td>
                      <td>
                        {{$anote->tipo_pantalon}}
                    </td>
                      <td>
                          {{$anote->dia}}
                      </td>
                      <td>
                          {{$anote->descrip}}
                      </td>
                      <td>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <button wire:click="edit({{$anote->id}})" class="btn btn-success btn-block" style="font-size: 16px;">EDITAR ANOTE</button>
                            </div>
                            <div class="col-md-6 mb-2">
                                <button wire:click="eliminar({{$anote->id}})" class="btn btn-danger btn-block" style="font-size: 16px;">ELIMINAR ANOTE</button>
                            </div>
                        </div>

                      </td>
                      </tr>
                  @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                          <th>
                           CANTIDAD DE ANOTES FINOS ES {{$this->cantidadpantalonfino }}

                          </th>

                          <th>
                            CANTIDAD DE FINOS ES {{$this->pantalonfino }}
                          </th>
                           <th>
                            CANTIDAD DE ANOTES NORMALES ES {{$this->cantidadpantalonnormal}}

                           </th>
                           <th>
                            CANTIDAD DE NORMAL ES {{$this->pantalonnormal}}
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
