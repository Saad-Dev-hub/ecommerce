<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table='subcategories';

    protected $fillable = ['name', 'description', 'image', 'category_id'];
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'subcategory_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
