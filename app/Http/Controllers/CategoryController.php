<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cates = Category::orderBy('id','DESC')->get();
        return view('category.index')->with(compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate([
                'title' =>'required|unique:categories|max:255',
                'is_active' => 'required'
            ],
            [
                'title.required' => 'Nhập tiêu đề',
                'title.unique' => 'Tiêu đề này đã tồn tại,nhập tiêu đề khác!'
            ]
            );
            $cate = new Category;
            $cate->title = $data['title'];
            $cate->is_active= $data['is_active'];
            $cate->save();

            return redirect()->route('categories.index')->with('status','Thêm danh mục thành công!');

        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cate = Category::find($id);
        return view('category.edit')->with(compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'title' =>'required:categories|max:255',
                'is_active' =>'required',
            ],
            [
                'title.required'=> 'Nhập tiêu đề',
            ]
            );
            $cate =Category::find($id);
            $cate->title = $data['title'];
            $cate->is_active = $data['is_active'];
            $cate->save();

            return redirect()->route('categories.index')->with('status','Cập nhập danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('status','Xoá thành công danh mục');
    }
}
