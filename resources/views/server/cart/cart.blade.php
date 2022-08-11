@extends('server.LayoutServer')
@section('title','Danh sách Giỏ hàng')
@section('header', 'Danh sách Giỏ Hàng')


@section('content')

<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>tên người mua</th>
            <th>ngày đặt</th>
            <th>thành phố</th>
            <th>địa chỉ</th>
            <th>ghi chú</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $value)
        <tr>    
            <td scope="row">{{$value->id}}    </td>
            <td>{{$value->user->name}}</td>
            <td>{{$value->orderDate }}</td>
            <td>{{$value->city }}</td>
            <td>{{$value->address }}</td>
            <td>{{$value->note   }}</td>    
            <td>{{number_format($value->totalCost) }}</td>
            <td>
     
               @if($value->status==0)   
               <span class="text-secondary" value="0">chờ xử lý</span>
               @endif
               @if($value->status==1)
               <span class="text-waning"value="3">đang giao hàng</span>
               @endif
               @if($value->status==2)
               <span class="text-success"value="2">đã giao hàng</span>
               @endif
               @if($value->status==3)
               <span class="text-danger" value="3">đã hủy</span>
               @endif

        </td>
            <td><a href="{{route('orders.detail',$value->id)}}" class="btn btn-warning ">chi tiết</a></td>
            {{-- <td>
                <form action="{{route('orders.delete',$value->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button  class="btn btn-danger ">xóa</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>

</table>


@endsection