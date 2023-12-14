<?php

namespace App\Livewire;

use Livewire\Component;

class ModalButton extends Component
{
    public $modalVisible = false;

    public function showModal()
    {
        $this->modalVisible = true;
    }

    public function hideModal()
    {
        $this->modalVisible = false;
    }

    public function render()
    {
        return view('livewire.modal-button');
    }
}
