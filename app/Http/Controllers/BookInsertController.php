<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookInsertController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @OA\Post(
     *     path="/api/books",
     *     tags={"Books"},
     *     summary="Add a new book to the library",
     *     description="Inserts a new book into the database",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Book object that needs to be added to the store",
     *         @OA\JsonContent(ref="#/components/schemas/Book")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Book created"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid input"
     *     )
     * )
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|max:13|unique:books',
            'edition' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $book = Book::create($validator->validated());

        return response()->json($book, 201);
    }
}
