<?php

namespace App\Livewire;

use App\Models\Cloth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ClothCreateForm extends Component
{
    use WithFileUploads;

    #[Validate]
    public $name;
    #[Validate]
    public $description;
    #[Validate]
    public $price;
    // fare la funzione di salvataggio
    public $image;

    public $selectedCategories = [];
    public $selectedSizes = [];
    public $selectedColor = [];


    public function rules() 
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'price' => 'required|min:3',
        ];
    }
 
    public function messages() 
    {
        return [
            'content.required' => 'The :attribute are missing.',
            'content.min' => 'The :attribute is too short.',
        ];
    }

    public function storeCloth()
    {
        $this->validate();

        $cloth = Cloth::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            'image'=>$this->image->store('image','public'),
            'user_id'=> Auth::id()
        ]);
        $cloth->categories()->attach($this->selectedCategories);
        $cloth->sizes()->attach($this->selectedSizes);
        $cloth->colors()->attach($this->selectedColor);

        session()->flash('success','Article created');
        $this->reset();
    }

    public function render()
    {    
        return view('livewire.cloth-create-form');
    }
}
