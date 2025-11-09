<?php

namespace App\Livewire;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Lista zdjęć')]
class PhotosList extends Component
{

    public function delete(Photo $photo): void
    {
        if ($photo->photo_path && Storage::disk('public')->exists($photo->photo_path)) {
            Storage::disk('public')->delete($photo->photo_path);
        }
        $photo->delete();
    }

    public function render()
    {
        return view('livewire.photos-list', ['photos' => Photo::all()]);
    }
}
