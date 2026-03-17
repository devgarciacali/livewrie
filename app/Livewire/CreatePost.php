<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;


class CreatePost extends Component
{   

    public $open = true;
    public $title, $content;

    // reglas de validacion
    protected $rules = [
        'title' => 'required',
        'content' => 'required'    
    ];

    // metodo para validar los campos cuando cambian el valor en el input o textarea
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }


    // metodo para guardar el post
    public function save()
    {
        $this->validate($this->rules, [
            'title.required' => 'El titulo no tiene que estar vacio',
            'content.required' => 'El contenido no tiene que estar vacio',
        ]);

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
