@extends('admin.master')
@section('page_title', 'Product')
@section('product_select', 'active')
@section('container')
<div class="layout-wrapper">
    @include('admin.partials.sidebar')
    <div class="content-wrapper">
        <div class="card-title">
            <h5>Products</h5>
            <a class="btn-success add-btn" href="{{ route('admin.manage.product') }}"><i class="fas fa-plus"></i> Add
                New</a>
        </div>
        <div class="table_area">
            <table id="table">
                <thead>
                    <tr>
                        <td>#</td>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Barcode Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $id = 1
                    @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{ $product->barcode }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->details }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><img src="/product/{{ $product->image }}"
                                alt="{{ $product->name }}" class="product_tumb"></td>
                        @php
                        $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
                        @endphp
                        <td><img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128)) }}"></td>
                        <td class="action_icon_row">
                            <a class="btn-primary action-btn"
                                href="{{ route('admin.edit.product', $product->id) }}"><i
                                    class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.destory.product', $product->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn-danger action-btn"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection