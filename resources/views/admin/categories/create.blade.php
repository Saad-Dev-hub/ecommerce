@extends('layouts.admin.main')

@section('title', 'Admin | Create Category')


@section('content')
    <div class="content-wrapper">
        <div class="content mt-5 pl-5 ml-5">
            <form method='post' action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                            value="{{ old('name') }}">
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
                            id="inputEmail4d">{{ old('description') }}</textarea>
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
                            <option  value="1">Active</option>
                            <option  value="0">Not Active</option>
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
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                            id="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="add" value='add'>Add Category</button>
            </form>
        </div>
    </div>
@endsection
