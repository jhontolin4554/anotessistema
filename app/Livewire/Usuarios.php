<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Usuarios extends Component
{

    public $name="";
    public $id_user;
    public $modalVisible = false;

    public function showModal()
    {
        $this->modalVisible = true;
    }
    public function guardar()
    {
        User::updateOrcreate(['id'=>$this->id_user],[
            'name' => $this->name,
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'profile_photo_path' => 'storage/avatar1.png',
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
        return view('livewire.usuario.usuarios', [
            'users' => User::all(),
        ]);
    }

    public function limpiarcampos()
    {
        $this->name='';
        $this->id_user='';
    }
    public function edit($id)
    {
    $user=User::findOrfail($id);
    $this->id_user=$user->id;
    $this->name=$user->name;
    $this->showModal();
    }
    public function eliminar($id)
    {
        User::find($id)->delete();
    }
}
