<?php

namespace App\Http\Livewire\Materials;

use App\Models\Material;
use App\Models\Material_movement;
use App\Models\Material_movements_type;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BuyMaterial extends Component
{
    public $open = false;
    public $material_id,$provider,$invoice,$quantity,$movement_type;
    public $material;
    
    protected $rules = [
        'provider' => 'required',
        'quantity' => 'required|numeric'
    ];

    public function mount()
    {
        $this->material = Material::find($this->material_id);
    }
    public function save()
    {
        $this->validate();
        Material_movement::create([
            'quantity' => $this->quantity,
            'user_id' => Auth::user()->id,
            'material_id' => $this->material->id,
            'material_movements_type_id' => $this->movement_type,
            'invoice' => $this->invoice,
            'provider' => $this->provider
        ]);
        $this->reset(['open','invoice','provider','quantity']);
        $this->emit('render');
        
        $this->emit('alert','Ingresado a Inventatio','Se han agregado los materiales al inventario correctamente');
    }

    public function render()
    {
        $movement_types = Material_movements_type::where('inout',0)->orWhere('inout',2)->get(); //buys
        return view('livewire.materials.buy-material',compact('movement_types'));
    }
}
