<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    //

    public function index()
    {
        $attrs = Attribute::select('id', 'parent_id', 'name')->with('child')->get();

        return view('server.attr.index', compact('attrs'));
    }


    public function create(Request $request)
    {


        return view('server.attr.create');
    }
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'tên danh mục không được để trống',
            ]
        );
        $Attribute = Attribute::create(
            [
                'name' => $request->name,
                'parent_id' => 0
            ]
        );
        // dd( $Attribute->id);


        foreach ($request->attrs  as $value) {
            Attribute::create(
                [
                    'name' => $value,
                    'parent_id' => $Attribute->id
                ]
            );
        }



        return redirect()->route('attributes');
    }
    public function edit($id)
    {
        $attr=Attribute::find($id)->with('child')->first();
// dd($attr->child);
        
        return view('server.attr.update',compact('attr'));
    }
    
    public function update(Request $request)
    {
        return redirect()->route('attributes');
    }

    public function delete($id)
    {

        $attr = Attribute::find($id);
        $attr->where('parent_id', $attr->id)->delete();
        $attr->delete();

        return back();
    }
}
