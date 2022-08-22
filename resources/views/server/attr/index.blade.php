@extends('server.LayoutServer')
@section('title', 'Danh sách thuộc tính')
@section('header', 'Danh sách thuộc tính')
@section('content')

    <table class="table">
        <thead>
            <tr>
          
                <th>danh mục</th>
                <th>thuộc tính</th>
                <th><a href="{{route('attributes.create')}}">+add</a></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($attrs as $value)
                <tr>
                    @if($value->parent_id==0)
                    <td>
                        <h3>
                         
                    
           {{$value->name}}         
                   
                    </h3>
                        <ul>
                            @foreach ($value->child as $val)
                                <li>
                                    {{ $val->name }}
                                </li>
                            @endforeach
                        </ul>
                        <td><a href="{{route('attributes.edit',$value->id)}}" class="btn btn-warning">edit</a></td>
                    </td>
                    <td>
                        <form method="post"  action="{{route('attributes.delete',$value->id)}}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">xóa</button>
                        </form>
                    </td>
                    @endif
                   
                </tr>
            @endforeach
    </table>

@endsection
