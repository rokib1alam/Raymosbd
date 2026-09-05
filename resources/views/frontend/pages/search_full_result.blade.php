@extends('layouts.app')
@section('title','Shopwise|Product')
@section('content')
<!-- START HEADER -->
@include('frontend.layouts.others_header')
<!--START SECTION-->
<div class="container py-5">
    <h4 class="mb-4">Search Results for "{{ $query }}"</h4>

    @if($products->count())
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <a href="{{ url('products/'.$product->product_slug) }}">
                            <img src="{{ asset($product->thumbnail) }}" class="card-img-top" alt="{{ $product->product_name }}">
                        </a>
                        <div class="card-body">
                                    @php
                                        $price = $product->discount_price ?? $product->selling_price;
                                    @endphp
                                    <h6 class="product_title">
                                        <a href="{{ route('product.details', $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </h6>
                                    <div class="product_price">
                                        <span class="price">{{ $setting->currency }}{{ number_format($price, 2) }}</span>
                                        @if($product->discount_price)
                                            <del>{{ $setting->currency }}{{ number_format($product->selling_price, 2) }}</del>
                                        @endif
                                    </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $products->withQueryString()->links() }}
        </div>
    @else
        <p>No products found for this search.</p>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="mt-3 d-flex justify-content-center">
                {{ $products->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
<!-- END SECTION -->
<!-- START FOOTER -->
@include('frontend.layouts.others_footer')
<!-- END FOOTER -->
@endsection
