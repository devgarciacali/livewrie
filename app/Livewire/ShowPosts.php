<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;

    public function render()
    {
        $posts = Post::where('id', 'like', '%' . $this->search . '%')
            ->orWhere('title', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.show-posts', compact('posts'))
            ->layout('layouts.app');
    }
}
