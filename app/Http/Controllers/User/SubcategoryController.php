<?php

namespace App\Http\Controllers\User;

use App\Models\Image;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # cart products
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
       

        # end cart products

        // this is the default to show all subcategories under a category
        $categories = Category::all();
        $subcategories = Subcategory::with('category')->get();
        //get subcategory by id
        $subcat = Subcategory::find($id);
        //get all products under this subcategory
        $products = $subcat->products;
        // dd($products);
        // get all primary images for products under this subcategory

        $productsImages=Image::whereIn('product_id', $products->pluck('id'))->get();
        $productsWithImages = $products->map(function($product) use ($productsImages) {
            $product->images = $productsImages->where('product_id', $product->id);
            return $product;
        });
        // dd($productsWithImages);
        // dd($productsImages);
        return view('user.subcategory.index', compact('subcat', 'products','productsWithImages', 'productsImages', 'categories', 'subcategories', 'cartProductsInfo', 'cartProductsWithImage', 'totalPrice', 'totalQuantity'));

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
        //
    }
}
