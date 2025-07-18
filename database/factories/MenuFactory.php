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
        $names = [
            'Chapati Wrap + Juice',
            'Rice Bowl + Free Water',
            'Smoothie Combo',
            'Spinach Salad',
            'Cake Slice',
            'Lobster Roll',
            'Greek Salad',
            'Specials Drink',
        ];
        $descriptions = [
            'Quick, filling, and budget-friendly. Perfect for busy students.',
            'Power up for study sessions with a hearty rice bowl and free water.',
            'Fresh fruit, blended to order. Stay refreshed on campus.',
            'Nutritious spinach salad for a healthy lunch or dinner.',
            'Sweet treat to finish your meal—student favorite!',
            'A campus classic, packed with flavor and protein.',
            'Crisp veggies, feta, and olives—Mediterranean delight.',
            'Juices & sodas—stay hydrated and energized all day.',
        ];
        $index = $this->faker->numberBetween(0, count($names) - 1);
        $prices = [120, 150, 200, 180, 80, 250, 170, 100];
        return [
            'name' => $names[$index],
            'description' => $descriptions[$index],
            'price' => $prices[$index],
            'image_url' => $images[$index % count($images)],
        ];
    }
}
