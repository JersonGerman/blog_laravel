<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditPost extends Component
{
    use WithFileUploads;

    public $open = false;
    public $post, $image, $identificador;

    protected $rules = [
        'post.title' => 'required',
        'post.content' => 'required',
    ];

    public function mount(Post $post) {
        $this->post = $post;        
        $this->identificador = rand();
    }

    public function save(){
        $this->validate();
        
        if ($this->image) {
            Storage::delete([$this->post->image]);
            $image = substr($this->image->store('public/posts'), 7);
            $this->post->image = $image;
        }
        
        $this->post->save();

        $this->reset(['open', 'image']);
        $this->identificador = rand();
        
        $this->emitTo('show-posts', 'render');

        $this->emit('alert', 'El post se actualizó satisfactoriamente');
    }
    
    public function render()
    {
        return view('livewire.edit-post');
    }
}
