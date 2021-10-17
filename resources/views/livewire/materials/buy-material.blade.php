<div>
    <a  class="tool-item hover:text-red-700 hover:text-xl" wire:click="$set('open',true)">
        <span class="block px-1 pt-1 pb-1">
            <i class="fas fa-shopping-cart text-sm pt-1 mb-1 block"></i>
            <span class="block text-xs pb-1">Comprar</span>
        </span>
    </a>
    <x-jet-dialog-modal wire:model="open">
     <x-slot name="title">
        Ingresar Material a Bodega {{$material->name}} 
     </x-slot>
     <x-slot name="content">
        <div>
            <x-jet-label value="Ingrese el proveedor" />
            <x-jet-input type="text" class="w-full form-input my-3" wire:model.defer="provider"/>
          
        </div>
        <div>
            <x-jet-label value="Ingrese el Numero de Factura" />
            <x-jet-input type="text" class="w-full form-input my-3" wire:model.defer="invoice"/>
           
        </div>
        <div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-jet-label value="Ingrese cantidad en {{$material->material_type->dimensional->name}}" />
                    <x-jet-input type="number" class="w-full form-input my-3" placeholder="0" step="0.5" wire:model.defer="quantity"/>
                  
                </div>
                <div>
                    <x-jet-label value="Ingresado por:" />
                    <x-jet-input type="text" class="w-full form-input my-3 text-gray-400" value="{{Auth::user()->name}}" disabled/>
                </div>
            </div>
        </div>
        <div>
            <x-jet-label value="Tipo de Ingreso" />
            <select class="form-input w-full" wire:model="movement_type">
                @foreach ($movement_types as $type)
                    <option value="{{$type->id}}"> {{$type->name}}</option>
                @endforeach
            </select>
       
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('open',false)">
            Cancelar
        </x-jet-secondary-button>
        <x-jet-danger-button wire:click="save">
            Agregar a bodega
        </x-jet-danger-button>
    </x-slot>
    </x-jet-diagol-modal>
</div>
