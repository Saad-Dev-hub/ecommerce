@extends('layouts.admin.main')
@section('title', 'Edit Subcategory')


@section('content')
    <div class="content-wrapper">
        <div class="content mt-5 pl-5 ml-5">
            <form method='post' action="{{ route('admin.subcategories.update',$subcategory->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ $subcategory->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4d" class="mt-2">Description</label>
                        <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror"
                            id="inputEmail4d">{{ $subcategory->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCategory">Category</label>
                        <select name="category_id" id="inputCategory" class="form-control @error('category_id') is-invalid @enderror">
                           @foreach( $categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach

                        </select>

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="image">Image</label><br>
                        <img src="/{{ $subcategory->image }}" class="w-50 rounded" alt="">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                            id="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-5" name="Update" value='Update'>Save Changes</button>
            </form>
        </div>
    </div>
@endsection
