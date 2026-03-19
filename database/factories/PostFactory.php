<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generamos una ID aleatoria para que cada imagen sea distinta
        $randomId = rand(1, 1000);
        // Generamos una URL con la ID aleatoria y la imagen aleatoria
        $url = "https://picsum.photos/640/480?random={$randomId}";

        $imageName = 'post_' . uniqid() . '.jpg';
        $path = storage_path('app/public/posts/' . $imageName);

        // Intentamos descargar la imagen manualmente
        try {
            file_put_contents($path, file_get_contents($url));
        } catch (\Exception $e) {
            // Si falla el internet, crea un archivo de texto para que no truene
            file_put_contents($path, 'error');
        }

        return [
            'title' => fake()->sentence(),
            'content' => fake()->text(),

            'image' => 'posts/' . $imageName,
        ];
    }
}
