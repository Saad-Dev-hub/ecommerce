@extends('layouts.admin.main')

@section('title', 'Admin | Create Product')
@section('styles')
@toastr_css
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content mt-5">
            <form method='post' action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4d" class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4d" value="{{ old('name') }}">
                        @error('name')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Code</label>
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                            id="inputPassword4" value="{{ old('number') }}">
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <label for="inputAddress">Price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                            id="inputAddress" value="{{ old('price') }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Quantity</label>
                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                            id="inputAddress2" value="{{ old('quantity') }}">
                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputStated">Brand</label>
                        <select name="brand_id" id="inputStated"
                            class="form-control @error('brand_id') is-invalid @enderror">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                            @endforeach
                            @error('brand_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>


                    <div class="form-group col-md-4">
                        <label for="inputStateq">Sub-Category</label>
                        <select name="subcategory_id" id="inputStateq"
                            class="form-control @error('subcategory_id') is-invalid @enderror">
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory['id'] }}">{{ $subcategory['name'] }}</option>
                            @endforeach
                            @error('subcategory_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>



                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="20"
                            rows="5">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Size</label>
                        <select name="size" id="inputCity" class="form-control @error('size') is-invalid @enderror">
                            <option value=""></option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        @error('size')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                            id="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="image">Secondary Images</label>
                        <input type="file" name="secondary_images[]"
                            class="form-control @error('secondary_images') is-invalid @enderror" id="image" multiple>

                        @error('secondary_images')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <button type="submit" class="btn btn-primary" name="add" value='add'>Add Product</button>
                <button type="submit" class="btn btn-outline-primary" name="add_new" value='add&new'>Add & New</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
@toastr_js
@toastr_render
@endsection
