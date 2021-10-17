<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            //
            'quantity' => floor(random_int(1,500)/100)*2,
            'flag' => $this->faker->randomElement([Order::FLAG_NORMAL,Order::FLAG_UNUSUAL,1,1,1,1,1,1,1,1,1,1]),
            'material_id' => Material::all()->random()->id,
            
        ];
       
    }
}
