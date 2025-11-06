<?php

namespace App\Livewire;

use App\Models\Photo;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', ['photo' => Photo::inRandomOrder()->first()]);
    }
}
