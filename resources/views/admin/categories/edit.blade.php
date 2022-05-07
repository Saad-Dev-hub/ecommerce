@extends('layouts.admin.main')

@section('title', 'Admin | Edit Category')


@section('content')
    <div class="content-wrapper">
        <div class="content mt-5 pl-5 ml-5">
            <form method='post' action="{{ route('admin.categories.update',$category->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ $category->name }}">
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
                            id="inputEmail4d">{{ $category->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputStates">Status</label>
                        <select name="status" id="inputStates" class="form-control @error('status') is-invalid @enderror">
                            <option {{ ($category->status)==1 ?'selected':'' }}  value="1">Active</option>
                            <option {{ ($category->status)==0 ? 'selected' :'' }}  value="0">Not Active</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="image">Image</label><br>
                        <img src="/{{ $category->image }}" class="w-50 rounded" alt="">
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
