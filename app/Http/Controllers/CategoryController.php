<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::select('id', 'name', 'slug')->paginate(10);

        return view('server.category.category', compact('category'));
        //
    }

    public function create()
    {
        return view('server.category.create');
        //
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
            ],
            [
                'name.required' => 'vui lòng nhập tên danh mục',
                'slug.required' => 'vui lòng nhập tên slug danh mục'
            ]
        );
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category');  

        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('server.category.update',compact('category'));
        //
    }


    public function update(Request $request, $id)
    {  
        $request->validate(
        [
            'name' => 'required',
            'slug' => 'required',
        ],
        [
            'name.required' => 'vui lòng nhập tên danh mục',
            'slug.required' => 'vui lòng nhập tên slug danh mục'
        ]);

        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category'); 

   
        
        //
    }


    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category');

        //
    }
}
