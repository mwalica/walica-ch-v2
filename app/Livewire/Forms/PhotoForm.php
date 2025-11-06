<?php

namespace App\Livewire\Forms;

use App\Models\Photo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PhotoForm extends Form
{
    #[Validate('required|min:3')]
    public $title = '';
    public $link = '';
    #[Validate('required|image')]
    public $photo;

    public $photo_path;

    public function store()
    {
        $this->validate();
        $this->photo_path = $this->photo->store('photos', 'public');
        if (!empty($link)) {
            Photo::create($this->only(['title', 'photo_path', 'link']));
            return;
        }
        Photo::create($this->only(['title', 'photo_path']));
    }
}
