<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create(['name' => 'Sin Asignar']);
        Status::create(['name' => 'Diagnostico']);
        Status::create(['name' => 'Trabajando']);
        Status::create(['name' => 'Finalizado']);
        Status::create(['name' => 'EPF']);
        Status::create(['name' => 'Facturado']);
        Status::create(['name' => 'Pagado']);

    }
}
