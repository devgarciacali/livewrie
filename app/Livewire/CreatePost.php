<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = true;
    public $title, $content, $image, $indetificator;

    public function mount()
    {
        // inicializamos el indetificator con un numero aleatorio
        $this->indetificator = rand();
    }


    // reglas de validacion
    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
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
            'image.required' => 'Tienes que subir una imagen',
            'image.image' => 'El archivo debe ser una imagen',
            'image.mimes' => 'El archivo debe ser una imagen',
            'image.max' => 'El archivo debe ser una imagen de menos de 4MB',
        ]);

        $image = $this->image->store('posts');

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $image
        ]);

        $this->reset([
            'open',
            'title',
            'content',
            'image'
        ]);

        $this->indetificator = rand();

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
