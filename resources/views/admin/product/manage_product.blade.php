@extends('admin.master')
@section('page_title', 'Product')
@section('product_select', 'active')
@section('container')
    <div class="row">
        <div class="col-2">
            @include('admin.sidebar')
        </div>
        <div class="col-10">
            <div
                style="display:flex;justify-content: space-between;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);padding:10px !important;">
                <h4></i>Product</h4>
                <p><i class="fas fa-user"></i>{{ auth()->user() }}</p>
            </div>
            <button class="add-btn"><a href="{{ route('admin/manage-product') }}">Add Product</a></button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Quantity</th>
                        <th>image</th>
                        <th colspan="2">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->name }}</td>
                            <td class="text-center">{{ $product->category }}</td>
                            <td class="text-center">{{ $product->details }}</td>
                            <td class="text-center">{{ $product->price }}</td>
                            <td class="text-center">{{ $product->discount_price }}</td>
                            <td class="text-center">{{ $product->quantity }}</td>
                            <td class="text-center"><img src="/product/{{ $product->image }}" alt="{{ $product->name }}"
                                    class="product_image"></td>
                            <td>
                                <button class="edit-btn"
                                    onclick="window.location.href='{{ route('admin/edit-product', $product->id) }}';">Edit</button>

                            </td>
                            <td>
                                <form action="{{ route('admin/destory-product', $product->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="delete-btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
