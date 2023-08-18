<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = false;
    
    public $title, $content, $image, $identificador;

    public function mount(){
        $this->identificador = rand();
    }

    public function updatingOpen(){
        if( $this->open) {
            $this->reset(['title', 'content', 'image']);
            $this->identificador = rand();
            $this->emit('resetCKeditor');
            $this->resetErrorBag();
        }
        
    }

    protected $rules = [
        // 'title' => 'required|max:10',
        // 'content' => 'required|min:100'
        'title' => 'required',
        'content' => 'required',
        'image' => 'required|image|max:2048'
    ];

    // verificar la actualizaron con la propiedad wire:modal.defer en el name title del modal, render cada vez que cambie la propiedad
    // public function updated($propertyName){
    //     $this->validateOnly($propertyName);
    // }
    
    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(){
    
        $this->validate();
        
        $image = $this->image->store('public/posts');
    
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => substr($image, 7)
        ]);
    
        $this->reset(['open', 'title', 'content', 'image']);
        $this->identificador = rand();
    
        $this->emitTo('show-posts','render');
        $this->emit('alert', 'Es post se creó satisfactoriamente');
    }
}
