<div>
    <div class=" bg-gray-200 py-4 mt-8">
        <div class=" max-w-full mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 " wire:click="resetFilters">
                <i class="fas fa-list-alt"></i>
                Todos los Equipos
            </button>
                        <!-- dropdown estatus -->
            <div class="relative inline-block text-left" x-data="{open:false}">
                <div>
                    <button class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 " x-on:click="open=!open">
                        <i class="fas fa-signal mr-1 text-sm"></i>
                        Estados
                        <!-- Heroicon name: solid/chevron-down -->
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show="open" x-on:click.away="open=false">
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
             <!-- dropdown tecnicos -->
            <div class="relative inline-block text-left" x-data="{open:false}">
                <div>
                    <button class="flex-inline bg-white shadow h-10 px-4 rounded-lg text-sm text-gray-700 mr-4 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 " x-on:click="open=!open">
                        <i class="fas fa-user-cog mr-1 text-sm"></i>
                        Tecnicos
                        <!-- Heroicon name: solid/chevron-down -->
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" x-show="open" x-on:click.away="open=false">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            @foreach ($users as $user)
                                @if ($user->jobs_count > 0)
                                    <a class="cursor-pointer text-gray-700 block px-4 py-2 text-sm hover:bg-blue-100" role="menuitem" tabindex="-1" id="menu-item-0" wire:click="$set('user_id',{{$user->id}})" x-on:click="open=false">
                                        {{$user->name}} ({{$user->jobs_count}})
                                    </a>            
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>

            
            <div class="bg-gray-200 text-sm text-gray-500 leading-none border-2 border-gray-200 rounded-full  ml-auto hidden sm:inline-flex" x-data="{list:false}">
                <button class="inline-flex items-center transition-colors focus:outline-none hover:text-blue-400 focus:text-blue-400 rounded-l-full px-4 py-2" 
                        x-bind:class="!list?'active':''" id="grid" x-on:click="list=!list" wire:click="change_view">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fill-current w-4 h-4 mr-2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                  <span>Grid</span>
                </button>
                <button class="inline-flex items-center transition-colors focus:outline-none hover:text-blue-400 focus:text-blue-400 rounded-r-full px-4 py-2" 
                x-bind:class="list?'active':''" id="list" x-on:click="list=!list" wire:click="change_view">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="fill-current w-4 h-4 mr-2"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                  <span>List</span>
                </button>
              </div>
            
            
            <style>
              /*@apply bg-white text-blue-400 rounded-full;*/
              .active {background: white; border-radius: 9999px; color: #63b3ed;}
            </style>
            
        </div>
    </div>

    {{-- tabla de jobs --}}
    <div class="mt-4">
        {{$jobs->links()}}
    </div>
    
    @if ($list)
       <x-motor-list :jobs="$jobs" />
    @else
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
        @foreach ($jobs as $job)
          <x-motor-card :job="$job" />
        @endforeach
        
    </div>
    @endif
   
</div>
