<!-- resources/views/shop/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Danh sách sản phẩm</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<!-- resources/views/shop/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Products</h1>
    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
            </div>
        @endforeach
    </div>
@endsection
