<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use App\Http\Requests\StoreBookStoreRequest;
use App\Http\Requests\UpdateBookStoreRequest;
use App\Models\Book;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class BookPriceUpdateController extends Controller
{

    public function takeISBM(){
        //take the ISBM from a random Book
        $book = Book::where('isbn','!=','')->inRandomOrder()->first();
        return $book->isbn;
        
    }

    /**
     * @OA\Post(
     *     path="/update-price",
     *     summary="Update book price",
     *     description="Update the price of a book in a specific bookstore",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UpdatePriceRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Price updated successfully"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function updatePrice(Request $response){
        Log::info('Entro');

        //validate
        $response->validate([
            'EAN13' => 'required',
            'url' => 'required',
            'ecommerce' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);
        Log::info('Valido');

        try{
        $book = Book::where('isbn', $response->EAN13)->first();
        $bookStore = BookStore::where('name', $response->ecommerce)->first();
        Log::info('Obtinene datos');


        $price = Price::updateOrCreate(
            ['book_id' => $book->id, 'book_store_id' => $bookStore->id],
        [
            'current_price' => $response->price,
            'product_url' => $response->url,
            'condition' => $response->status
        ]);
        $priceHistory = json_decode($price->price_history, true) ?? [];

        $lastRecordedPrice = end($priceHistory)['price'] ?? null;
        if ($lastRecordedPrice !== $response->price) {
            // Add current price and date to price history
            $priceHistory[] = [
                'price' => $response->price,
                'date' => now()->toDateString(),
            ];
            //concat $priceHistory with the price history from the database
            //$priceHistory = array_merge($priceHistory, $priceHistory);
            //update the price history in the database
            $price->price_history = json_encode($priceHistory);
            $price->update_date = now()->toDateString();
            $price->save();
        }

        //Log
        Log::info('Update book:' . $book->isbn .' Price updated: ' . $price->price);

        } catch (\Exception $e){
            return response()->json('Validation error'. $e, 422);
        }

        return response()->json('Price updated successfully', 200);

    }
}