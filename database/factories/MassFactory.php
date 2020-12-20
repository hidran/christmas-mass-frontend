<?php

namespace Database\Factories;

use App\Models\Mass;
use Illuminate\Database\Eloquent\Factories\Factory;

class MassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=> $this->faker->text(60),
            'max' => 80,
            'booked' => 5
        ];
    }
}
