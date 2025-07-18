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
        $titles = [
            'Top Brain Foods for Strathmore Students',
            'How to Save Money on Campus Meals',
            'Quick & Healthy Lunches for Busy Students',
            'Meal Deal Monday: Best Bites This Week',
            'Smoothie Combos to Power Your Study Sessions',
            'Chapati Wraps: The Ultimate Grab-and-Go',
            'CampusBite Rewards: How to Get Free Snacks',
            'Staying Refreshed: Juices & Drinks on Campus',
            'First Order Tips: How to Get 10% Off',
            'Why Students Love CampusBite Delivery',
        ];
        $title = $this->faker->randomElement($titles);
        $excerpts = [
            'Discover the best foods to boost your focus and energy for exams.',
            'Learn how to eat well on a student budget with CampusBite deals.',
            'Healthy, affordable lunches you can order in minutes.',
            'Check out this week’s top meal deals and save big.',
            'Blend up your day with our fresh fruit smoothie combos.',
            'Why chapati wraps are the #1 choice for busy students.',
            'Earn free snacks and perks with every order—see how!',
            'Stay hydrated and refreshed with our campus drink menu.',
            'Use code FIRST10 for instant savings on your first order.',
            'Fast, friendly delivery—see why students choose CampusBite.',
        ];
        $excerpt = $this->faker->randomElement($excerpts);
        $bodies = [
            'CampusBite brings you the best brain foods for students: eggs, spinach, chapati wraps, and fresh smoothies. Power up for your next exam with our affordable menu.',
            'Stretch your student budget with CampusBite’s daily deals, meal combos, and flash discounts. Sign up for exclusive offers and never miss a Meal Deal Monday.',
            'Busy day? Order a rice bowl, chapati wrap, or smoothie combo for a quick, healthy lunch delivered right to campus. Save time and eat smart with CampusBite.',
            'Every Monday, CampusBite features new meal deals—chapati wraps, rice bowls, and more. Check the app for this week’s best bites and save on your favorites.',
            'Our smoothie combos are made with fresh fruit, blended to order. Perfect for study sessions or a post-class pick-me-up. Try the Mango Power or Berry Boost today.',
            'Chapati wraps are the ultimate grab-and-go meal for Strathmore students. Packed with flavor, easy to eat between classes, and always affordable.',
            'Order three times and get a free snack! CampusBite rewards loyal students with milestone perks, flash discounts, and healthy eating tips.',
            'From fresh juices to sodas, CampusBite keeps you refreshed on campus. Add a drink to any meal and stay hydrated all day.',
            'First time ordering? Use code FIRST10 for 10% off. Sign up for our newsletter to get weekly deals and free soda offers.',
            'CampusBite delivers fast, friendly service to Strathmore students. See why our menu, deals, and delivery make us the top choice on campus.',
        ];
        $body = $this->faker->randomElement($bodies);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->randomNumber(5),
            'excerpt' => $excerpt,
            'body' => $body,
            'content' => $body,
            'image_url' => $this->faker->randomElement($images),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
