<?php

namespace App\Livewire;

use Livewire\Component;

class ListItem extends Component
{

    public string $text;
    public function render()
    {
        return view('livewire.list-item');
    }
}
