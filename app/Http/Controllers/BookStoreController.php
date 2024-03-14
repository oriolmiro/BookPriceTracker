<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use App\Http\Requests\StoreBookStoreRequest;
use App\Http\Requests\UpdateBookStoreRequest;

class BookStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Display a listing of the resource for API.
     */
    public function APIindex()
    {
        //$bookStores = BookStore::all();
        //select all book stores with name and url
        $bookStores = BookStore::select('name', 'url')->get();
        return response()->json($bookStores, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookStore $bookStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookStore $bookStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookStoreRequest $request, BookStore $bookStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookStore $bookStore)
    {
        //
    }
}
