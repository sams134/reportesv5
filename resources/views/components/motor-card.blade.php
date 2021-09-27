@props(['job'])
<div class="card">
    <a href="{{route('jobs.show',$job)}}">
        <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{Storage::url($job->images->first()->url)}})">

        </div>
    </a>
    <div class="p-4 ">
        <p class="uppercase tracking-wide text-sm font-semibold  text-gray-700 ">{{Str::limit($job->customer->name, 25, '...') }}</p>
        <div class="cursor-pointer">
            <a href="{{route('jobs.show',$job)}}">
                <p class="text-2xl text-gray-900 hover:text-blue-600 ">{{$job->job_os()}}</p>
            </a>
        </div>
        
        <p class="text-gray-700">{{$job->job_type->name}}</p>
    </div>
    <div class="flex p-4 border-t border-gray-300 text-gray-700 ">
        <div class="flex-1 inline-flex items-center">
            <i class="fas fa-atom"></i>
            <p class=" text-xs ml-2">{{$job->power_dimensional()}}</p>
        </div>
        <div class="flex-1 inline-flex items-center">
            <i class="fas fa-tachometer-alt"></i>
            <p class=" text-xs ml-2">{{$job->rpm}}</p>
        </div>
        <div class="flex-1 inline-flex items-center">
            <i class="fas fa-address-card"></i>
            <p class=" text-xs ml-2">{{$job->mfg}}</p>
        </div>
    </div>
    <div class="flex m-2">
        <div class="flex">
            @foreach ($job->assignments as $technician)
                @if (Storage::disk('public')->exists($technician->profile_photo_path))
                    <img class="w-10 h-10 rounded-3xl border-gray-200 border -m-1 transform hover:scale-110" src="{{$technician->profile_photo_url}}"/>
                @else
                    <img src="{{asset('user.png')}}" alt="" class="w-10 h-10 rounded-full border-gray-200 border -m-1 transform hover:scale-110">
                @endif
            @endforeach
            <img src="{{asset('img/icons/plus.png')}}" alt="" class="w-10 h-10 rounded-full border-gray-200 border -m-1 transform hover:scale-110">   
        </div>  
        <div class="flex ml-auto">
            @if ($job->status_id == 1) {{-- Sin Asignar --}}
                <span class="bg-red-200 text-red-700 py-2 px-3 rounded-full text-xs shadow-sm">Sin Asignar</span>
            @elseif($job->status_id == 2) {{-- Sin Asignar --}}
                <span class="bg-yellow-200 text-yellow-700 py-2 px-3 rounded-full text-xs shadow-sm">Espera/Diagnostico</span>
            @elseif($job->status_id == 3) {{-- Sin Asignar --}}
                <span class="bg-green-200 text-green-700 py-2 px-3 rounded-full text-xs shadow-sm">Trabajando</span>
            @elseif($job->status_id == 4) {{-- Sin Asignar --}}
                <span class=" bg-purple-200 text-purple-700 py-2 px-3 rounded-full text-xs shadow-sm">Finalizado</span>
            @elseif($job->status_id == 5) {{-- Sin Asignar --}}
                <span class=" bg-blue-200 text-blue-700 py-2 px-3 rounded-full text-xs shadow-sm">EPF</span>
            @elseif($job->status_id == 6) {{-- Sin Asignar --}}
                <span class=" bg-pink-200 text-pink-700 py-2 px-3 rounded-full text-xs shadow-sm">Facturado</span>
            @elseif($job->status_id == 7) {{-- Sin Asignar --}}
                <span class=" bg-indigo-200 text-indigo-700 py-2 px-3 rounded-full text-xs shadow-sm">Pagado</span>
            @endif
        </div>
    </div>
    <div class="well">
       
        <div class="tool-container">
            <div class="flex">
                <div class="flex-1 group">
                    <a href="#" class="tool-item">
                        <span class="block px-1 pt-1 pb-2">
                            <i class="far fa-edit text-sm pt-1 mb-1 block"></i>
                            <span class="block text-xs pb-1">Editar</span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a href="#" class="tool-item">
                        <span class="block px-1 pt-1 pb-2">
                            <i class="fas fa-cart-plus text-sm pt-1 mb-1 block"></i>
                            <span class="block text-xs pb-1">Materiales</span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a href="#" class="tool-item">
                        <span class="block px-1 pt-1 pb-2">
                            
                            <i class="fas fa-camera text-sm pt-1 mb-1 block"></i>
                            <span class="block text-xs pb-1">Foto</span>
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>