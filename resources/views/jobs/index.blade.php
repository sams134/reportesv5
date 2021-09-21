<x-app-layout>
    <style>
        tr:nth-child(even){
            background-color: rgba(248, 249, 251, var(--tw-bg-opacity));
        }
    </style>

<section class=" mt-10 mx-4">
    <h1 class=" text-gray-600 text-center text-3xl ">Ordenes de Servicio</h1>
    <!-- component -->
    @livewire('job-index',['user_id'=>$user_id,'status_id'=>$status_id,'customer_id'=>$customer_id])
    
</section>

  
</x-app-layout>