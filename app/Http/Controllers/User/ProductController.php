<?php

namespace App\Http\Controllers\User;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function view($id)
    {
        $prod=Product::findorfail($id);
        // dd($product);
        $subcategory=Subcategory::findorfail($prod->subcategory_id);
        $category=Category::findorfail($subcategory->category_id);
        $categoryName=$category->name;
        $images=Image::where('product_id',$id)->get();
        $youMayAlsoLike=Product::where('subcategory_id',$subcategory->id)->where('id','!=',$id)->get();
 #region cart products
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
 // dd($totalPrice);
 // get each product's image
 $productImages= DB::table('carts') // select all products in cart
     ->join('products', 'carts.product_id', '=', 'products.id') // join products table
     ->join('images', 'products.id', '=', 'images.product_id') // join images table
     ->select('images.image') // select image
     ->where('carts.user_id', auth()->user()->id) // where user id is the same as the logged in user
     ->where('images.primary', 1) // where primary is 1
     ->get();
     $cartProductsQuantity= DB::table('carts' )
     ->join('products', 'carts.product_id', '=', 'products.id')
     ->select('carts.quantity')
     ->where('carts.user_id', auth()->user()->id)
     ->get();
 $totalQuantity=0;
 foreach($cartProductsQuantity as $cartProductQuantity){
     $totalQuantity += $cartProductQuantity->quantity;
 }


 #endregion


        return view('user.products.productDetails',compact('prod','images','youMayAlsoLike','cartProductsWithImage','totalPrice','productImages','totalQuantity','categoryName'));
        //  return view('layouts.user.product',compact('product'));
    }
}
