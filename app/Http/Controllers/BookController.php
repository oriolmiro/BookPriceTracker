<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(15);
        return view('books.index', compact('books'));
    }

    public function APIindex()
    {
        return response()->json(Book::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(String $title, String $author, int $id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        
        //update the book
        $book->update($validated);
        
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    /**
     * Create a sitemap for the books in file storage.
     */
    public function createSitemap(){
        $books = Book::all();
        
    // Iniciar el document XML del sitemap
    $sitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
    
    // Afegir cada llibre al sitemap
    foreach ($books as $book) {
        $url = $sitemap->addChild('url');
        $url->addChild('loc', htmlspecialchars($book->route()));
        $url->addChild('lastmod', $book->updated_at->toAtomString());
        $url->addChild('changefreq', 'monthly');
        $url->addChild('priority', '0.8');
    }

    // Guardar el sitemap a l'arrel del domini
    $sitemap->asXML(public_path('sitemap.xml'));

    }
}
