<?php

namespace App\Livewire;

use App\Livewire\Forms\PhotoForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePhoto extends Component
{

    use WithFileUploads;

    public PhotoForm $form;

    public function save()
    {
        $this->form->store();
        $this->redirectRoute('home', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-photo');
    }
}
