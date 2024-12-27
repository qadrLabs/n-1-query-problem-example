<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(), // Menghasilkan judul berupa kalimat
            'content' => $this->faker->paragraphs(3, true), // Menghasilkan konten berupa 3 paragraf
            'slug' => $this->faker->unique()->slug(), // Slug yang unik
            'status' => $this->faker->randomElement([0, 1]), // Status berupa 0 atau 1
            'created_at' => Carbon::now()->subDays(rand(1, 30)), // Tanggal pembuatan acak dalam 30 hari terakhir
            'updated_at' => Carbon::now(), // Tanggal update sekarang
            'category_id' => Category::factory(), // Membuat kategori terkait
        ];
    }
}
