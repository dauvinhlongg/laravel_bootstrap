<!-- resources/views/shop/category.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }} Products</h1>
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
