<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\User;
class Pedidos extends Component
{
    public $dia="";
    public $id_pedido;
    public $fecha="";
    public $cantidad;
    public $descripcion="";
    public $modalVisible = false;
    public $user_id;
    public $totalCantidad;
    public function showModal()
    {
        $this->modalVisible = true;
    }
    public function guardar()
    {
        Pedido::updateOrcreate(['id'=>$this->id_pedido],[

            'fecha'=> $this->fecha,
            'cantidad'=> $this->cantidad,
            'dia'=> $this->dia,
            'descrip'=> $this->descripcion,
            'user_id'=> $this->user_id,
        ]);
        $this->limpiarcampos();
        $this->hideModal();
    }

    public function hideModal()
    {
        $this->modalVisible = false;
    }
    public function render()
    {
        $user = User::find($this->user_id);

        $pedidos=$user->pedidos;

        $this->totalCantidad = $user->pedidos->sum('cantidad');

        return view('livewire.pedidos.listarpedidos',compact('pedidos'));
    }
    public function limpiarcampos()
    {
        $this->dia='';
        $this->id_pedido='';
        $this->fecha='';
        $this->cantidad='';
        $this->descripcion='';

    }
    public function edit($id)
    {
    $pedido=Pedido::findOrfail($id);
    $this->id_pedido=$pedido->id;
    $this->dia=$pedido->dia;

    $this->fecha=$pedido->fecha;
    $this->cantidad=$pedido->cantidad;
    $this->descripcion=$pedido->descrip;
    $this->showModal();
    }
    public function eliminar($id)
    {
        Pedido::find($id)->delete();
    }
    public function volver()
    {
        return view('usuarios.usuario');
    }


}
