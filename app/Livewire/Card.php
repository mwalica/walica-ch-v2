<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public string $link;
    public string $image;
    public string $title;
    public array $kinds = [];

    public array $colors = ["zinc", "red", "orange", "amber", "yellow", "lime", "green", "emerald", "teal", "cyan", "sky", "blue", "indigo", "violet", "purple", "fuchsia", "pink", "rose"];

    public function render()
    {
        return view('livewire.card');
    }
}
