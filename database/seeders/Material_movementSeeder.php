<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\Material_movement;
use Illuminate\Database\Seeder;

class Material_movementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Compras
        Material::all()->each(function ($material){
            Material_movement::factory(4)->create([
                'material_id' => $material->id,
                'material_movements_type_id' => random_int(1,3)
            ]);
        });
        Material::all()->each(function ($material){
            Material_movement::factory(random_int(0,6))->create([
                'material_id' => $material->id,
                'material_movements_type_id' => random_int(1,3)
            ]);
        });

        //salidas
        
    }
}
