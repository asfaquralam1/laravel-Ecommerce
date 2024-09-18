@extends('master')
@section('content')
    <section id="products-page">
        <div class="container">
            <h1 style="text-align: center">Products</h1>
            <div class="row">
                @forelse($products as $product)
                    <div class="col-3">
                        <div class="card">
                            <a href="{{ route('product_details', $product->id) }}"><img src="/product/{{ $product->image }}"
                                    alt="product_image" class="product_image"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text" style="text-align: justify;">{{ $product->details }}</p>
                                @if ($product->discount_price > 0)
                                    <p class="card-text" style="text-align: justify;">Tk. {{ $product->discount_price }}
                                    </p>
                                    <p class="card-text" style="text-align: justify;">Tk.
                                        <del>{{ $product->price }}</del>
                                    </p>
                                @elseif ($product->discount_price == 0)
                                    <p class="card-text" style="text-align: justify;">Tk. {{ $product->price }}</p>
                                @endif
                                <form action="{{ route('add.to.cart', $product->id) }}" method="post">
                                    @csrf
                                    <button class="add-btn">ADD TO CART </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 style="text-align: center;padding-top:40px;">No products avialable at the moment</h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection