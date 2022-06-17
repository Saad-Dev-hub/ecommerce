<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Image as ProductImage;
use Intervention\Image\ImageManager as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::with('brand', 'subcategory', 'images')->get();

        //first senario
        foreach ($products as $product) {
            $product->image = $product->images->where('primary', 1)->first();
        }

        // dd($products);
        // second senario
        // $products = $products->map(function ($product) {
        //     $product->image = $product->images;
        //     return $product;
        // });


        // dd( $products);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::select('id', 'name')->get();
        $subcategories = Subcategory::select('id', 'name')->get();
        return view('admin.products.create', compact('brands', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //upload product and its main image and secondary images
        //upload product main image and make primary column 1

        $request->validated();
        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->save();



        $mainImageName = uniqid() . time() . '.' . $request->image->extension();

        ProductImage::create([
            'image' => $request->file('image')->storeAs('images/products/main', $mainImageName),
            'primary' => 1,
            'product_id' => $product->id
        ]);
        move_uploaded_file($request->file('image'), public_path('images/products/main/' . $mainImageName));


        //upload product secondary images and make primary column 0
        if ($request->hasFile('secondary_images')) {
            foreach ($request->file('secondary_images') as $image) {
                $secondaryImageName = uniqid() . time() . '.' . $image->extension();
                // resizing image to fit in the product image
                ProductImage::create([
                    'image' => $image->storeAs('images/products/secondary', $secondaryImageName),
                    'primary' => 0,
                    'product_id' => $product->id
                ]);
                $secondaryImage = new Image;
                $secondaryImage->make($image)->save(public_path('images/products/secondary/' . $secondaryImageName));
            }
        }

        //upload product size
        if ($request->has('size') && $request->size != null) {
            Size::create([
                'size' => $request->size,
                'product_id' => $product->id
            ]);
        }
        // check whether user has pressed add or add_new button
        if ($request->has('add_new')) {
            toastr()->success('Product Created Successfully');
            return redirect()->route('admin.products.create');
        } else {
            toastr()->success('Product Created Successfully');
            return redirect()->route('admin.products.index');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::select('id', 'name')->get();
        $subcategories = Subcategory::select('id', 'name')->get();
        $mainImageName = $product->images->where('primary', 1)->first()->image;
        $secondaryImages = $product->images->where('primary', 0)->pluck('image', 'id');
        // dd($secondaryImages);
        return view('admin.products.edit', compact('product', 'brands', 'subcategories', 'mainImageName', 'secondaryImages'));
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
        $product = Product::find($id);

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'price' => 'required',
            'description' => 'required',
            'size' => 'nullable|string|in :S,M,L,XL,XXL',
            'quantity' => 'required',
            'brand_id' => 'required',
            'subcategory_id' => 'required',
            'image' => 'image|sometimes|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'secondary_images.*' => 'image|sometimes|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->brand_id = $request->brand_id;
        $product->subcategory_id = $request->subcategory_id;


        if ($request->hasFile('image')) {
            //Delete old main image
            $oldMainImage = $product->images->where('primary', 1)->first();
            unlink(public_path($oldMainImage->image));
            $mainImageName = uniqid() . time() . '.' . $request->image->extension();
            $product->images()->where('primary', 1)->update(['image' => $request->file('image')->storeAs('images/products/main', $mainImageName)]);
            move_uploaded_file($request->file('image'), public_path('images/products/main/' . $mainImageName));
        }

        //upload product main image and make primary column 1
        if ($request->hasFile('image')) {
            //delete old main image
            $oldMainImage = $product->images->where('primary', 1)->first();
            unlink(public_path($oldMainImage->image));

            $mainImageName = uniqid() . time() . '.' . $request->image->extension();
            ProductImage::where('product_id', $product->id)->where('primary', 1)->update([
                'image' => $request->file('image')->storeAs('images/products/main', $mainImageName),
                'primary' => 1
            ]);
            move_uploaded_file($request->file('image'), public_path('images/products/main/' . $mainImageName));
        }

        //upload product secondary images and make primary column 0
        if ($request->hasFile('secondary_images')) {
            foreach ($request->file('secondary_images') as $image) {
                $secondaryImageName = uniqid() . time() . '.' . $image->extension();
                ProductImage::create([
                    'image' => $image->storeAs('images/products/secondary', $secondaryImageName),
                    'primary' => 0,
                    'product_id' => $product->id
                ]);
                // remove old secondary images

                move_uploaded_file($image, public_path('images/products/secondary/' . $secondaryImageName));
            }
        }
        $product->save();

        toastr()->success('Product Updated Successfully');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //delete main image
        $mainImage = $product->images->where('primary', 1)->first();
        $secondaryImages =ProductImage::where('product_id', $product->id)->where('primary', 0)->get();
        if ($mainImage) {
            unlink(public_path($mainImage->image));
        }
        //delete secondary images
        if ($secondaryImages) {
            foreach ($secondaryImages as $image) {
                unlink(public_path($image->image));
            }
        }
        $product->delete();

        toastr()->success('Product Deleted Successfully');
        return redirect()->route('admin.products.index');
    }


    public function deleteImage($id)
    {
        $image = ProductImage::find($id);

        $image->delete();
        //delete image from public folder
        unlink(public_path($image->image));

        toastr()->success('Image Deleted Successfully');
        return redirect()->route('admin.products.edit', $image->product_id);
    }
    public function createOffer(Request $request,$id)
    {
        $offer=Offer::where('id',$id)->first();
        $availableProducts = Product::where('quantity', '>', 0)->get();

        return view('admin.products.create-offer',compact('availableProducts','offer'));
    }

    public function addOffer(Request $request)
    {
        $product=Product::find($request->product);
        $offer=Offer::where('id',$request->offer_id)->first();
        $product->offer_id=$offer->id;
        // calculate price of product after discount
        $product->price=$product->price-($product->price*($offer->discount/100));
        $product->save();
        toastr()->success('Offer Added Successfully');
        return redirect()->route('admin.offers.index');

    }

}
