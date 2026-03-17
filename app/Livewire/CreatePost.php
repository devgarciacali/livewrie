<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;


class CreatePost extends Component
{   

    public $open = false;
    public $title, $content;

    // metodo para guardar el post
    public function save()
    {

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->reset([
            'open',
            'title',
            'content'
        ]);
        
        // EVENTO PARA MOSTRAR UNA ALERTA

        $this->dispatch('alert', 'El post ha sido creado correctamente');

        // evento para recargar la vista y renderizar el componente
        $this->dispatch('render')->to('show-posts');

    }  


    public function render()
    {
        return view('livewire.create-post');
    }
}
