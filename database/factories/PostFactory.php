<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'author'=> $this->faker->name,
            'user_id'=> User::inRandomOrder()->first()->id,
            'status' =>$this->faker->numberBetween(1,3)
        ];
        
    }
}
