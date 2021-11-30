<x-app-layout>
    <style>
        tr:nth-child(even){
            background-color: rgba(248, 249, 251, var(--tw-bg-opacity));
        }
    </style>
<section style="background-image: url({{asset('img/home/_MG_8627.jpg')}})" class="bg-cover bg-center shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 p-52 " >
        
    </div>
 </section>
<section class=" mt-10 mx-4">
    <h1 class=" text-gray-600 text-center text-3xl ">Ordenes de Servicio</h1>
    <!-- component -->
    @livewire('job-index',['user_id'=>$user_id,'status_id'=>$status_id,'customer_id'=>$customer_id])
    
</section>

  
</x-app-layout>