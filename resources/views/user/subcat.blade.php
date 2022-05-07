@forelse($products as $product)
    <div class="col-md-4 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                @foreach ($productsImages as $image)
                    @if ($image->product_id == $product->id)
                        @if ($image->primary == 1)
                            <img width="200px" src="{{ asset($image->image) }}">
                        @else
                            <img style="width: 100px" src="{{ asset($image->image) }}">
                        @endif
                    @endif
                @endforeach

                <br>
            </div>
            <div class="product-content">
                <div class="price">{{ $product->price }}</div>
            </div>



        </div>
    </div>
@empty
    <div class="col-md-12">
        <div class="alert alert-danger">
            <h3>No products found</h3>
        </div>
    </div>

@endforelse
