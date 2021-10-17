<?php

namespace App\Http\Livewire\Materials;

use App\Models\Material;
use Livewire\Component;

class Cardex extends Component
{
    public $material_id;
    public function mount()
    {
        
    }
    public function render()
    {
        $material = Material::find($this->material_id);
        return view('livewire.materials.cardex',compact('material'));
    }
}
