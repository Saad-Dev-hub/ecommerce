<?php

namespace App\Http\Controllers\Admin;

use COM;
use Faker\Core\Uuid;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $request->validated();
        // save the data to the database
        $brand=new Brand;
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->status=$request->status;
        // save the image to the storage in brand folder
        //create a folder in storage/app/brand
        $newImageName=uniqid().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images/brands'), $newImageName);
        $brand->image='images/brands/'.$newImageName;
        $brand->save();
        // redirect to the index page
        toastr()->success('Brand has been created successfully!');
        return redirect()->route('admin.brands.index');
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
        //validate the id
        $brand=Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
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
        // check if the id is valid
        $brand=Brand::findOrFail($id);
        // validate the data
        $this->validate($request, [
            'name' => 'required|string|max:60',Rule::unique('brands')->ignore($id,'id'),
            'description' => 'nullable|string',
            'status' => 'required|in:1,0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //check if the request has the image
        if($request->hasFile('image')){
            //delete the old image
            $oldImage=$brand->image;
            if(file_exists($oldImage)){
                unlink($oldImage);
            }
            //save the new image
            $newImageName=uniqid().time().'.'.$request->image->extension();
            $request->image->move(public_path('images/brands'), $newImageName);
            $brand->image='images/brands/'.$newImageName;

        }
        //update the data
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->status=$request->status;
        $brand->update();
        //redirect to the index page
        toastr()->success('Brand updated successfully!');
        return redirect()->route('admin.brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get the brand by id
        $brand=Brand::find($id);
        //delete the image from the storage
        unlink(public_path($brand->image));
        //delete the brand from the database
        $brand->delete();
        toastr()->success('Brand deleted successfully!');
        return redirect()->route('admin.brands.index');

    }
}
