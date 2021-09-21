<?php

namespace Database\Seeders;

use App\Models\Dimensional;
use Illuminate\Database\Seeder;

class DimensionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_UNIDADES, 'name' => 'Unidades', 'abrev' => 'Un']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_PIES, 'name' => 'Pies', 'abrev' => 'ft']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_METROS, 'name' => 'Metros', 'abrev' => 'm']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_YARDAS, 'name' => 'Yardas', 'abrev' => 'Yd']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_GALONES, 'name' => 'Galones', 'abrev' => 'gal']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_MILIMETROS, 'name' => 'Milimetros', 'abrev' => 'mm']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_PULGADAS, 'name' => 'Unidades', 'abrev' => 'pulg']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_BOTES, 'name' => 'Botes', 'abrev' => 'Botes']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_LIBRAS, 'name' => 'Libras', 'abrev' => 'lb']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_KILOGRAMOS, 'name' => 'Kilogramos', 'abrev' => 'Kg']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_GRAMOS, 'name' => 'Unidades', 'abrev' => 'g']);
        Dimensional::create(['id' => Dimensional::DIMENSIONAL_PLIEGOS, 'name' => 'Pliegos', 'abrev' => 'pliegos']);
    }
}
