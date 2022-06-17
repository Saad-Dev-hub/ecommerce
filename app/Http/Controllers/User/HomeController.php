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
    public function index(Request $request)

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
        $allProductsWithImages= DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->whereIn('subcategory_id',[19,18,17,16,15,14])->orderBy('products.id','asc')->get();
            
            $womenProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',14)->get();
            $menProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',15)->get();
            $sunglassesProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',16)->get();
            $childernProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',17)->get();
            $scarfProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',18)->get();
            $handmadeProducts=DB::table('products')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->select('products.id','products.name','products.price','products.quantity','products.brand_id','images.image','subcategories.name as subcategory_name')
            ->where('images.primary', 1)
            ->where('subcategory_id',19)->get();
    
            // dd($allProductsWithImages);
        return view('layouts.user.main', compact('categories','subcategories', 'brandsImages', 'cartProductsWithImage', 'productImages','totalPrice', 'totalQuantity','allProductsWithImages','womenProducts','menProducts','sunglassesProducts','childernProducts','scarfProducts','handmadeProducts'));
    }
}
