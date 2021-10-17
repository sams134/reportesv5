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
        Material_movements_type::create(['id' => 1,'name'=>'Inicio Inventario','inout'=>0]);
        Material_movements_type::create(['id' => 2,'name'=>'Compra','inout'=>0]);
        Material_movements_type::create(['id' => 3,'name'=>'Compra Consignacion','inout'=>0]);
        Material_movements_type::create(['id' => 4,'name'=>'Venta','inout'=>1]);
        Material_movements_type::create(['id' => 5,'name'=>'Despacho a OS','inout'=>1]);
        Material_movements_type::create(['id' => 6,'name'=>'Despacho a consumibles','inout'=>1]);
        Material_movements_type::create(['id' => 7,'name'=>'Devolucion','inout'=>1]);
        Material_movements_type::create(['id' => 8,'name'=>'Otro','inout'=>2]);
    }
}
