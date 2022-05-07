<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $request->validated();
        // save the data to the database
        $category=new Category;
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        // save the image to the storage in category folder
        //create a folder in storage/app/category
        $newImageName=uniqid().time().'.'.$request->image->extension();
        $request->image->move(public_path('images/categories'), $newImageName);
        $category->image='images/categories/'.$newImageName;
        $category->save();
        // redirect to the index page
        toastr()->success('Category has been created successfully!');
        return redirect()->route('admin.categories.index');
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
        $category=Category::findorfail($id);
        return view('admin.categories.edit', compact('category'));
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
        $category=Category::findorfail($id);
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255',
            'status' => 'required|in:0,1',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        // save the image to the storage in category folder
        if($request->hasFile('image')){
            $newImageName=uniqid().time().'.'.$request->image->extension();
            $request->image->move(public_path('images/categories'), $newImageName);
            $category->image='images/categories/'.$newImageName;
        }
        $category->save();
        // redirect to the index page
        toastr()->success('Category has been updated successfully!');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findorfail($id);
        $category->delete();
        //delete the image from the storage in category folder
        if(file_exists($category->image)){
            unlink($category->image);
        }

        toastr()->success('Category has been deleted successfully!');
        return redirect()->route('admin.categories.index');
    }
}
