@extends('server.LayoutServer')
@section('title', 'Danh mục Liên hệ ')
@section('header', 'Danh Sách liên hệ')
@section('content')
<div class="row container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12">
        {{-- <form action="{{ route('products.search') }}" method="get">
            @csrf
            <div class="form-group">
                <input type="text" name="text" id="searchUser" style="width:500px ; border-radius:5px ; height:40px "
                    placeholder="tìm kiếm">
                <button type="submit" class="btn btn-primary search"> <i class="fa fa-search"></i></button>
            </div>

        </form> --}}
    </div>

    {{-- <div class="showUser col-lg-6 col-md-6 col-sm-12">
        <div class='d-flex justify-content-end'>
            <select name="sort" id="sortId">
                <option value="asc" selected>sắp xếp theo id tăng dần</option>
                <option value="desc" >sắp xếp theo id giảm dần</option>

            </select>
        </div>

    </div> --}}

</div>
<table class="table  table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th> name</th>    
            <th> email</th>    
            <th>chủ đề</th>
            <th>nội dung</th>
            <th>thời gian</th>
          
        </tr>
    </thead>
    <tbody class="response">
        @php    
            $i = 0;
        @endphp
        @foreach ($contacts as $value)
            <tr>
                <td scope="row">{{ $i += 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>   
                <td>{{ $value->topic }}</td>   
                <td>{{ $value->content }}</td>   
                <td>{{ $value->time }}</td>   
                {{-- <td><a class="btn btn-warning" href="{{route('products.edit',$value->id)}}"> edit</a></td>
                <td><a class="btn btn-danger btn-delete " onclick="return confirm('Are you sure you want to delete')"   href="{{route('products.delete',$value->id)}}">delete</a> --}}
               
                </td>

            </tr>
        @endforeach


    </tbody>
</table>
{{ $contacts->links() }}
@include('sweetalert::alert')
@endsection