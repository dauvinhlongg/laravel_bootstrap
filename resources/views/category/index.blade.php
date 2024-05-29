@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tên mới của danh mục</div> <!-- Change this line -->

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cates as $key => $cate)
                            <tr>
                                <th scope="row">{{$key + 1}}</th> <!-- Changed $key to $key + 1 for proper numbering -->
                                <td>{{$cate->title}}</td>
                                <td>
                                    @if($cate->is_active == 0)
                                    <span class="text-danger">Không kích hoạt</span>
                                    @else
                                    <span class="text-success">Kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('categories.edit', [$cate->id])}}" class="btn btn-primary">Sửa</a>
                                    <form action="{{route('categories.destroy', [$cate->id])}}" method="POST" style="display:inline;">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá danh mục này?');">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
