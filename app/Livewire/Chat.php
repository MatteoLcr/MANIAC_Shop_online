<?php

namespace App\Livewire;

use App\Models\Cloth;
use Livewire\Component;
use App\Models\Category;
use OpenAI\Laravel\Facades\OpenAI;

class Chat extends Component
{
    public $prompt = '';
    public $conversationMessages = []; 
    public $products;
    public $categories;

    public function ask()
    {

        $this->conversationMessages[] = [
            'role' => 'user',
            'content' => $this->prompt,
        ];  

        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => $this->conversationMessages
        ]);
        
        $this->conversationMessages[] = [
            'role' => 'assistant',
            'content' => $result->choices[0]->message->content,
        ];  

        $this->prompt = '';
    }
    public function mount() {

        $this->products = Cloth::all();
        $this->categories = Category::all();

        $this->conversationMessages[] = [
            'role' => 'system',
            'content' => "sei una shop assistant di maniac. ecco la lista dei prodotti: $this->products. abbiamo queste categorie: $this->categories. \n "
        ];
    }




    public function render()
    {
        return view('livewire.chat');
    }
}
