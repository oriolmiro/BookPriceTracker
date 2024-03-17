@extends('layouts.appbook')
@section('title', $book->title.' - Book Price Tracker')

@section('content')
<h1 class="text-2xl font-bold mb-4">Detalles del Libro</h1>
        
        <!-- Sección de la Portada y Descripción -->
        <div class="flex flex-wrap md:flex-nowrap">
            <img src="{{ $book->cover == '' ? 'https://via.placeholder.com/150x220' : $book->cover }}" alt="Portada - {{$book->title}}" class="mb-4 md:mb-0 md:mr-4">
            <div>
                <h2 class="text-xl font-semibold">{{$book->title}}</h2>
                <p class="text-md mb-2">{{$book->author}}</p>
                <p>{{$book->description}}</p>
            </div>
        </div>
        
        <!-- Sección de Precios en Diferentes Tiendas -->
        <h3 class="text-xl font-bold mt-6 mb-4">Precios en Diferentes Tiendas</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Ejemplo de una tienda -->
            @foreach ($book->prices as $price)
                <div class="bg-white p-4 rounded-lg flex items-center">
                    <a href="{{route('goto',['id' => $price->id])}}" rel="nofollow">
                    <img src="https://via.placeholder.com/50" alt="{{$price->bookStore->name}}" class="mr-2">
                    </a>
                    <a href="{{route('goto',['id' => $price->id])}}" rel="nofollow">
                    <p>{{$price->bookStore->name}}</p>
                    <p>{{$price->current_price}} €</p>
                    </a>
                </div>
            @endforeach
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <div class="bg-white p-4 rounded-lg flex items-center">
                <img src="https://via.placeholder.com/50" alt="Logo Tienda" class="mr-2">
                <span>$19.99</span>
            </div>
            <!-- Repetir para cada tienda -->
        </div>
        
        <!-- Sección de Reseñas -->
        <h3 class="text-xl font-bold mt-6 mb-4">Reseñas de Usuarios</h3>
        <div class="bg-white p-4 rounded-lg mb-4">
            <p class="font-semibold">Usuario 1</p>
            <p>Comentario sobre el libro.</p>
        </div>
        <!-- Repetir para cada reseña -->
        
        <!-- Sección de Configurar Alertas de Precios -->
        <h3 class="text-xl font-bold mt-6 mb-4">Alerta de Precios</h3>
        <form class="bg-white p-4 rounded-lg">
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium mb-1">Precio deseado:</label>
                <input type="text" id="price" class="p-2 border rounded w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Tu correo electrónico:</label>
                <input type="email" id="email" class="p-2 border rounded w-full">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Configurar Alerta</button>
        </form>
        
@endsection