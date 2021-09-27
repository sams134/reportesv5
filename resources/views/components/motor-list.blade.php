@props(['jobs'])
<div class=" overflow-scroll">
    <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-scroll">
        <div class="w-full ">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto divide-gray-200 rounded-lg ">
                    <thead>
                        <tr class=" bg-blue-400 text-gray-100 uppercase text-sm leading-normal shadow-lg rounded-lg">
                            <th class="py-3 px-6 text-left"> <input type="checkbox" name="" id=""></th>
                            <th class="py-3 px-6 text-left">Os</th>
                            <th class="py-3 px-6 text-left">Equipo</th>
                            <th class="py-3 px-6 text-center">Tecnicos</th>
                            <th class="py-3 px-6 text-center">Estado</th>
                            <th class="py-3 px-6 text-center">Herramientas</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light " >
                        @foreach ($jobs as $job)
                            <tr class="border-b border-gray-200  even:bg-gray-50  hover:bg-gray-100 hover:text-gray-800 hover:font-bold">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <a href="{{route('jobs.show',$job)}}">
                                                <img class="w-10 h-10 rounded-full" src="{{Storage::url($job->images->first()->url)}}"/>
                                            </a>
                                        </div>
                                        <div class="mr-2 ">
                                            <a href="{{route('jobs.show',$job)}}" class=" hover:text-blue-700">
                                                <span class="font-medium">{{$job->job_os()}}</span>
                                            </a>
                                                <div>
                                                    <a href="{{route('view-motors-customer',[$job->customer->id,'none'])}}" >
                                                        <span class=" text-gray-500 hover:text-red-700">{{$job->customer->name}}</span>
                                                    </a>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class=" ">
                                        <div>
                                            <span class=" text-gray-600  block">{{$job->power_dimensional()}} </span>
                                        </div>
                                        <div>
                                            <span class=" text-xs">{{$job->job_type->name}}</span>
                                        </div>
                                        
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        @foreach ($job->assignments as $technician)
                                            @if (Storage::disk('public')->exists($technician->profile_photo_path))
                                                <img class="w-10 h-10 rounded-3xl border-gray-200 border -m-1 transform hover:scale-150" src="{{$technician->profile_photo_url}}"/>
                                            @else
                                                <img src="{{asset('user.png')}}" alt="" class="w-10 h-10 rounded-full border-gray-200 border -m-1 transform hover:scale-150">
                                            @endif
                                        @endforeach
                                        <img src="{{asset('img/icons/plus.png')}}" alt="" class="w-8 h-8 rounded-full border-gray-200 border -m-1 transform hover:scale-150">
                                        
                                        
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if ($job->status_id == 1) {{-- Sin Asignar --}}
                                        <span class="bg-red-200 text-red-700 py-1 px-3 rounded-full text-xs shadow-sm">Sin Asignar</span>
                                    @elseif($job->status_id == 2) {{-- Sin Asignar --}}
                                        <span class="bg-yellow-200 text-yellow-700 py-1 px-3 rounded-full text-xs shadow-sm">Espera/Diagnostico</span>
                                    @elseif($job->status_id == 3) {{-- Sin Asignar --}}
                                        <span class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-xs shadow-sm">Trabajando</span>
                                    @elseif($job->status_id == 4) {{-- Sin Asignar --}}
                                        <span class=" bg-purple-200 text-purple-700 py-1 px-3 rounded-full text-xs shadow-sm">Finalizado</span>
                                    @elseif($job->status_id == 5) {{-- Sin Asignar --}}
                                        <span class=" bg-blue-200 text-blue-700 py-1 px-3 rounded-full text-xs shadow-sm">EPF</span>
                                    @elseif($job->status_id == 6) {{-- Sin Asignar --}}
                                        <span class=" bg-pink-200 text-pink-700 py-1 px-3 rounded-full text-xs shadow-sm">Facturado</span>
                                    @elseif($job->status_id == 7) {{-- Sin Asignar --}}
                                        <span class=" bg-indigo-200 text-indigo-700 py-1 px-3 rounded-full text-xs shadow-sm">Pagado</span>
                                    @endif
                                    
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>