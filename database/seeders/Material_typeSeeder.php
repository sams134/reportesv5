<?php

namespace Database\Seeders;

use App\Models\Dimensional;
use App\Models\Material_type;
use App\Models\Image;
use App\Models\Image_type;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class Material_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Material_type::create(['name'=>'Alambres','dimensional_id' => Dimensional::DIMENSIONAL_LIBRAS]);
        Material_type::create(['name'=>'Cables','dimensional_id' => Dimensional::DIMENSIONAL_YARDAS]);
        Material_type::create(['name'=>'Espagetis','dimensional_id' => Dimensional::DIMENSIONAL_YARDAS]);
        Material_type::create(['name'=>'Papeles','dimensional_id' => Dimensional::DIMENSIONAL_PLIEGOS]);
        Material_type::create(['name'=>'Cojinetes','dimensional_id' => Dimensional::DIMENSIONAL_UNIDADES]);
        $directoryName = 'public/materials';
        Storage::deleteDirectory($directoryName);
        Storage::makeDirectory($directoryName,'0777');
        Material_type::all()->each(function ($material) use ($directoryName){
            $faker = Factory::create();
            Image::factory(1)->create([
               
                'url' => $directoryName."/".$faker->image(storage_path('app/public/materials'),640,480,null,null),
               // 'url'=>'nn',
                 'image_type_id' => Image_type::IMAGE_TYPE_MATERIAL,
                 'imageable_id' => $material->id,
                 'imageable_type' => Material_type::class
                 
             ]);
        });
       

    }
}
