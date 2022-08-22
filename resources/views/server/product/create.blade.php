@extends('server.LayoutServer')
@section('title', 'Thêm Sản phẩm ')
@section('header', 'Thêm Sản phẩm ')

@section('content')
    <a class="btn btn-primary" href="{{ route('products.store') }}">quay lại</a>
    <br>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}"
                placeholder="">

        </div>
        <div class="form-group">
            <label for="">price</label>
            <input type="text" class="form-control " name="price" id="" value="{{ old('price') }}"
                placeholder="">

        </div>
        <div class="form-group">
            <label for="">qty</label>
            <input type="text" class="form-control " name="qty" id="" value="{{ old('qty') }}"
                placeholder="">
        </div>

        <div class="form-group">
            <label for="">image main</label>
            <input type="file" class="form-control" name="image" id="" value="{{ old('image') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">images</label>
            <input type="file" class="form-control" multiple name="images[]" id="" value="{{ old('image') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">slug</label>
            <input type="text" class="form-control" name="slug" id="" value="{{ old('slug') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">sale</label>
            <input type="text" class="form-control" name="sale" id="" value="{{ old('sale') }}"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="">desc</label>
            <textarea name="desc" id="editor1" cols="30" rows="10"></textarea>
            {{-- <input id="" name=""> --}}
        </div>
        <div class="form-group">
            <label for="">category</label><br>
            <select name="category_id" class="form-control">
                @foreach ($category as $cate)
                    <option value={{ $cate->id }}>{{ $cate->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label for="">status</label><br>
            <select name="status" id="" class="form-control">

                <option value="0">còn hàng</option>
                <option value="1">hết hàng</option>

            </select>

        </div>

        <div class="form-group">
            @foreach ($attrProducts as $attr)
                @if ($attr->parent_id === 0)
                    <label for="">{{ $attr->name }}</label> <br>
                    @foreach ($attr->child as $value)
                        <label for="attr{{ $value->id }}">
                            <input size="100" style="width:200px" type="checkbox" name="attr_id[]"
                                value="{{ $value->id }}" id="attr{{ $value->id }}"> {{ $value->name }}

                        </label> <br>
                    @endforeach
                @endif
            @endforeach

        </div>


        <button type="submit" class="btn btn-success">
            save
        </button>
        <button type="re    set" class="btn btn-primary">
            reset
        </button>
    </form>
@endsection



@section('script')

    <script type="text/javascript">
        CKEDITOR.replace('editor1');

        CKEDITOR.editorConfig = function(config) {
            config.height = '800px';
        };
    </script>
@endsection
