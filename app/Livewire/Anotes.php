<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anote;
use App\Models\User;
class Anotes extends Component
{
    public $dia="";
    public $pantalon="";
    public $tipo="";
    public $id_anote;
    public $fecha="";
    public $cantidad;
    public $descripcion="";
    public $modalVisible = false;
    public $user_id;
    public $cantidadpantalonfino;
    public $cantidadpantalonnormal;
    public $pantalonfino;
    public $pantalonnormal;
    public function showModal()
    {
        $this->modalVisible = true;
    }
    public function guardar()
    {
        Anote::updateOrcreate(['id'=>$this->id_anote],[
            'pantalon'=> $this->pantalon,
            'tipo_pantalon'=> $this->tipo,
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

        $anotes=$user->anotes;
        $this->cantidadpantalonnormal=User::find($this->user_id)
        ->anotes()
        ->where('tipo_pantalon', 'normal')
        ->count();
        $this->cantidadpantalonfino=User::find($this->user_id)
        ->anotes()
        ->where('tipo_pantalon', 'fino')
        ->count();
        $this->pantalonfino=User::find($this->user_id)
        ->anotes()
        ->where('tipo_pantalon', 'fino')
        ->sum('cantidad');
        $this->pantalonnormal=User::find($this->user_id)
        ->anotes()
        ->where('tipo_pantalon', 'normal')
        ->sum('cantidad');

        return view('livewire.anote.listaranotes',compact('anotes'));
    }
    public function limpiarcampos()
    {

        $this->pantalon="";
        $this->tipo="";
        $this->dia='';
        $this->id_anote='';
        $this->fecha='';
        $this->cantidad='';
        $this->descripcion='';

    }
    public function edit($id)
    {
    $anote=Anote::findOrfail($id);
    $this->id_anote=$anote->id;
    $this->dia=$anote->dia;
    $this->pantalon=$anote->pantalon;
    $this->tipo=$anote->tipo_pantalon;
    $this->fecha=$anote->fecha;
    $this->cantidad=$anote->cantidad;
    $this->descripcion=$anote->descrip;
    $this->showModal();
    }
    public function eliminar($id)
    {
        Anote::find($id)->delete();
    }


}
