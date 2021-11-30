<div class="">
    <div class="" wire:click="$set('open',true)">
       <x-status-badge :job="$job"/>
    </div>
    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Cambiar Estado del Equipo de {{ $job->job_os() }}
        </x-slot>
        <x-slot name="content">
            <div class=" min-h-full" x-data={open:false}>
                <div class=" bg-gray-100 w-4/5 flex justify-between py-3 px-4 rounded-xl" @click="open = !open">
                    {{ $statusName}}
                    <i class="fas fa-chevron-down mt-1"></i>
                </div>
                <ul class=" absolute border-2 border-gray-300 bg-white w-3/4 mx-1 px-1 pr-1 rounded-lg text-sm mt-1"
                x-show="open" @click.away="open=false">
                    @foreach ($statuses as $status)
                        <li class=" bg-white text-base  px-2 hover:bg-gray-200" wire:click="$set('status',{{$status->id}})" x-on:click="open=false"> {{ $status->name }}</li>
                    @endforeach
                </ul>

                <div class="grid grid-cols-2  gap-y-3 mt-5  text-sm px-14">
                    <div class=" text-right border border-blue-900 my-auto px-2 bg-gray-50">
                        Actualizado Por
                    </div>
                    <div class="text-left border my-auto px-2 border-gray-900 ml-1">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="text-right border border-gray-900 my-auto px-2 bg-gray-50">
                        Fecha Cambio de Estado
                    </div>
                    <div class="text-left border my-auto px-2 border-blue-900 ml-1">
                        {{ Carbon\Carbon::now()->format('d/M/Y h:i:s'); }}
                    </div>
                </div>
                <h1 class="mt-5 text-lg">Bitacora de Estados</h1>
                <div class="grid grid-cols-3  gap-y-3  text-sm">
                    @foreach ($job->stat as $status)
                    <div class=" text-right border border-blue-900 my-auto px-2 bg-blue-50">
                        {{Carbon\Carbon::parse($status->pivot->created_at)->format('d/M/Y h:i:s')}}
                    </div>
                    <div class="text-left border my-auto px-2 border-blue-900 ml-1">
                        {{ $status->name }}
                    </div>
                    <div class="text-left border my-auto px-2 border-blue-900 ml-1">
                        {{ $status->pivot->user }}
                    </div>
                    @endforeach
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">
                Cambiar Estado
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
