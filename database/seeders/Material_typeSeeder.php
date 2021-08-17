<?php

namespace Database\Seeders;

use App\Models\Dimensional;
use App\Models\Material_type;
use Illuminate\Database\Seeder;

class Material_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Material_type::create(['name'=>'Alambres','dimensional_id' => Dimensional::DIMENSIONAL_LIBRAS]);
        Material_type::create(['name'=>'Cables','dimensional_id' => Dimensional::DIMENSIONAL_YARDAS]);
        Material_type::create(['name'=>'Espagetis','dimensional_id' => Dimensional::DIMENSIONAL_YARDAS]);
        Material_type::create(['name'=>'Papeles','dimensional_id' => Dimensional::DIMENSIONAL_PLIEGOS]);
        Material_type::create(['name'=>'Cojinetes','dimensional_id' => Dimensional::DIMENSIONAL_UNIDADES]);
        

    }
}
