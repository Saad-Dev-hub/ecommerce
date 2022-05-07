@extends('layouts.admin.main')
@section('title', 'Admin | Create Offer')
@section('styles')
    @toastr_css
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content mt-5">
            <form method='post' action="{{ route('admin.products.addOffer') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="products" class="mt-2">Available Products</label>
                        <select name="product" class="form-control">
                        @foreach( $availableProducts as $product )
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                            <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Offer</button>

            </form>
        </div>
    </div>
@endsection



