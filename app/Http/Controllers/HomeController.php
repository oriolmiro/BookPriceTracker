<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $books = Book::take(20)->get();
        return view('home', compact('books'));
    }
}
