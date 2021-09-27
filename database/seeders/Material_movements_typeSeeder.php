<?php

namespace Database\Seeders;

use App\Models\Material_movements_type;
use Illuminate\Database\Seeder;

class Material_movements_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Material_movements_type::create(['id' => 1,'name'=>'Compra']);
        Material_movements_type::create(['id' => 2,'name'=>'Compra Consignacion']);
        Material_movements_type::create(['id' => 3,'name'=>'Venta']);
        Material_movements_type::create(['id' => 4,'name'=>'Despacho a OS']);
        Material_movements_type::create(['id' => 5,'name'=>'Despacho a consumibles']);
        Material_movements_type::create(['id' => 6,'name'=>'Otro']);
    }
}
