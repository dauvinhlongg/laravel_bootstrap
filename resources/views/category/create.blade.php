@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h3 class="mb-0">Thêm danh mục</h3>
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

                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Tên danh mục</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-lg" id="title" placeholder="Nhập tên danh mục">
                            </div>
                            <div class="mb-3">
                                <label for="is_active" class="form-label fw-bold">Kích hoạt</label>
                                <select class="form-select form-select-lg" name="is_active" id="is_active">
                                    <option value="1" selected>Kích hoạt</option>
                                    <option value="0">Không kích hoạt</option>
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
