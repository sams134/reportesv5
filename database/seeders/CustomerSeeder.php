<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::create([
            'name' => 'Cliente 1',
            'business_name' => 'Cliente 1',
            'nit' => 'C/F',
            'address' => 'ciudad',
            'plant_address' => 'ciudad',
            'industry_id' => 1,
        ]);
    }
}
