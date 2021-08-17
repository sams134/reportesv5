<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Customer;
use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Industry::create(['name'=>'No Definido']);
        Industry::create(['name'=>'Alimenticia']);
        Industry::create(['name'=>'Azucarera']);
        Industry::create(['name'=>'Cementera']);
        Industry::create(['name'=>'Energia']);
        Industry::create(['name'=>'Plastica']);
        Industry::create(['name'=>'Mineria']);
        Industry::create(['name'=>'Papelera']);
        Industry::create(['name'=>'Construccion']);
        Industry::create(['name'=>'Otro']);

        Industry::all()->each(function($industry) {
            Customer::factory(15)->create(['industry_id' => $industry->id])
                ->each(function($customer){
                   Contact::factory(2)->create(['customer_id'=>$customer->id]);
                   
                });
        });
    }
}
