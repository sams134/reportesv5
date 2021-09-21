<x-app-layout>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<style>
   
</style>

    <section class=" bg-gray-700 py-2 ">
        <div class="container grid grid-cols-1 sm:grid-cols-5 xl:grid-cols-3 gap-3">
            <section class="wrapper_carousel flex flex-col justify-center w-full col-span-1 sm:col-span-3 xl:col-span-2 bg-gray-700"  role="region" aria-label="testimonial carousel">
                <div class=" relative overflow-hidden flex items-center justify-center w-full mt-1 mb-1 ">
                    @foreach ($job->front_images as $image)
                    <div class="carousel-item  rounded-3xl shadow border-gray-500 border-1 my-8 mx-2 max-w-2xl" role="group" aria-label="slide 1 of 5">
                        <img src="{{Storage::url($image->url)}}" class="  rounded-3xl w-full object-cover shadow-2xl " >
                    </div>
                    @endforeach        
                </div>
                <div class="carousel-indicators flex items-center"></div>
            
                <div class="carousel-controls flex justify-end  " aria-label="carousel controls">
                    <button type="button" class="button_carousel-prev " aria-label="previous"><i class="fas fa-caret-left text-gray-100 text-xl"></i></button>
                    <button type="button" class="button_carousel-next ml-1" aria-label="next"><i class="fas fa-caret-right text-gray-100"></i></button>
                </div>
            
            </section>
            <div class="w-full  col-span-1 sm:col-span-2 xl:col-span-1 sm:py-8  "> 
                <div class="grid grid-cols-2 my-2">
                    <p class=" col-span-2 text-gray-300 text-2xl font-semibold uppercase"> {{$job->customer->name}}</p>
                    <p class=" text-4xl  col-span-2 text-gray-200">{{$job->job_os()}}</p>
                    <p class=" text-gray-400 mb-4 col-span-2"> {{$job->job_type->name}}</p>

                    
                    <p class=" text-sm sm:text-xs  ml-2 mb-2 bg-gray-800 rounded-3xl p-2 lg:p-3 text-gray-100 col-span-2 lg:col-span-1"> 
                        <i class="fas fa-atom mr-1 font-extralight text-yellow-400"></i>
                        <span class=" font-semibold">Potencia:</span>
                        {{$job->power_dimensional()}}
                    </p>
                    <p class=" text-sm sm:text-xs  ml-2 mb-2 bg-gray-800 rounded-3xl p-2 lg:p-3 text-gray-100 col-span-2 lg:col-span-1"> 
                        <i class="fas fa-tachometer-alt mr-1 font-extralight text-yellow-400"></i>
                        <span class=" font-semibold">Rpm:</span>
                        {{$job->rpm}}
                    </p>
                    <p class=" text-sm sm:text-xs  ml-2 mb-2 bg-gray-800 rounded-3xl p-2 lg:p-3 text-gray-100 col-span-2 lg:col-span-1"> 
                        <i class="fas fas fa-address-card mr-1 font-extralight text-yellow-400"></i>
                        <span class=" font-semibold">Marca:</span>
                        {{$job->mfg}}
                    </p>
                    <p class=" text-sm sm:text-xs  ml-2 mb-2 bg-gray-800 rounded-3xl p-2 lg:p-3 text-gray-100 col-span-2 lg:col-span-1 inline-block sm:invisible md:visible "> 
                        <i class="fas fa-bolt mr-1 font-extralight text-yellow-400"></i>
                        <span class=" font-semibold">Voltaje:</span>
                        {{$job->volts}}  {{$job->acdc==1?"VAC":"VDC"}}
                    </p>
                    <p class=" text-sm sm:text-xs  ml-2 mb-2 bg-gray-800 rounded-3xl p-2 lg:p-3 text-gray-100 col-span-2 lg:col-span-1 inline-block sm:invisible md:visible "> 
                        <i class="fas fa-bolt mr-1 font-extralight text-yellow-400"></i>
                        <span class=" font-semibold">Amperaje:</span>
                        {{$job->amps}} A
                    </p>
                    
                </div>
                <div class=" col-span-2 text-xs hidden lg:block">
                    <div class="grid grid-cols-2 gap-1">
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Serie:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->serial}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Modelo:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->model}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Frame:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->frame}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Hz:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->hz}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Eficiencia:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->eff}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Insul Cl:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->insul}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">PF:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->pf}}</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Fases:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">F</p>
                        </div>
                        <div class=" rounded-2xl bg-gray-800 grid grid-cols-3 px-1">
                            <p class="p-1  text-gray-400 font-bold ">Factor Servicio:</p>
                            <p class=" col-span-2 p-1 text-gray-50 border-gray-500">{{$job->sf}}</p>
                        </div>

                    </div>
                </div>
                <div class=" col-span-2 shadow-xl bg-gray-900 text-yellow-400 mt-3 p-3 text-center rounded-md">
                    <i class="fas fa-exclamation-triangle"></i>
                    Trabaja con Variador
                </div>
            </div>
        </div>
        <section>
            <div class="container grid grid-cols-1 md:@if($job->date_delivered == null) grid-cols-2 @else grid-cols-3 @endif gap-3 my-1 ">
                <div class="grid grid-cols-1 lg:grid-cols-2 bg-gray-900 rounded px-4 py-2 justify-center">
                    <h2 class="text-sm sm:text-base text-gray-400">
                        <i class="fas fa-calendar-alt text-yellow-400 mr-1"></i>
                        Fecha Ingreso:</h2>
                    <h2 class=" text-sm  sm:text-base text-gray-300 ">{{Carbon\Carbon::parse($job->date_received)->format('d/m/Y')}}</h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 bg-gray-900 rounded px-4 py-2 justify-center">
                    <h2 class=" text-sm sm:text-base text-gray-400">
                        <i class="fas fa-calendar-plus text-yellow-400 mr-1"></i>
                        Fecha Ofrecida:</h2>
                    <h2 class=" text-sm sm:text-base  text-gray-300 ml-5">{{Carbon\Carbon::parse($job->date_expected)->format('d/m/Y')}}</h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2  bg-gray-900 rounded px-4 py-2 justify-center @if($job->date_delivered == null) hidden @endif">
                    <h2 class=" text-sm sm:text-base  text-gray-400">
                        <i class="fas fa-calendar-plus text-yellow-400 mr-1"></i>
                        Fecha Entrega:</h2>
                    <h2 class=" text-sm sm:text-base  text-gray-300 ml-5">{{Carbon\Carbon::parse($job->date_delivered)->format('d/m/Y')}}</h2>
                </div>
            </div>
        </section>
    </section>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  mt-1 z-30">
            
            

            <div class="mx-2 pb-6 bg-white  rounded-sm  shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer my-3">
                <div class="h-12 bg-indigo-900 flex items-center justify-between">
                  <p class="mr-0 text-white text-lg pl-5">Estado</p>
                </div>
                
                <h3 class=" mt-3 mx-4 text-gray-800">Defina el Estado:</h3>
              
                <div class="text-left mx-4" x-data="{open:false}">
                    <div>
                        <button class="flex-inline w-full mt-3 bg-gray-100 shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 " x-on:click="open=!open">
                            <i class="fas fa-signal mr-1 text-lg"></i>
                            {{$job->status->name}}
                            <!-- Heroicon name: solid/chevron-down -->
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="origin-top-right absolute z-40 right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show="open" x-on:click.away="open=false">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        @foreach ($statuses as $status)
                                <a class=" cursor-pointer text-gray-700 block px-4 py-2 text-sm hover:bg-blue-100" role="menuitem" tabindex="-1" id="menu-item-0" wire:click="$set('status_id',{{$status->id}})" x-on:click="open=false">
                                    {{$status->name}}
                                </a>    
                        @endforeach
                        </div>
                    </div>
                    <!-- component -->
                    
                </div>

                       
            </div>

            <div class=" mx-2 bg-white  rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer my-3">
                <div class="h-12 bg-blue-900 flex items-center justify-between">
                  <p class="mr-0 text-white text-lg pl-5">Asignaciones</p>
                </div>
                <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                    <span>Asignado a: </span>
                    <span> {{$job->assignments_count}}</span>
                </div>
                <div class="mx-3 flex justify-between items-center mb-4">
                    @foreach ($job->assignments as $technician)
                        @if (Storage::disk('public')->exists($technician->profile_photo_path))
                            <img class="user-photo-1 h-14 w-14 transform hover:scale-110" src="{{$technician->profile_photo_url}}"/>
                        @else
                            <img src="{{asset('user.png')}}" alt="" title="{{$technician->name}}" class="user-photo-1 h-14 w-14 transform hover:scale-110">
                        @endif
                    @endforeach
                    <a href="">
                        <img src="{{asset('img/icons/plus.png')}}" alt="" class="w-12 h-10 rounded-full border-gray-200 border -m-1 transform hover:scale-110">   
                    </a>
                </div>
                <!-- <hr > -->
            </div>
            <div class=" mx-2 md:col-span-3 lg:col-span-1 bg-white  rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer my-3">
                <div class="h-12 bg-blue-900 flex items-center justify-between">
                  <p class="mr-0 text-white text-lg pl-5">Ordenes Relacionadas</p>
                </div>
                
                <!-- <hr > -->
            </div>
            
           
        </div>
        {{-- Materiales --}}
        <section class=" col-span-2 mx-2">
            <div class="border-1 border-gray-700 bg-white shadow-xl" x-data="{open:false}">
                <header class=" bg-purple-900 p-3 text-xl  text-gray-100 flex justify-between items-center rounded-md my-3"> 
                    <span> Materiales </span>
                    <i x-bind:class="!open?'fas fa-chevron-down':'fas fa-chevron-up'" @click="open=!open"></i>
                </header>
                <div class=" mx-2 my-4" x-show="open" x-transition>
                     hola
                </div>
            </div>
        </section>
        {{-- Fotos --}}
        <section class=" col-span-2 mx-2 ">
            <div class="border-1 border-gray-700 bg-gray-50 shadow-xl" x-data="{open:true}">
                <header class=" bg-purple-900 p-3 text-xl  text-gray-100 flex justify-between items-center rounded-md shadow backdrop-filter my-3"> 
                    <span> Fotografias </span>
                    <i x-bind:class="!open?'fas fa-chevron-down':'fas fa-chevron-up'" @click="open=!open"></i>
                </header>
                <div class=" mx-2 mb-4 mt-1  flex text-gray-700 pb-4" x-show="open" x-transition>
                    
                     
                     <div class="swiper flex ">
                        <div class="swiper-wrapper mb-2 w-4/5">
                            <div class=" bg-white shadow-2xl m-6 transition duration-500 transform hover:scale-110 hover:text-red-800 z-0 w-52 mr-10 swiper-slide">
                                <figure>
                                    <img src="{{asset('img/icons/add_photo.png')}}" alt="" class=" w-96 h-32 rounded object-contain ">
                                </figure>
                                <h1 class=" bg-gray-50 p-3">Agregar Fotografia</h1>
                             </div>
                            @foreach ($job->images as $image)
                                <div class=" bg-white shadow-2xl  transition duration-100 transform hover:scale-110 w-52 rounded-lg overflow-hidden swiper-slide">
                                    <figure>
                                        <img src="{{Storage::url($image->url)}}" alt="" class=" w-full h-52 rounded object-cover ">
                                    </figure>
                                    <div class=" w-auto">
                                    <input class="bg-gray-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 mr-2 text-sm  text-gray-700  focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{$image->name}}">
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                     </div>
                </div>
            </div>
        </section>
        
        <section class=" col-span-2 mx-2">
            <div class="border-1 border-gray-700 bg-white shadow-xl " x-data="{open:false}">
                <header class=" bg-purple-900 p-3 text-xl  text-gray-100 flex justify-between items-center rounded-md my-3"> 
                    <span> Documentos </span>
                    <i x-bind:class="!open?'fas fa-chevron-down':'fas fa-chevron-up'" @click="open=!open"></i>
                </header>
                <div class=" mx-2 my-4" x-show="open" x-transition>
                     hola
                </div>
            </div>
        </section>
    </div>
    
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/carrousel.js') }}"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: "auto",
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
            });
    </script>
@endpush
</x-app-layout>