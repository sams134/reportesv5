<?php

namespace Database\Factories;

use App\Models\Material_movement;
use Illuminate\Database\Eloquent\Factories\Factory;

class Material_movementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material_movement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'quantity' => floor(random_int(1,500)/100)*10,
            'invoice' => $this->faker->bothify("Fact: ######"),
            'provider' => $this->faker->randomElement(['ERA','SEL','NILS PIRA','GRUPO AGINT','EIS']),
            'user_id' => 5,

        ];
    }
}
