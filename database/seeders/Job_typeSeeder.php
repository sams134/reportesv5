<?php

namespace Database\Seeders;

use App\Models\Job_type;
use Illuminate\Database\Seeder;

class Job_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job_type::create(['name'=>'Rebobinado']);
        Job_type::create(['name'=>'Mantenimiento']);
        Job_type::create(['name'=>'Balanceo']);
        Job_type::create(['name'=>'Encamisado']);
        Job_type::create(['name'=>'Metalizado']);
        Job_type::create(['name'=>'Pruebas']);
        Job_type::create(['name'=>'Diagnostico']);
        Job_type::create(['name'=>'Fabricacion en torno']);
        Job_type::create(['name'=>'Otro']);
    }
}
