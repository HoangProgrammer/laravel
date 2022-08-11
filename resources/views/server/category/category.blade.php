@extends('server.LayoutServer')
@section('title','Danh Mục')


@section('content')

<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>tên</th>
            <th>slug</th>
            <th><a class="btn btn-primary" href="{{route('category.create')}}">add</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $value)
        <tr>
            <td scope="row">{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->slug}}</td>
            <td><a href="{{route('category.edit',$value->id)}}" class="btn btn-warning ">edit</a></td>
            <td>
                <form action="{{route('category.delete',$value->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button  class="btn btn-danger ">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</table>


@endsection