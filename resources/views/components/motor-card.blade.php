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
    <div class="flex m-2 justify-between">
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
        <div class="flex">
            @livewire('status.change-status', ['job_id' => $job->id], key($job->id))
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
                    
                        @livewire('foto.upload-foto', ['job_id' => $job->id], key($job->id))
                    
                </div>
                
            </div>
        </div>
    </div>
</div>