@extends('client.LayoutClient')
@section('title','Danh sách Đơn hàng')


@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thông tin đơn hàng</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Thông tin đơn hàng</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
<div class="container-fluid pt-5">
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
               <span class="text-dark" value="0">chờ xử lý</span>
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
            <td><a href="{{route('checkOrderDetail',$value->id)}}" class="btn btn-warning ">chi tiết</a></td>
                {{-- <td>
                    <form action="{{route('checkOrderDetail',$value->id)}}" method="post">
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
</div>

@endsection