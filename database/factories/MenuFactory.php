<?php
namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
        $images = [
            '/img/menu/lobster-roll.jpg',
            '/img/menu/greek-salad.jpg',
            '/img/menu/cake.jpg',
            '/img/menu/spinach-salad.jpg',
            '/img/menu/specials-1.png',
        ];
        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 100, 500),
            'image_url' => $this->faker->randomElement($images),
        ];
    }
}
