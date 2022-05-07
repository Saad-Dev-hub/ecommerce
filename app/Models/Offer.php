<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['start_date', 'end_date', 'title', 'description', 'status', 'discount'];
    // offer has many products (one to many)
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
