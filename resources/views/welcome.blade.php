@extends('layouts.app')

@section('content')
@if (session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif

<section class="py-5 bg-light position-relative">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5 justify-content-center">
            @foreach($products as $product)
                <div class="col mb-5">
                    <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden bg-white position-relative">
                        <!-- Product image-->
                        <div class="position-relative">
                            <img class="card-img-top img-fluid" src="{{ asset('images') }}/{{$product->slide_url}}"
                                alt="Product image" />
                            <div class="badge bg-danger position-absolute top-0 start-0 m-2 p-2 text-white shadow-sm"
                                style="font-size: 0.8em; font-weight: 700;">New Arrival</div>
                        </div>
                        <!-- Product details-->
                        <div class="card-body p-4 text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder text-primary">{{$product->title}}</h5>
                            <!-- Product price-->
                            <p class="text-muted">{{$product->price}}.000VNĐ</p>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                            <form action="{{ route('addtocart',[$product->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="qty" value="1">
                               
                                <button class="btn btn-gradient-primary btn-transition mt-auto" type="submit">Add to
                                    cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

<style>
    body {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        transition: transform 0.3s;
    }

    .card:hover .card-img-top {
        transform: scale(1.05);
    }

    .btn-transition {
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-gradient-primary {
        background: linear-gradient(135deg, #007bff, #6c757d);
        border-color: transparent;
    }

    .btn-gradient-primary:hover {
        background: linear-gradient(135deg, #0056b3, #5a6268);
    }

    .badge {
        font-size: 0.75em;
        font-weight: 600;
    }
</style>