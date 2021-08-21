<?php

namespace Database\Seeders;

use App\Models\Dimensional;
use App\Models\Material_type;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('public/jobs');
        Storage::makeDirectory('public/jobs','0777');
        
        $this->call(UserSeeder::class);
        $this->call(IndustrySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(Image_typeSeeder::class);
        $this->call(Job_typeSeeder::class);
        $this->call(JobSeeder::class);
        
        $this->call(DimensionalSeeder::class);
        $this->call(Material_typeSeeder::class);
        $this->call(MaterialSeeder::class);

    }
}
