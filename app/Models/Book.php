<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','author','isbn','edition'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
    
}
