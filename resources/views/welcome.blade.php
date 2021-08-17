<x-app-layout>
    <section style="background-image: url({{asset('img/home/_MG_8627.jpg')}})" class="bg-cover bg-center shadow">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 p-36 " >
           <div class="bg-gray-600 bg-opacity-25 w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">BUSCA TU NUMERO DE ORDEN</h1>
                <P class="text-white text-lg mt-3">Busca cualquier numero de orden de trabajo en Clinica de Motores Electricos</P>
       
            <div class="p-4 relative mx-auto text-gray-600">
                <input class=" w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="BUSCA OS">
                <button type="submit" class="absolute right-0 top-0 mt-7 mr-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
                </button>
            </div>
           </div>
       </div>
    </section>
    <section class="mt-12">
        <h1 class=" text-gray-600 text-center text-3xl mb-6"> TRABAJOS RECIENTES</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-6">
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_0423-2.jpg')}}" alt="" class="w-full rounded-xl shadow-xl" >
                    <div class=" border-1 w-full">
                        <h2 class=" text-gray-600 text-center bg-gray-100">OS: 2M21-1033</h2>
                        <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Tecnico: Armando Miranda</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_0403-2.jpg')}}" alt="" class="w-full rounded-xl shadow-xl" >
                    <div class=" border-1 w-full">
                        <h2 class=" text-gray-600 text-center bg-gray-100">OS: 2M21-1033</h2>
                        <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Tecnico: Armando Miranda</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_0745.jpg')}}" alt="" class="w-full rounded-xl shadow-xl">
                    <div class=" border-1 w-full">
                            <h2 class=" text-gray-600 text-center bg-gray-100">OS: 2M21-1033</h2>
                            <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Tecnico: Armando Miranda</h2>
                    </div>
                </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('img/home/_MG_8318.jpg')}}" alt="" class="w-full rounded-xl shadow-xl">
                    <div class=" border-1 w-full">
                        <h2 class=" text-gray-600 text-center bg-gray-100">OS: 2M21-1033</h2>
                        <h2 class=" text-gray-600 text-center bg-gray-100 text-sm">Tecnico: Armando Miranda</h2>
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
    <section class="mt-12">
        <h1 class=" text-center text-gray-600 text-3xl">Nuestros Tecnicos</h1>
        <div class=" mt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-6">
            @foreach ($technicians as $technician)
                <article>
                    <img src="{{$technician->profile_photo_url}}" alt="" class=" w-full object-cover">
                    <div>
                        <h1 class=" text-center">{{$technician->name}}</h1>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>