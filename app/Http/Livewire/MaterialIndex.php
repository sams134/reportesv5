<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Material_type;
use Livewire\Component;

class MaterialIndex extends Component
{
    public $material_type_id;
    public $material_type_name=null;
    public $material_like;

    public function render()
    {
        
        $materials = Material::query()
                            ->material_type($this->material_type_id)
                            ->material_like($this->material_like)
                            ->paginate(20);
        $material_types = Material_type::all();    
        if ($this->material_type_id != null)
            $this->material_type_name = Material_type::find($this->material_type_id)->name;
        
        return view('livewire.material-index',compact('material_types','materials'));
    }
    public function changeMaterialType($material_type_id)
    {
        $this->material_type_id = $material_type_id;
    
       $this->render();
    
    }
    public function resetFilters()
    {
        $this->reset(['material_type_id','material_like','material_type_name']);
    }
}
