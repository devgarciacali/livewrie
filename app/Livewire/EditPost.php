<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class EditPost extends Component
{  
    use WithFileUploads;

    public $post;
    public $open = false;

    public $title, $content, $image, $indetificator;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->indetificator = rand();
    }

    public function save()
    {
        $this->validate();

        $this->post->title = $this->title;
        $this->post->content = $this->content;
    
        if ($this->image) {
            Storage::delete([$this->post->image]);

            $this->post->image = $this->image->store('posts');
        }

        $this->post->save();

        $this->reset(['open', 'image']);
    
        $this->indetificator = rand();

        $this->dispatch('render')->to('show-posts');
        $this->dispatch('alert', 'Post actualizado correctamente');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
