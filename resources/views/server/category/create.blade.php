@extends('server.LayoutServer')
@section('title','Thêm Danh Mục')

@section('content')

<form method="post" action="{{route('category.store')}}">
    @csrf
<div class="form-group">
  <label for="">Têm Danh Mục</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" value="{{old('name')}}" >
  <small id="helpId" class="text-danger">
    @error('name')
    {{$message}}
@enderror
  </small>
</div>
<div class="form-group">
  <label for="">Slug</label>
  <input type="text" name="slug" id="" class="form-control" placeholder="" value="{{old('slug')}}" >
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
<button class="btn btn-primary">lưu</button>
</div>

</form>


@endsection