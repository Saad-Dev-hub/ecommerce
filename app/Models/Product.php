<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'code',
        'price',
        'description',
        'image',
        'quantity',
        'brand_id',
        'subcategory_id',
    ];
    public function sizes()
    {
        return $this->hasMany('App\Models\Size');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function users() {
        return $this->belongsToMany('App\Models\User', 'carts');
    }
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function offer()
    {
        return $this->belongsTo('App\Models\Offer');
    }
}
