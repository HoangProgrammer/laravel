@extends('client.LayoutClient')
@section('title','Danh sách Chi tiết đơn hàng')

@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết đơn hàng</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chi tiết đơn hàng</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
<div class="container-fluid pt-5">

<a href="{{route('checkOrder')}}" class="btn btn-primary ">quai lại</a>
<div class="row">


    <div class="col-lg-6">
<div class="form-group">
  <label for="">Tên người mua</label>
  <input type="text" value="{{$orderDetail->user->name}}" id="" class="form-control" >
</div>
<div class="form-group">
  <label for="">email </label>
  <input type="text" value="{{$orderDetail->user->email}}" id="" class="form-control" >
</div>
<div class="form-group">
  <label for="">Địa chị</label>
  <input type="text" value="{{$orderDetail->user->address}}" id="" class="form-control" >
</div>
<div class="form-group">
  <label for="">số điện thoại</label>
  <input type="text" value="{{$orderDetail->user->phone}}" id="" class="form-control" >
</div>


    </div>

    <div class="col-lg-6">
        <table class="table">
            <thead>
                <tr>
                    <th>sản phẩm</th>
                    <th>loại</th>
                    <th>số lượng</th>
                    <th>đơn giá</th>

                    
                </tr>
            </thead>
            <tbody>
        
                @foreach ($orderDetail->details as $value)
        
                {{-- {{dd( $orderDetail->orders)}} --}}
                <tr>    
                    {{-- <td scope="row">{{$value-  >id}}</td> --}}
                    <td><img width="100px" src="{{asset($value->image ) }}" alt="">{{$value->name }} </td>
                    @foreach ($orderDetail->orders as $item)
                @if($item->product_id==$value->id)
                <td>{{$item->attr }}</td>
                <td>{{$item->qty }}</td>
                @endif      
                @endforeach
                    <td>{{number_format($value->price*(100-$value->sale)/100)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <h3>Tổng Tiền : {{number_format($orderDetail->totalCost) }}</h3>
     <form action="{{route('orders.update',$orderDetail->id)}}" method="post">
        @method('put')
@csrf
        <div class="form-group">     
            <select name="status" id="" class="form-control">
            {{-- <option {{$orderDetail->status==0?'selected':''}} value="0">chờ xử lý</option>    
            <option  {{$orderDetail->status==1?'selected':''}} value="1">đang giao hàng</option>    
            <option   {{$orderDetail->status==2?'selected':''}} value="2">đã giao hàng</option>     --}}
            <option   {{$orderDetail->status==3?'selected':''}} value="3">hủy đơn hàng</option>    
            </select>       
        </div>
        <div class="form-group">     
           <button class="btn btn-warning">Hủy Đơn Hàng</button>      
        </div>
     </form>
       
    </div>
</div>



</div>

@include('sweetalert::alert')   

@endsection