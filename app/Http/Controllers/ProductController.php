<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttrProduct;
use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Product;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    //
    function index()
    {

        $products =   Product::select('id', 'name', 'price', 'image', 'status')->paginate(5);;
        return view(
            'server.product.product',
            [
                'products' => $products,

            ]
        );
    }
    function create()
    {
        $categories = Category::select('*')->get();
        // dd($categories);


        $attrProducts = Attribute::select('id', 'parent_id', 'name')->with('child')->get();
        //   dd(  $attrProducts);
        return view(
            'server.product.create',
            [
                'category' => $categories,
                'attrProducts' => $attrProducts,
            ]
        );
    }


    // lưu products
    function store(ProductRequest $request)
    {
    //   dd($request->category_id);

        $product = new Product();
        $product->fill($request->except(['images', 'attr_id']));

        if ($request->hasFile('image')) {
            $file =  $request->image;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $product->image = $file->storeAs('images/products/', $filename);
        }
        $product->save();

        // tìm kiếm id mới nhất
        $last_row = Product::select('id')->orderBy('id', 'DESC')->first();

        // kiểm tra tồn tại image
        if ($files = $request->file('images')) {
            // duyệt vòng lặp
            foreach ($files as $image) {
                $filename = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();
                $saveFile = $image->storeAs('images/products/', $filename);
                // thêm vào bảng 
                ImageProduct::create([
                    'product_id' => $last_row->id,
                    'image' => $saveFile
                ]);
            }
        }

        // thêm vào bảng thuộc tính
        foreach ($request->attr_id as $attr) {
            AttrProduct::create([
                'product_id' => $last_row->id,
                'attr_id' => $attr
            ]);
        }


        return redirect()->route('products');
    }


    function edit($id)
    {

        $products = Product::with('images')->with('attrs')->find($id);
        $categories = Category::select('*')->get();
        // foreach($products->attrs as $va){
        // dd($products->attrs);    
        // }
        $attrProducts = Attribute::select('id', 'parent_id', 'name')->with('child')->get();

        //  dd($imageProducts);
        return view(
            'server.product.update',
            [
                'product' => $products,
                'category' => $categories,
                'attrProducts' => $attrProducts,

            ]
        );
    }


    function update(ProductRequest $request, $id)
    {


        $product = Product::find($id);
        // dd($product->image);
        $product->fill($request->except(['images', 'attr_id']));
        if ($file = $request->image) {
            $fileCurrent = public_path() . $product->image;
            if (file_exists($fileCurrent)) {
                unlink($fileCurrent);
            }
            $filename = time() . rand(1, 1000) . '.' . $file->getClientOriginalExtension();
            $product->image = $file->storeAs('images/products/', $filename);
        }

        $product->save();
        // kiểm tra tồn tại image
        if ($files = $request->file('images')) {
            // duyệt vòng lặp mảng request images
            foreach ($files as $image) {
                // kiểm tra trong hệ thống đã tồn tại file chưa
                $filename = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();
                $saveFile = $image->storeAs('images/products/', $filename);
                // thêm ảnh vào bảng imageProduct
                ImageProduct::create([
                    'product_id' => $id,
                    'image' => $saveFile
                ]);
            }
        }



        if ($request->attr_id != []) {
            // dd($request->attr_id);   
            AttrProduct::where('product_id', $id)->delete();
            foreach ($request->attr_id as $attr) {

                AttrProduct::create([
                    'product_id' => $id,
                    'attr_id' => $attr
                ]);
            }
        }


        return redirect()->route('products');
    }






    function DeleteImage($id)
    {

        $images = ImageProduct::find($id);
        // dd($images);
        $fileExist = public_path() . $images->image;
        if (file_exists($fileExist)) {
            unlink($fileExist);
        }

        $images->delete();
        return back();
    }











    function delete($id)
    {
        // dd($id);
        $product = Product::find($id);

        $files = public_path() . $product->image;
        if (file_exists($files)) {
            unlink($files);
        }
        $images = ImageProduct::where('product_id', $id);
        foreach ($images as $image) {
            if ($fileExist = file_exists(public_path() . $image->name)) {
                unlink($fileExist);
            }
        }
        $product->delete();
        return redirect()->to('/admin/products');
    }



    public function search(REQUEST $request)
    {
        $text = $request->text;
        if ($text != '') {
            $Products = Product::where('name', 'like', '%' . $text . '%')->paginate(5);
        } else {
            $Products = Product::select('id', 'name', 'price', 'image', 'status')->paginate(5);
        }
        return view('server.product.product', [
            'products' => $Products,
        ]);
    }



    // public function UpdateStatus(Request $Request)
    // {
    //     $products=new Product();
    //     $product->fill($Request->all())
    //     if($request->status===1){

    //     }
    // }


}
