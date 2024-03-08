<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookPriceTrade</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-purple-deep { background-color: #4B0082; }
        .bg-lavender { background-color: #E6E6FA; }
        .text-soft-black { color: #333333; }
        .text-slate-gray { color: #708090; }
        .accent-color { background-color: #FF851B; color: white; }
    </style>
</head>
<body class="bg-lavender text-soft-black font-sans">

    <header class="bg-purple-deep text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">BookPriceTrade</a>
            <nav>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Inicio</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Categorías</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Destacados</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Contacto</a>
            </nav>
        </div>
    </header>

    <div class="container mx-auto p-4">

        <div class="flex justify-center items-center my-8">
            <input type="search" placeholder="Buscar libros..." class="p-2 w-full max-w-lg rounded-l-lg border-0 focus:ring-2 focus:ring-purple-deep" style="outline: none;">
            <button class="px-4 py-2 accent-color rounded-r-lg font-bold">Buscar</button>
        </div>
    
    

        <div class="container mx-auto p-4">
            <h1 class="text-xl font-bold text-purple-deep mb-4">Resultados de Búsqueda</h1>
    
            <!-- Lista de Resultados de Libros -->
            <div class="space-y-4">
                <!-- Resultado Individual del Libro -->
                <div class="bg-white rounded-lg shadow p-4 flex">
                    <img src="https://via.placeholder.com/100x150" alt="Portada del Libro" class="w-24 h-36 mr-4 object-cover rounded">
                    <div>
                        <h2 class="text-lg font-bold">Título del Libro</h2>
                        <p class="text-sm">Autor del Libro</p>
                        <button class="mt-2 px-3 py-1 text-sm text-white bg-purple-deep rounded hover:bg-purple-600">Ver Precios</button>
                    </div>
                </div>
                <!-- Repite el bloque anterior para cada libro en los resultados -->
                <div class="bg-white rounded-lg shadow p-4 flex items-center">
                    <img src="https://via.placeholder.com/100x150" alt="Portada del Libro" class="w-24 h-36 mr-4 object-cover rounded">
                    <div class="flex-grow">
                        <h2 class="text-lg font-bold">Título del Libro</h2>
                        <p class="text-sm">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                    </div>
                    <!-- Llamadas a la Acción -->
                    <div class="flex flex-col space-y-2 ml-4">
                        <button class="px-3 py-1 text-sm text-white bg-green-500 rounded hover:bg-green-700">¡Oferta especial!</button>
                        <button class="px-3 py-1 text-sm text-white bg-blue-500 rounded hover:bg-blue-700">Ver detalles</button>
                        <button class="px-3 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-700">Alerta de precio</button>
                    </div>
                </div>
    
            </div>
        </div>  
        <footer class="bg-purple-deep text-white text-center p-4 mt-8">
            <p>© 2024 BookPriceTrade. Todos los derechos reservados.</p>
            <p>Síguenos en nuestras redes sociales.</p>
        </footer>
    </div>

</body>
</html>
