<?php

namespace Database\Factories;

use App\Models\Course;
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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'free' => $this->faker->boolean,
            'course_id' => Course::query()->inRandomOrder()->value('id')
        ];
    }
}
