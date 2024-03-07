<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookStore extends Model
{
    use HasFactory;
    protected $fillable = ['name','url'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
