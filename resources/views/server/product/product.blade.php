@extends('server.LayoutServer')
@section('title', 'Danh mục Sản phẩm ')
@section('header', 'Danh mục Sản phẩm ')
@section('content')
<div class="row container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <form action="{{ route('products.search') }}" method="get">
            @csrf
            <div class="form-group">
                <input type="text" name="text" id="searchUser" style="width:500px ; border-radius:5px ; height:40px "
                    placeholder="tìm kiếm">
                <button type="submit" class="btn btn-primary search"> <i class="fa fa-search"></i></button>
            </div>

        </form>
    </div>

    <div class="showUser col-lg-6 col-md-6 col-sm-12">
        <div class='d-flex justify-content-end'>
            <select name="sort" id="sortId">
                <option value="asc" selected>sắp xếp theo id tăng dần</option>
                <option value="desc" >sắp xếp theo id giảm dần</option>

            </select>
        </div>

    </div>

</div>
<table class="table  table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th> name</th>    
            <th> price</th>    
            <th>image</th>
            <th>qty</th>
            <th>status</th>
            <th colspan="2"><button class="btn btn-primary btn-lg"><a href="{{ Route('products.create') }}"
                        class="text-light">+add</a></button></th>
        </tr>
    </thead>
    <tbody class="response">
        @php
            $i = 0;
        @endphp
        @foreach ($products as $value)
            <tr>
                <td scope="row">{{ $i += 1 }}</td>
                <td>{{ $value['name'] }}</td>
                <td>{{ number_format($value['price'],0, '.', '.' ) }}</td>   
                <td><img width="150px" src={{ asset( $value->image)}} alt=""></td>        
                <td><a class="btn btn-warning" href="{{route('products.edit',$value->id)}}"> edit</a></td>
                <td><a class="btn btn-danger btn-delete " onclick="return confirm('Are you sure you want to delete')"   href="{{route('products.delete',$value->id)}}">delete</a>
               
                </td>

            </tr>
        @endforeach


    </tbody>
</table>
{{ $products->links() }}
@include('sweetalert::alert')
@endsection