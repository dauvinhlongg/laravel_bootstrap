@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-dark text-white text-center py-3">
                    <h3 class="mb-0">Thêm sản phẩm</h3>
                </div>

                <div class="card-body p-4">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Tên sản phẩm</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-lg" id="title" placeholder="Nhập tên sản phẩm">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label fw-bold">Giá cả</label>
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control form-control-lg" id="price" placeholder="Nhập giá sản phẩm">
                        </div>

                        <div class="mb-3">
                            <label for="slide_url" class="form-label fw-bold">Đường dẫn hình ảnh</label>
                            <input type="file" name="slide_url" class="form-control form-control-lg" id="slide_url">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label fw-bold">Danh mục</label>
                            <select name="category_id" class="form-select form-select-lg" id="category">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
