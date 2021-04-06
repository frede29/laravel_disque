<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class TopicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


            return [
        'title'=>$this->faker->sentence,
        'content'=>$this->faker->paragraph,
        'user_id'=>User::factory(),

    ];

        }
}
