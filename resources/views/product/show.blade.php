<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $product->name }}</h2>
                </div>
                <div class="card-body">
                    <p>{{ $product->description }}</p>
                    <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                    <p><strong>Category:</strong> {{ $product->category->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
