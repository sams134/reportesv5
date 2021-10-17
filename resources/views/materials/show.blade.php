<!-- component -->
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }

</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<x-app-layout>
    <section style="background-image: url({{ asset('img/home/Essex-Furukawa-Delay-1.jpg') }})"
        class="bg-cover bg-center shadow">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 p-24 ">
            <div class="bg-gray-600 bg-opacity-25 w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">MATERIALES EN BODEGA</h1>
                <P class="text-white text-lg mt-3">Busca o agrega materiales a tus ordenes de servicio</P>
            </div>
    </section>
    <div class="bg-gray-100">
        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-green-400">
                        <div class="image overflow-hidden">
                            @if (isset($material->image->url))
                                <img class="h-auto w-full mx-auto" src="{{ Storage::url($material->image->url) }}">
                            @else
                                <img class="h-auto w-full mx-auto"
                                    src="{{ Storage::url($material->material_type->image->url) }}">
                            @endif

                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $material->name }}</h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">{{ $material->material_type->name }}
                        </h3>
                        <p class=""></p>
                        <textarea name="" id="" cols="30" rows="5"
                            class="text-left resize-none text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</textarea>

                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Estatus</span>
                                @if ($material->existency > 0)
                                    <span class="ml-auto"><span
                                            class="bg-green-500 py-1 px-2 rounded text-white text-sm">En
                                            Bodega</span></span>
                                @else
                                    <span class="ml-auto"><span
                                            class="bg-red-500 py-1 px-2 rounded text-white text-sm">A
                                            pedido</span></span>
                                @endif

                            </li>
                            <li class="flex items-center py-3">
                                <span>Existencia</span>
                                <span class="ml-auto">{{ $material->existency }}
                                    {{ $material->material_type->dimensional->name }}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friends card -->
                    <div class="bg-white p-3 hover:shadow mb-3">
                        <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                            <span class="text-green-500">
                                <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                            <span>Productos Similares</span>

                        </div>
                        <div class="grid grid-cols-2">
                            @foreach ($similar as $mat)

                                <div class="text-center my-2">
                                    @if (isset($material->image->url))
                                        <img class="h-16 w-16 rounded-full mx-auto"
                                            src="{{ Storage::url($mat->image->url) }}">
                                    @else
                                        <img class="h-16 w-16 rounded-full mx-auto"
                                            src="{{ Storage::url($mat->material_type->image->url) }}">
                                    @endif

                                    <a href="#" class="text-main-color text-xs">{{ $mat->name }}</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">

                    <!-- Informacion -->
                    <div class="bg-white p-3 shadow-sm rounded-sm my-4">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Informacion</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Categoría:</div>
                                    <div class="px-4 py-2">
                                        <input type="text" value="{{ $material->material_type->name }}" readonly>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Material:</div>
                                    <div class="px-4 py-2">{{ $material->name }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Marca:</div>
                                    <div class="px-4 py-2">{{ $material->mfg }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Despachado en:</div>
                                    <div class="px-4 py-2">{{ $material->material_type->dimensional->name }}
                                        ({{ $material->material_type->dimensional->abrev }})</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Maximo en Bodega</div>
                                    <div class="px-4 py-2">{{ $material->max }}
                                        ({{ $material->material_type->dimensional->abrev }})</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Minimo en Bodega</div>
                                    <div class="px-4 py-2">{{ $material->min }}
                                        ({{ $material->material_type->dimensional->abrev }})</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Hoja Tecnica</div>
                                    <div class="px-4 py-2">
                                        @if (isset($material->document->url))
                                            <a class="text-blue-800"
                                                href="{{ $material->document->url }}">{{ Str::limit($material->document->url, 20, '...') }}
                                            </a>
                                        @else
                                           No Hay Hoja Tecnica
                                        @endif

                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Existencia</div>
                                    <div class="px-4 py-2">{{ $material->existency }}
                                        ({{ $material->material_type->dimensional->abrev }})</div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 flex">
                            <button
                                class="flex items-center shadow bg-blue-500 px-4 py-2 text-white hover:bg-blue-400 mr-3">
                                <i class="fas fa-shopping-cart mr-3"></i>
                                Ingresar Materiales a Bodega
                            </button>
                            <button
                                class="flex items-center shadow bg-green-500 px-4 py-2 text-white hover:bg-green-400">
                                <i class="fas fa-dolly mr-3"></i>
                                Sacar materiales de bodega
                            </button>
                        </div>
                    </div>
                    <!-- Fin Informacion-->



                    <!-- Ultimas compras y salidas -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">

                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">Ultimas Compras</span>
                                </div>
                                <ul class="list-inside space-y-2">
                                    @if ($material->buys->count())
                                        @foreach ($material->buys->take(5) as $buy)
                                            <li>
                                                <div class="text-teal-600">{{ $buy->material_movements_type->name }}
                                                    {{ $buy->quantity }}
                                                    {{ $buy->material->material_type->dimensional->abrev }} </div>
                                                <div class="text-gray-500 text-sm">Efectuado por:
                                                    {{ $buy->user->name }} </div>
                                                <div class="text-gray-500 text-sm">Factura: {{ $buy->invoice }}
                                                    ({{ $buy->provider }}) </div>
                                                <div class="text-gray-400 text-sm">
                                                    {{ Carbon\Carbon::parse($buy->created_at)->format('d/m/Y') }}
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        Ningun movimiento
                                    @endif



                                </ul>
                            </div>
                            <div>
                                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                    <span clas="text-green-500">
                                        <i class="fas fa-dolly mr-2"></i>
                                    </span>
                                    <span class="tracking-wide">Ultimas Salidas</span>
                                </div>
                                <ul class="list-inside space-y-2">
                                    @if ($material->delivers->count())
                                        @foreach ($material->delivers->take(5) as $buy)
                                            <li>
                                                <div class="text-teal-600">{{ $buy->material_movements_type->name }}
                                                    {{ $buy->order->job->job_os() }} ({{ $buy->quantity }}
                                                    {{ $buy->material->material_type->dimensional->abrev }}) </div>
                                                <div class="text-gray-500 text-sm">Solicitado Por:
                                                    {{ $buy->user->name }} </div>
                                                <div class="text-gray-500 text-sm">Cliente:
                                                    {{ $buy->order->job->customer->name }} </div>
                                                <div class="text-gray-400 text-sm">
                                                    {{ Carbon\Carbon::parse($buy->created_at)->format('d/m/Y') }}
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        Ningun movimiento
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- Fin Ultimas compras y salidas -->
                    <!--Cardex -->
                    <div class="bg-white p-3 shadow-sm rounded-sm mt-5">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">Cardex</span>

                            <!-- This example requires Tailwind CSS v2.0+ -->
                        </div>

                        @livewire('materials.cardex', ['material_id' => $material->id])
                    </div>
                    <!-- fin cardex -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
