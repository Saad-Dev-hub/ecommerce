<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\SubcategoryRequest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryRequest $request)
    {
        $request->validated();
        $subcategory = new Subcategory();
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->category_id = $request->category_id;
        $newImageName=uniqid().time().'.'.$request->image->extension();
        // save image with different sizes in different folders using intervention
        //save original image in public/images/subcategories/original
        $request->image->move(public_path('images/subcategories/'), $newImageName);
        // $image->fit(500)->save(public_path('/images/subcategories/thumbs/'.$newImageName,100));
        // $image->fit(400)->save(public_path('/images/subcategories/small/'.$newImageName,100));
        $subcategory->image='images/subcategories/'.$newImageName;
        $subcategory->save();
        toastr()->success('Subcategory has been created successfully!');
        return redirect()->route('admin.subcategories.index');

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
        $subcategory = Subcategory::findOrFail($id);
        $categories = Category::select('id', 'name')->get();
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->category_id = $request->category_id;
        if($request->hasFile('image')){
            // delete old images for the subcategory
            $oldImage = $subcategory->image;
            $oldThumb = str_replace('images/subcategories/', 'images/subcategories/thumbs/', $oldImage);
            $oldSmall = str_replace('images/subcategories/', 'images/subcategories/small/', $oldImage);
            unlink($oldImage);
            unlink($oldThumb);
            unlink($oldSmall);

            $image = $request->file('image');
            $newImageName=uniqid().time().'.'.$image->extension();
            // save image with different sizes in different folders using intervention
            // $image = Image::make($image);//
            $image=Image::make($image)->resize(700)->fit(700)->save(public_path('/images/subcategories/'.$newImageName,100));
            $image=Image::make($image)->resize(500)->fit(500)->save(public_path('/images/subcategories/thumbs/'.$newImageName,100));
            $image=Image::make($image)->resize(400)->fit(400)->save(public_path('/images/subcategories/small/'.$newImageName,100));

            // $image->fit(600)->save(public_path('/images/subcategories/'.$newImageName,100));
            // $image->fit(300)->save(public_path('/images/subcategories/thumbs/'.$newImageName,100));
            // $image->fit(250)->save(public_path('/images/subcategories/small/'.$newImageName,100));
            $subcategory->image='images/subcategories/'.$newImageName;
        }
        $subcategory->save();
        toastr()->success('Subcategory has been updated successfully!');
        return redirect()->route('admin.subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $oldImage = $subcategory->image;
        $oldThumb = str_replace('images/subcategories/', 'images/subcategories/thumbs/', $oldImage);
        $oldSmall = str_replace('images/subcategories/', 'images/subcategories/small/', $oldImage);
        unlink($oldImage);
        unlink($oldThumb);
        unlink($oldSmall);
        $subcategory->delete();
        toastr()->success('Subcategory has been deleted successfully!');
        return redirect()->route('admin.subcategories.index');
    }
}
