<?php

namespace Database\Seeders;

use App\Models\Doc_type;
use Illuminate\Database\Seeder;

class Doc_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Doc_type::create(['id'=>1,'name' => 'Datasheet']);
        Doc_type::create(['id'=>2,'name' => 'Densidades']);
        
    }
}
