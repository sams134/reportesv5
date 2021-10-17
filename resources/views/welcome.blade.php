<x-app-layout>
    <section style="background-image: url({{asset('img/home/_MG_8627.jpg')}})" class="bg-cover bg-center shadow">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 p-36 " >
           <div class="bg-gray-600 bg-opacity-25 w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">BUSCA TU NUMERO DE ORDEN</h1>
                <P class="text-white text-lg mt-3">Busca cualquier numero de orden de trabajo en Clinica de Motores Electricos</P>
       
                @livewire('search')
           </div>
       </div>
    </section>
    <section class="mt-12">
        <h1 class=" text-gray-600 text-center text-3xl mb-6"> PRINCIPALES TABLEROS</h1>
        <div class="container  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6">
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_0984.jpg')}}" alt="" class="w-full rounded-xl shadow-xl" >
                    <div class=" border-1 w-full">
                        <h2 class=" text-gray-700 text-center bg-gray-100 text-lg">MOTORES DE INTERES</h2>
                        <h2 class=" text-gray-500 text-center bg-gray-100 text-sm">Estos son equipos marcados para dar seguimiento.</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_8336.jpg')}}" alt="" class="w-full rounded-xl shadow-xl" >
                    <div class=" border-1 w-full">
                        <h2 class=" text-gray-700 text-center bg-gray-100 text-lg">TABLEROS DE AREA</h2>
                        <h2 class=" text-gray-500 text-center bg-gray-100 text-sm">Ver los tableros de Torno, Mediciones, Pruebas etc.</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/IMG_6370.jpg')}}" alt="" class="w-full rounded-xl shadow-xl">
                    <div class=" border-1 w-full">
                            <h2 class=" text-gray-700 text-center bg-gray-100 text-lg">PROVEEDORES EXTERNOS</h2>
                            <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Ver los trabajos tercerizados</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_0826_2.jpg')}}" alt="" class="w-full rounded-xl shadow-xl">
                    <div class=" border-1 w-full">
                            <h2 class=" text-gray-700 text-center bg-gray-100 text-lg">TURNOS Y ASIGNACIONES</h2>
                            <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Verficar turnos de emergencias y responsabilidades de mantenimiento.</h2>
                    </div>
                </figure>
            </article>
            
        </div>
    </section>
 

    <section class="mt-12 bg-gray-800 py-12">
        <h1 class="text-center text-white text-3xl">Manuales y Normas</h1>
        <p class="text-center text-white text-sm"> Nuestros trabajos son normados bajo estandares internacionales. <br>
            ¿Deseas ver cuáles son esos estándares?</p>
            <div class="flex justify-center mt-4">
                <a href="{{route('manuales')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver Normas y Manuales
                </a>
            </div>
    </section>
    <section class="mt-12 ">
        <h1 class=" text-center text-gray-600 text-3xl">Nuestros Tecnicos</h1>
        <div class="container  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-6">
            @foreach ($technicians as $technician)
                  <article class=" bg-white shadow-xl rounded-lg overflow-hidden">
                      @if (Storage::disk('public')->exists($technician->profile_photo_path))
                        <img src="{{$technician->profile_photo_url}}" alt="" class=" h-60 w-full object-cover">
                     @else
                     <img src="{{asset('user.png')}}" alt="" class=" h-60 w-full object-cover">
                      @endif
                    
                    <div>
                        <a href="{{route('view-motors',[$technician,'all'])}}">
                            <h1 class=" text-center my-3 text-xl text-gray-700 hover:text-blue-900">{{$technician->name}}</h1>
                        </a>
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Trabajos en progreso
                                        </th>
                                        <th scope="col" class="sm:hidden px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Herramientas
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($technician->current_jobs as $job)
                                            <tr>
                                                <td class="px-4 py-4 whitespace-nowrap" x-data="{open: false}" @mouseleave="open = false">
                                                    <div class="flex items-center" @mouseover="open = true">
                                                        <a href="{{route('jobs.show',$job)}}" class="flex">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="{{Storage::url($job->images->first()->url)}}" alt="ss">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-700">
                                                                    {{$job->job_os()}}
                                                                </div>
                                                                <div class="text-xs text-gray-500">
                                                                    {{$job->job_type->name}}
                                                                    {{$job->power_dimensional()}}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{Str::limit($job->customer->name, 35, '...') }}
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="well hidden  sm:block" x-show.transition.duration.6000ms.scale.0="open"  >
       
                                                        <div class="tool-container">
                                                            <div class="flex">
                                                                <div class="flex-1 group">
                                                                    <a href="#" class="tool-item">
                                                                        <span class="block px-1 pt-1 pb-1">
                                                                            <i class="far fa-calendar-check text-sm pt-1 mb-1 block"></i>
                                                                            <span class="block text-xs pb-1">Terminar</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="flex-1 group">
                                                                    <a href="#" class="tool-item">
                                                                        <span class="block px-1 pt-1 pb-1">
                                                                            <i class="fas fa-hand-paper text-sm pt-1 mb-1 block"></i>
                                                                            <span class="block text-xs pb-1">Detener</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="flex-1 group">
                                                                    <a href="#" class="tool-item">
                                                                        <span class="block px-1 pt-1 pb-1">
                                                                            
                                                                            <i class="fas fa-camera text-sm pt-1 mb-1 block"></i>
                                                                            <span class="block text-xs pb-1">Foto</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap visible sm:hidden">
                                                    <ul class="flex text-xl">
                                                        <li> 
                                                            <a class="inline-block p-1 px-2 text-center text-white transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                                                                <i class="fas fa-camera" title="Tomar Foto"></i>
                                                            </a>
                                                        </li>
                                                        <li class=" ml-2"> 
                                                            <a class="inline-block p-1 px-2 text-center text-white transition bg-red-500 rounded-full shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none">
                                                                <i class="fas fa-hand-paper" title="Detener / Enviar a Diagnostico"></i>
                                                            </a>
                                                        </li>
                                                        <li class=" ml-2"> 
                                                            <a class="inline-block p-1 px-2 text-center text-white transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none">
                                                                <i class="fas fa-calendar-check"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">
                                                <a href="{{route('view-motors',[$technician,3])}}" class=" hover:text-blue-700">
                                                <span class="text-xs"> 
                                                    <i class="fas fa-cog mx-2 "> </i>
                                                    En Progreso: {{$technician->current_jobs_count}}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="{{route('view-motors',[$technician,2])}}" class=" hover:text-blue-700">
                                                    <i class="fas fa-hourglass-half mx-2"> </i>
                                                    <span class="text-xs"> En Diagnostico: {{$technician->stopped_jobs_count}}</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="{{route('view-motors',[$technician,0])}}" class=" hover:text-blue-700">
                                                <i class="fas fa-tasks mx-2"> </i>
                                                <span class="text-xs"> Finalizados: {{$technician->finished_jobs_count}}</span>
                                                </a>
                                            </td>
                                        </tr>
                        
                                    <!-- More people... -->
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
  
                        
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>