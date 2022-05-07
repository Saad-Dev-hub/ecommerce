<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        

       


        return view('user.cart.index', compact('cartProductsWithImage', 'totalPrice', 'productImages', 'totalQuantity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=Product::findorfail($request->product_id);
        // add product to cart if not already in cart and reduce quantity of product
        $cart=Cart::where('user_id',auth()->user()->id)->where('product_id',$request->product_id)->first();
        if($cart){
            Cart::where('user_id',auth()->user()->id)->where('product_id',$request->product_id)->increment('quantity',$request->quantity);
        }
        else{
            $cart=new Cart();
            $cart->user_id=auth()->user()->id;
            $cart->product_id=$request->product_id;
            $cart->quantity=1;
            $cart->save();
        }
        $product->quantity=$product->quantity-1;
        $product->save();
        toastr()->success('Product added to cart successfully');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // remove product from cart and increase quantity of product
        $product=Product::findorfail($id);
        $cart=Cart::where('user_id',auth()->user()->id)->where('product_id',$id)->first();
        // remove product from cart using product id
        DB::table('carts')->where('product_id',$id)->delete();
        

        $product->quantity=$product->quantity+1;
        $product->save();
        toastr()->success('Product removed from cart successfully');
        return redirect()->back();
    }
}
