<?php
namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        $images = [
            '/img/menu/lobster-roll.jpg',
            '/img/menu/greek-salad.jpg',
            '/img/menu/cake.jpg',
            '/img/menu/spinach-salad.jpg',
            '/img/menu/specials-1.png',
        ];
        $title = $this->faker->sentence(6);
        $body = $this->faker->paragraph(6);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->randomNumber(5),
            'excerpt' => $this->faker->sentence(15),
            'body' => $body,
            'content' => $body,
            'image_url' => $this->faker->randomElement($images),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
