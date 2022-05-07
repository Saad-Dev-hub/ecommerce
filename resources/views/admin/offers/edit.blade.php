@extends('layouts.admin.main')

@section('title', 'Admin | Edit Offer')


@section('content')
    <div class="content-wrapper">
        <div class="content mt-5 pl-5 ml-5">
            <form method='post' action="{{ route('admin.offers.update', $offer->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title" class="mt-2">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="name"
                            value="{{ $offer->title }}">
                            @error('title')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="discount" class="mt-2">Discount</label>
                        <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror"
                            value="{{ $offer->discount }}">
                        @error('discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="start_date" class="mt-2">Start Date</label>
                            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                                value="{{ $offer->start_date }}">
                            @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="end_date" class="mt-2">End Date</label>
                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                            value="{{ $offer->end_date }}">
                        @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="status" class="mt-2">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                                <option value="1" @if ($offer->status == 1) selected @endif>Active</option>
                                <option value="0" @if ($offer->status == 0) selected @endif>Inactive</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>
                  </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Description" class="mt-2">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ $offer->description }}</textarea>
                            @error('description')
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
