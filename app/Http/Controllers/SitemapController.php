<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function __invoke(Request $request){
        $books = Book::all();

        $content = '<?xml version="1.0" encoding="UTF-8"?>';
        $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($books as $book) {
        // Genera las URLs de tu sitio dinámicamente
        // Ejemplo para la página de inicio
        $content .= '<url>';
        $content .= '<loc>'.route('book.index',['name']).'</loc>';

        $content .= '<lastmod>'.now()->toDateString().'</lastmod>';
        $content .= '<changefreq>daily</changefreq>';
        $content .= '<priority>1.0</priority>';
        $content .= '</url>';
        }

        // Añade más URLs según sea necesario...

        $content .= '</urlset>';

        // Guarda el contenido en un archivo sitemap.xml en la raíz del dominio (public directory)
        $path = public_path('sitemap.xml');
        file_put_contents($path, $content);

        return response()->json(['message' => 'Sitemap.xml generado correctamente.']);
    }

}
