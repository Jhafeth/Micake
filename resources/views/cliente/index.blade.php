@extends('layouts.app');

@section('titulo')
    Catálogo
@endsection

@section('contenido')
<<<<<<< HEAD

{{-- <div class="card" style="width: 18rem;">
  <img src="{{ asset('img/torta_meme1.jpg') }}" class="card-img-top" alt="Torta meme">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}

{{-- <div class="bg-yellow-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
        <h2 class="text-2xl font-extrabold text-gray-900">Collections</h2>
  
        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
          <div class="group relative">
            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
          </div>
  
          <div class="group relative">
            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Self-Improvement
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
          </div>
  
          <div class="group relative">
            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Travel
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  
=======
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">
                    Cliente: {{ auth()->user()->name }}
                </p>
                <p class="text-gray-700 text-2xl">
                    Correo Electronico: {{ auth()->user()->email }}
                </p>
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <form action="{{ route('cliente.update') }}" method="get">
                    <input type="submit" value="Modificar Datos"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors 
                        cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
                </form>
            </div>
        </div>
    </div>
>>>>>>> 139ec7e1bc25901b735cafce957bd141644243ef
@endsection
