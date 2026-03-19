<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        // 1. Borramos el contenido de la carpeta
        Storage::disk('public')->deleteDirectory('posts');
        // 2. La volvemos a crear limpia
        Storage::disk('public')->makeDirectory('posts');


        \App\Models\User::factory()->create([
            'name' => 'Jose',
            'email' => 'jose@jose.com',
            'password' => bcrypt('password'),
        ]);

        Post::factory(100)->create();
    }
}
