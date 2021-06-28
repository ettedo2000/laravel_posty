<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //in terminal run $ php artisan tinker
        // then run for instance >>>> App\Models\Post::factory()->times(100)->create(['user_id' => 1]);
        return [
            'body' => $this->faker->sentence(20),
        ];
    }
}
