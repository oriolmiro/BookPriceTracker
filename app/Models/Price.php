<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable = ['book_id','book_store_id','current_price','price_history','update_date','condition','product_url'];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function bookStore()
    {
        return $this->belongsTo(BookStore::class);
    }

    
}
