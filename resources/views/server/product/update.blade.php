@extends('server.LayoutServer')
@section('title', ' Sửa Sản phẩm ')
@section('header', ' Sửa Sản phẩm ')

@section('content')
    <a class="btn btn-primary" href="{{ route('products') }}">quay lại</a>
    <br>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <div class="form-group">
            <label for="">name </label>
            <input type="text" class="form-control" name="name" value=" {{ $product->name }} {{ old('name') }}"
                placeholder="">

        </div>
        <div class="form-group">
            <label for="">price</label>
            <input type="text" class="form-control " name="price" value="{{ $product->price }}  {{ old('price') }}"
                placeholder="">

        </div>
        <div class="form-group">
            <label for="">qty</label>
            <input type="text" class="form-control " name="qty" value="{{ $product->qty }}  {{ old('qty') }}"
                placeholder="">
        </div>

        <div class="form-group">
            <label for="">image main</label>
            <input type="file" class="form-control" name="image" value=" {{ old('image') }}" placeholder="">
            <img src="{{ asset($product->image) }}" alt="">
        </div>
        <div class="form-group">
            <label for="">images</label>
            <input type="file" class="form-control" multiple name="images[]" value="{{ old('image') }}" placeholder="">
        </div>
        
        @foreach ($product->images as $img)
              <a href="{{route('products.deleteImage',$img->id)}}" class="btn text-danger " >X</a>
                    <img width="100px" id="{{ $img->id }}" src="{{ asset($img->image) }}" alt="">         
            @endforeach
 
        <div class="form-group">
            <label for="">slug</label>
            <input type="text" class="form-control" name="slug" value="{{ $product->slug }}   {{ old('slug') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">sale</label>
            <input type="text" class="form-control" name="sale" value="{{ $product->sale }}  {{ old('sale') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">desc</label>
            <textarea name="desc" id="editor1" cols="30" rows="10"> {{ $product->desc }} </textarea>


           {{-- {{ $product->category_id}} --}}
          
        </div>
        <div class="form-group">
            <label for="">category</label><br>
            <select name="category_id" class="form-control">
                @foreach ($category as $cate)
                    <option {{ ( $product->category_id === $cate->id) ? 'selected' : '' }}  value={{ $cate->id }}>
                        {{ $cate->name }}</option>
                       
                @endforeach

            </select>

        </div>
        <div class="form-group">
            <label for="">status</label><br>
            <select name="status" id="" class="form-control">

                <option {{ $product->status == 0 ? 'selected' : '' }} value="0">còn hàng</option>
                <option {{ $product->status == 1 ? 'selected' : '' }} value="1">hết hàng</option>

            </select>

        </div>

        <div class="form-group">
            <label for="">thuộc tính hiện tại</label>
            <ul>
            @foreach ($product->attrs as $attr)
            <li> {{ $attr->name}} </li>
            @endforeach
        </ul>
        <a class="btn btn-primary change">thay đổi</a>
        </div>
        <div class=" form-group  changeAttr" style="display: none">
            {{-- lấy danh sách attr --}}
            @foreach ($attrProducts as $attr)
                {{-- lấy parent  cha --}}
                @if ($attr->parent_id === 0)
                    <label for="">{{ $attr->name }}</label> <br>
                    {{-- lấy danh sách con --}}
                    @foreach ($attr->child as $value)
                        {{-- lấy danh sách bản ghi đã có trong bảng thuộc tính --}}                 
                                <label for="attr{{ $value->id }}">
                                    <input type="checkbox" name="attr_id[]"
                                        value="{{ $value->id }}" id="attr{{ $value->id }}"> 

                                       {{ $value->name }} 
                                </label>     <br>                               
                    @endforeach
                @endif
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">
            save
        </button>
        <button type="reset" class="btn btn-primary">
            reset
        </button>
    </form>
@endsection



@section('script')

    <script type="text/javascript">
    $('.change').click(function(){
        $('.changeAttr').css("display","block");  
    })

    CKEDITOR.replace( 'editor1' );
CKEDITOR.editorConfig = function( config )
{
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.height = '800px';
};
    </script>
@endsection
