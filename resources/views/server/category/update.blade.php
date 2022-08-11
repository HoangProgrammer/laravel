@extends('server.LayoutServer')
@section('title','Thêm Danh Mục')

@section('content')
<a href="{{route('category')}}" class="btn btn-primary">quay lại</a>
<form method="post" action="{{route('category.update',$category->id)}}">
    @csrf
    @method('put')
<div class="form-group">
  <label for="">Tên Danh Mục</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" value="{{$category->name}}">
  <small id="helpId" class="text-danger">
    @error('name')
    {{$message}}
@enderror
  </small>
</div>
<div class="form-group">
  <label for="">Slug</label>
  <input type="text" name="slug" id="" class="form-control" placeholder="" value="{{$category->slug}}" >
  <small id="helpId" class=" text-danger">
    @error('slug')
    {{$message}}
@enderror   
  </small>
</div>
<div class="form-group">
  <label for="">trạng thái</label>
<select name="status" id="">
    <option value="0">mở</option>
    <option value="1">khóa</option>
</select>
</div>
<div class="form-group">
<button class="btn btn-primary">cập nhật</button>
</div>

</form>


@endsection