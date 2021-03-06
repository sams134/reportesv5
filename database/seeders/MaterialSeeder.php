<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Material;
use App\Models\Material_type;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //alambres
        $wireTypes = ['GP-MR200','UltraShield Plus'];
        foreach($wireTypes as $wires)
        {
            for($i=8;$i<33;$i++)
                Material::create([
                    'name' => $wires." AWG # ".$i,
                    'mfg'  => 'Essex',
                    'price' =>  68.5,
                    'min' => 0,
                    'max' => 20,
                    'material_type_id' => 1 // alambre
                ])->each(function ($wire){
                    Document::create([
                        'name' => 'Datasheet',
                        'url' => 'https://www.essexbrownell.com/media/cms_content/downloads_links/Essex-Wire-Datasheet-GPMR-200-EN-062020.pdf',
                        'documentable_id' => $wire->id,
                        'documentable_type' => Material::class,
                        'doc_type_id' => 1
                    ]);
                });
        }
        // espagetis
        for($i=6;$i<22;$i++)
                Material::create([
                    'name' => "Espagetti calibre ".$i,
                    'mfg'  => 'Atkins & Pearce',
                    'price' =>  15,
                    'min' => 0,
                    'max' => 20,
                    'material_type_id' => 3 // espagetis
                ]);
    }
}
