<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'coupling' => rand(1,3),'conection_box' => rand(1,3),
            'box_cover' => rand(1,3),'vent_cover' => rand(1,3),'vent' => rand(1,3),
            'terminal_block' => rand(1,3),'key' => rand(1,3),
            'grease_point' => rand(1,3),'eyebolts' => rand(1,3),
            'nameplate' => rand(1,3),'capacitor' => rand(1,3),
            'bolts' => rand(1,3),'comments' => $this->faker->sentence(10)
        ];
    }
}
