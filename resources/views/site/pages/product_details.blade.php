@extends('site.pages.master')
@section('content')
    <section id="product_deatils">
        <div class="container">
        <div class="breadcrumb-section pt-4 py-4">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="product_image_section">
                        <a href="{{ route('product_details', $product->id) }}"><img src="/product/{{ $product->image }}"
                            alt="product_deatils_main_img" class="product_deatils_main_img"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text" style="text-align: justify;">{{ $product->details }}</p>
                        @if (is_null($product->discount_price))
                            <p class="card-text" style="text-align: justify;">Tk. {{ $product->discount_price }}</p>
                            <p class="card-text" style="text-align: justify;">Tk. <del>{{ $product->price }}</del></p>
                        @elseif (is_null($product->price))
                            <p class="card-text" style="text-align: justify;">Tk. {{ $product->price }}</p>
                        @endif
                        <form action="{{ route('add.to.cart', $product->id) }}" method="post">
                            @csrf
                            <button class="add-btn">ADD TO CART</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
