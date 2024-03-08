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

    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('menuBtn').addEventListener('click', function() {
                var navbar = document.getElementById('navbar');
                if (navbar.classList.contains('hidden')) {
                    navbar.classList.remove('hidden');
                } else {
                    navbar.classList.add('hidden');
                }
            });
        });
    </script>
    
</head>
<body class="bg-lavender text-soft-black font-sans">

    <header class="bg-purple-deep text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">BookPriceTrade</a>
            <button id="menuBtn" class="md:hidden block">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
            <nav id="navbar" class="hidden md:flex">
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Inicio</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Categorías</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Destacados</a>
                <a href="#" class="px-4 py-2 hover:bg-lavender hover:text-purple-deep rounded">Contacto</a>
            </nav>
        </div>
    </header>
    

    <div class="container mx-auto p-4">
        <div class="text-center py-8">
            <h1 class="text-4xl font-bold text-purple-deep">Encuentra el mejor precio para tus libros favoritos</h1>
            <p class="text-xl text-slate-gray">Comparativa de precios en tiempo real de diversas tiendas</p>
        </div>

        <div class="flex justify-center items-center my-8">
            <input type="search" placeholder="Buscar libros..." class="p-2 w-full max-w-lg rounded-l-lg border-0 focus:ring-2 focus:ring-purple-deep" style="outline: none;">
            <button class="px-4 py-2 accent-color rounded-r-lg font-bold">Buscar</button>
        </div>

        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/150" alt="Portada del Libro" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- segon intent -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados imatge vertical</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex flex-col items-center">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
            </div>
        </section>

        <!-- tercer intent -->
        <section class="my-12">
            <h2 class="text-3xl font-bold text-purple-deep mb-4">Libros Destacados lateral</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
                    <!-- Columna de la Imagen -->
                    <div class="w-1/3 flex justify-center items-start">
                        <img src="https://via.placeholder.com/150x220" alt="Portada del Libro" class="w-48 h-auto mt-4 object-cover">
                    </div>
                
                    <!-- Columna de Información -->
                    <div class="w-2/3 p-4">
                        <h3 class="text-xl font-bold">Título del Libro 1</h3>
                        <p class="text-sm text-slate-gray">Autor del Libro</p>
                        <p class="text-lg font-semibold text-purple-deep mt-2">Mejor Precio: $19.99</p>
                        <p class="text-slate-gray mt-1">Breve descripción del libro...</p>
                        <button class="mt-4 px-4 py-2 bg-purple-deep text-white rounded hover:bg-purple-light transition-colors">Más detalles</button>
                    </div>
                </div>
                
                
                
            </div>
        </section>
        <footer class="bg-purple-deep text-white text-center p-4 mt-8">
            <div class="container mx-auto">
                <p>© 2024 BookPriceTrade. Todos los derechos reservados.</p>
                <p>Síguenos en nuestras redes sociales.</p>
                <div class="flex justify-center gap-4 mb-4">
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                        <svg fill="#FFFFFF" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.718 0-4.92 2.203-4.92 4.92 0 .386.045.762.129 1.124-4.091-.205-7.719-2.165-10.148-5.144-.424.729-.666 1.574-.666 2.476 0 1.71.87 3.213 2.188 4.097-.806-.026-1.566-.247-2.228-.616-.001.021-.001.042-.001.062 0 2.386 1.697 4.374 3.946 4.828-.413.111-.849.171-1.296.171-.314 0-.623-.03-.92-.087.631 1.97 2.445 3.397 4.6 3.437-1.685 1.32-3.808 2.105-6.115 2.105-.398 0-.79-.023-1.175-.067 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.143-7.721 14.143-14.417 0-.219-.005-.437-.014-.653.975-.703 1.797-1.582 2.457-2.585z"/></svg>
                    </a>
                    <a href="https://telegram.org" target="_blank" aria-label="Telegram">
                        <svg fill="#FFFFFF" width="24" height="24" viewBox="0 0 24 24"><path d="M9.036 15.164l-.932 4.482c.317-.093.635-.186.953-.372l2.512-1.805 4.943 3.659c.796.372 1.468.186 1.84-.744l3.581-12.71c.372-.93-.249-1.372-1.118-1.047l-14.83 5.882c-.87.372-.87.744-.249 1.116l3.59 1.394 7.924-4.945c.318-.186.636-.093.318.093"/></svg>
                    </a>
                </div>
                <div class="flex justify-center gap-4">
                    <a href="#" class="hover:text-gray-300">Aviso legal</a>
                    <a href="#" class="hover:text-gray-300">Política de cookies</a>
                    <a href="#" class="hover:text-gray-300">Política de privacidad</a>
                    <a href="#" class="hover:text-gray-300">Contacto</a>
                    <a href="#" class="hover:text-gray-300">Sobre el proyecto</a>
                    <a href="#" class="hover:text-gray-300">Asistente en Telegram</a>
                </div>
            </div>
        </footer>
        
    </div>

</body>
</html>
