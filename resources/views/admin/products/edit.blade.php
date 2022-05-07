@extends('layouts.admin.main')
@section('title', 'Edit Product')
@section('styles')
    @toastr_css
    <style>
        #update{
            position: absolute;
            margin-top: 490px;
        }
        #images{
            position: absolute;
            top: 1250px;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content mt-5">
            <form method='POST' action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4d" class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4d"
                            value="{{ $product->name }}">
                        @error('name')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Code</label>
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                            id="inputPassword4" value="{{ $product->code }}">
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-md-4">
                        <label for="inputAddress">Price</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                            id="inputAddress" value="{{ $product->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Quantity</label>
                        <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                            id="inputAddress2" value="{{ $product->quantity }}">
                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror



                    </div>

                </div>

                <div class="form-row">


                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Brand</label>
                        <select name="brand_id" id="inputAddress2"
                            class="form-control @error('brand_id') is-invalid @enderror">
                            @foreach ($brands as $brand)
                                <option {{ $product->brand_id == $brand->id ? 'selected' : '' }}
                                    value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>


                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Subcategory</label>
                        <select name="subcategory_id" id="inputAddress2"
                            class="form-control @error('category_id') is-invalid @enderror">
                            @foreach ($subcategories as $subcategory)
                                <option {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}
                                    value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>


                </div>


                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="inputAddress2">Description</label>
                        <textarea name="description" id="inputAddress2" class="form-control @error('description') is-invalid @enderror"
                            rows="3">{{ $product->description }}</textarea>
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

                <div class="form-group col-md-6">
                    <label for="inputAddress2">Main Image</label><br>
                    <img src="{{ asset($mainImageName) }}" alt="" width="200">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        id="inputAddress2">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                {{-- // make a div to preview secondary images --}}
                <input type="file" name="secondary_images[]"
                    class="w-25 form-control @error('secondary_images') is-invalid @enderror" id="images" multiple>
                @error('secondary_images')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <input id="update" type="submit" name="update" value="Update" class="btn btn-primary">
            </form>
            <div class="form-row" >
                <div class="form-group col-md-12">
                    <label for="inputAddress2">Secondary Images</label>
                    <div class="row">
                        @foreach ($secondaryImages as $id => $secondaryImage)
                            <form></form><!-- form to skip first iteration -->
                            <div class="col-md-3">
                                <img src="{{ asset($secondaryImage) }}" alt="" width="200" height="300"><br>
                                <form action="{{ route('admin.products.deleteImage', $id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button style="margin-left: 30%" type="submit" name="deleteImage"
                                        class="btn btn-danger btn-sm mt-2">Delete</button>
                                </form>
                            </div>
                        @endforeach
                    </div>


                </div>

            </div>

        </div>

    </div>
@endsection
@section('scripts')
    @toastr_js
    @toastr_render
@endsection
