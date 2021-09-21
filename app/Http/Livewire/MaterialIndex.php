<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Material_type;
use Livewire\Component;

class MaterialIndex extends Component
{
    public $material_type_id;
    public function render()
    {
        $materials = Material::query()
                            ->material_type($this->material_type_id)
                            ->paginate(20);
        $material_types = Material_type::all();
        return view('livewire.material-index',compact('materials','material_types'));
    }
}
