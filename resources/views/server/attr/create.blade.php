@extends('server.LayoutServer')
@section('title', 'Thêm thuộc tính')
@section('header', 'Thêm thuộc tính')
@section('content')

<form action="{{route('attributes.store')}}" method="post">

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
      <label for="">Danh mục</label>
      <input type="text" name="name"  class="form-control" placeholder="" value="{{old('name')}}">

    </div>

    <div class="form-group">
   
     <a class="btn btn-primary add-attr">+</a>
     <label for="">Thêm Thuộc Tính</label>
    </div>
    <div class="add-group"> </div> 
    <div class="form-group">
        
     <button class="btn btn-primary ">save</button>

    </div>
</form>
@section('script')
<script>
$('.add-attr').click(function(){
    let numberRand=Math.floor(Math.random()*1000)
$('.add-group').append( 
    `
    <div class="form-group">
      <input type="text" name="attrs[]" id="" class="form-control" placeholder="tên thuộc tính" aria-describedby="helpId">
   <a class="btn btn-danger button-delete">xóa</a>
      </div>
    `
    );  
 
})

$(document).on('click','.button-delete', function(){
        $(this).closest('.form-group').remove()
    })

</script>
@endsection
@endsection


