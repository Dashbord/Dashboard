<?php

namespace Database\Factories;

use App\Models\Call;
use Illuminate\Database\Eloquent\Factories\Factory;

class CallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Call::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time'=> $this->faker->dateTime(),
            'duration'=> $this->faker->time(),
            'reply_time'=> $this->faker->time(),
            'satisfaction_score'=> $this->faker->randomDigitNot(3,4,5,6,7,8,9,0),
            'collaborator'=> $this->faker->name(),
        ];
    }
}
