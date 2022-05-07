<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()

    {
        $categories = Category::all();
        $subcategories = Subcategory::with('category')->get();
        $brandsImages = Brand::select('image')->get();
        // get all products in cart for the user using pivot table
        $cartProductsInfo=DB::table('carts')->join('products','products.id','=','carts.product_id')->get();
        $cartProductsWithImage=DB::table('carts')
        ->join('products','products.id','=','carts.product_id')
        ->join('images','images.product_id','=','products.id')
        ->select('products.id','products.name','products.price','products.quantity','products.description','products.brand_id','carts.quantity as cart_quantity','images.image')
        ->where('images.primary',1)
        ->get();
        // dd($cartProductsWithImage);
        $totalPrice= 0;
        foreach($cartProductsWithImage as $cartProduct){
            $totalPrice += $cartProduct->price * $cartProduct->cart_quantity;
        }
        // get each product's image
        $productImages= DB::table('carts') // select all products in cart
            ->join('products', 'carts.product_id', '=', 'products.id') // join products table
            ->join('images', 'products.id', '=', 'images.product_id') // join images table
            ->select('images.image') // select image
            ->where('carts.user_id', auth()->user()->id) // where user id is the same as the logged in user
            ->where('images.primary', 1) // where primary is 1
            ->get();
            // get sum of quantity of each product in cart
        $cartProductsQuantity= DB::table('carts' )
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('carts.quantity')
            ->where('carts.user_id', auth()->user()->id)
            ->get();
        $totalQuantity=0;
        foreach($cartProductsQuantity as $cartProductQuantity){
            $totalQuantity += $cartProductQuantity->quantity;
        }
        
        // share all variables to user.subcategory.index view
        return view('layouts.user.main', compact('categories','subcategories', 'brandsImages', 'cartProductsWithImage', 'productImages','totalPrice', 'totalQuantity'));
    }
}
