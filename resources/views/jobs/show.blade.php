<x-app-layout>
    <style>
        .dropdown:focus-within .dropdown-menu {
  opacity:1;
  transform: translate(0) scale(1);
  visibility: visible;
}
    </style>
    <section class=" bg-gray-700 py-2 ">
        <div class="container grid grid-cols-1 sm:grid-cols-5 xl:grid-cols-3 gap-3">
            <section class="wrapper_carousel flex flex-col justify-center w-full col-span-1 sm:col-span-3 xl:col-span-2 bg-gray-700"  role="region" aria-label="testimonial carousel">
                <div class=" relative overflow-hidden flex items-center justify-center w-full mt-1 mb-1 ">
                    @foreach ($job->front_images as $image)
                    <div class="carousel-item  rounded-3xl shadow border-gray-500 border-1 my-8 mx-2" role="group" aria-label="slide 1 of 5">
                        <img src="{{Storage::url('jobs/'.$image->url)}}" class="  rounded-3xl w-full object-cover shadow-2xl " >
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
    </section>
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 mt-1">
            <div class=" mx-2 bg-white  rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer my-3">
                <div class="h-12 bg-purple-900 flex items-center justify-between">
                  <p class="mr-0 text-white text-lg pl-5">INGRESO</p>
                </div>
                <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                    <span>Fecha Ingreso: </span>
                    <span> {{$job->created_at->diffForHumans()}}</span>
                </div>
                <p class="py-4 text-2xl ml-5 capitalize"> {{$job->fecha_ingreso()}}</p>
                <!-- <hr > -->
            </div>

            <div class="mx-2 bg-white  rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer my-3">
                <div class="h-12 bg-indigo-900 flex items-center justify-between">
                  <p class="mr-0 text-white text-lg pl-5">Estado</p>
                </div>
                <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                  <p class=" text-xl text-gray-600">{{$job->status->name}}</p>
                </div>
                
                <div class="mx-3">
                    <div class=" relative inline-block text-left dropdown w-full">
                        <span class="rounded-md shadow-sm"
                        ><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>Cambiar Estado</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button
                        ></span>
                        <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="px-4 py-3">         
                            <p class="text-sm leading-5">Signed in as</p>
                            <p class="text-sm font-medium leading-5 text-gray-900 truncate">tom@example.com</p>
                            </div>
                            <div class="py-1">
                            <a href="javascript:void(0)" tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Account settings</a>
                            <a href="javascript:void(0)" tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Support</a>
                            <span role="menuitem" tabindex="-1" class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 cursor-not-allowed opacity-50" aria-disabled="true">New feature (soon)</span>
                            <a href="javascript:void(0)" tabindex="2" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left" role="menuitem" >License</a></div>
                            <div class="py-1">
                            <a href="javascript:void(0)" tabindex="3" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Sign out</a></div>
                        </div>
                        </div>
                    </div>
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
                <div class="mx-3 flex justify-between">
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
        </div>
    </div>
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/carrousel.js') }}"></script>
@endpush
</x-app-layout>