<?php

namespace App\Livewire;

use App\Models\Cloth;
use Livewire\Component;

class ClothDelete extends Component
{
    public $cloth;
    public function clothDelete(Cloth $cloth){
        $cloth->categories()->detach($cloth->categories);
        $cloth->sizes()->detach($cloth->sizes);
        $cloth->colors()->detach($cloth->colors);
        $cloth->delete();
        session()->flash('success','cancellato con successo!');
    }

    public function render()
    {
        return view('livewire.cloth-delete');
    }
}
