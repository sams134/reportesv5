<div>
    <section style="background-image: url({{ asset('img/home/Essex-Furukawa-Delay-1.jpg') }})"
        class="bg-cover bg-center shadow">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 p-24 ">
            <div class="bg-gray-600 bg-opacity-25 w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">MATERIALES EN BODEGA</h1>
                <P class="text-white text-lg mt-3">Busca o agrega materiales a tus ordenes de servicio</P>
            </div>
    </section>


    {{-- tool bar --}}
    <div class=" bg-gray-200 py-4 mt-8 mb-2">
        <div class=" max-w-full mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button
                class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 ">
                <i class="fas fa-plus-square"></i>
                Crear nuevo Material
            </button>
            <button
                class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 "
                wire:click="resetFilters">
                <i class="fas fa-plus-square"></i>
                Ver Todos
            </button>
            <!-- dropdown estatus -->
            {{$material_type_id}}
            <div class="relative inline-block text-left hidden sm:block" x-data="{open:false}">
                <div>

                    <button
                        class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 "
                        x-on:click="open=!open">
                        <i class="fas fa-folder-open"></i>
                        @if ($material_type_id != null)
                            {{ $material_type_name }}
                        @else
                            Tipos de Materiales
                        @endif

                        <!-- Heroicon name: solid/chevron-down -->
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show="open"
                    x-on:click.away="open=false">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        @foreach ($material_types as $types)
                            <a class=" cursor-pointer text-gray-700 block px-4 py-2 text-sm hover:bg-blue-100"
                                role="menuitem" tabindex="-1" id="menu-item-0"
                                wire:click="changeMaterialType({{ $types->id }})" x-on:click="open=false">
                                {{ $types->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- component -->

            </div>

        </div>
    </div>

    <div class="p-2 px-14">
        {{$material_like}}
        <div class="bg-white flex items-center rounded-full shadow-xl">
            <input wire:model="material_like"
                class="rounded-l-full w-full py-2 px-6 text-gray-700  text-lg focus:outline-none" id="search"
                type="text" placeholder="Busque materiales...">

            <div class="p-1">
                <button
                    class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="container">
        {{ $materials->links() }}
    </div>

    @if ($materials->count())
        <x-material-table>
            <table class="min-w-full divide-y divide-gray-200 mt-2 table-fixed">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4
                             cursor-pointer hover:text-blue-700 " wire:click="order('name')">
                            Nombre Material
                            
                            @if ($sort == 'name')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-down  float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt  float-right mt-1"></i>
                                @endif
                            @else
                               <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6 
                            cursor-pointer hover:text-blue-700  focus:text-blue-900 hidden md:table-cell "
                            wire:click="order('mfg')">
                            Marca
                            
                            @if ($sort == 'mfg')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-down  float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                               <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6  hidden sm:table-cell">
                            Existencia
                        </th>

                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell w-1/6 ">
                            Max
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell w-1/6 ">
                            Min
                        </th>

                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($materials as $material)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @if (isset($material->image->url))
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ Storage::url($material->image->url) }}" alt="">
                                        @else
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ Storage::url($material->material_type->image->url) }}" alt="">
                                        @endif

                                    </div>
                                    <div class="ml-4">
                                        <a href="{{ route('materials.show', $material) }}" class="group">
                                            <div class="text-sm font-medium text-gray-900 group-hover:text-blue-600">
                                                {{ $material->material_type->name }}
                                            </div>
                                            <div class="text-sm text-gray-500 group-hover:text-blue-600">
                                                {{ $material->name }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                                <div class="text-sm text-gray-900">{{ $material->mfg }}</div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                @if ($material->existency < $material->min)
                                    <span class=" bg-red-200 text-red-700 py-1 px-3 rounded-full text-xs shadow-sm">
                                        {{ $material->existency }}
                                        {{ $material->material_type->dimensional->abrev }} Solicitar Compra
                                    </span>
                                @else
                                    {{ $material->existency }}
                                    {{ $material->material_type->dimensional->abrev }}
                                @endif

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                {{ $material->max }} {{ $material->material_type->dimensional->abrev }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                {{ $material->min }} {{ $material->material_type->dimensional->abrev }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium flex items-end">
                                
                              @livewire('materials.buy-material',['material_id'=>$material->id], key($material->id))
                             
                                <a href="#" class="tool-item hover:text-green-700 hover:text-xl">
                                    <span class="block px-1 pt-1 pb-1">
                                        <i class="fas fa-dolly text-sm pt-1 mb-1 block"></i>
                                        <span class="block text-xs pb-1">Entregar</span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                    <!-- More people... -->
                </tbody>
            </table>
        </x-material-table>
    @else
        <div class="container"> No Existe ningun material con ese nombre</div>
    @endif

</div>
