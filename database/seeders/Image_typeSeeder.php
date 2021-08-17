<?php

namespace Database\Seeders;

use App\Models\Image_type;
use Illuminate\Database\Seeder;

class Image_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Image_type::create(['id' => 1,'name' => 'Job Front']);
        Image_type::create(['id' => 2,'name' => 'Job']);
    }
}
