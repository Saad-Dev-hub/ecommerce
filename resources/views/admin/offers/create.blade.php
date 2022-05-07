@extends('layouts.admin.main')

@section('title', 'Admin | Create Offer')
@section('styles')
    @toastr_css
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content mt-5">
            <form method='post' action="{{ route('admin.offers.store') }}" >
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4d" class="mt-2">Title</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4d" value="{{ old('title') }}">
                        @error('title')
                            <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Discount</label>
                        <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror"
                            id="inputAddress" value="{{ old('discount') }}">
                        @error('discount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Start Date</label>
                        <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                            id="inputAddress" value="{{ old('start_date') }}">
                        @error('start_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress">End Date</label>
                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                            id="inputAddress" value="{{ old('end_date') }}">
                        @error('end_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputAddress">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="inputAddress">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                {{-- // preview all products --}}
                <div class="form-row">
                  </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="20"
                            rows="5">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>




                <button type="submit" class="btn btn-primary" name="add" value='add'>Add Offer</button>
                <button type="submit" class="btn btn-outline-primary" name="add_new" value='add&new'>Add & New</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    @toastr_js
    @toastr_render
@endsection
