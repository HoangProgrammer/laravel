@extends('client.LayoutClient')
    <!-- Topbar Start -->

    @section('title','Thanh Toán')

@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh Toán</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Thanh Toán</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection 

@section('content')
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form action="{{route('checkout')}}" method="post">
            @csrf
        <div class="row px-xl-5">



            <div class="col-lg-6">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Địa chỉ thanh toán</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>tên</label>
                            <input class="form-control" type="text" name="name" placeholder="Doe"  value="{{Auth::user()->name}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" placeholder="example@email.com" value="{{Auth::user()->email}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Điện Thoại </label>
                            <input class="form-control" type="text" name="phone" placeholder="+123 456 789"  value="{{Auth::user()->phone}} {{old('phone')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ 1</label>
                            <input class="form-control" type="text" name="address" placeholder="123 Street"  value="{{Auth::user()->address}}"  {{old('address')}}>
                        </div>
      
                        <div class="col-md-6 form-group">
                            <label>Thành phố</label>
                            <input class="form-control" type="text" name="city" placeholder="New York" name="city" value="{{old('city')}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ghi chú</label>
                            <textarea class="form-control" type="text" name="note"  value="{{old('note')}}"> </textarea>
                        </div>
           
                    
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount" name="updateaccount" >
                                <label class="custom-control-label" for="newaccount">Cập nhật tài khoản </label>
                            </div>
                        </div>

                        {{-- <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div> --}}
                    </div>
                </div>

                {{-- <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text"placeholder="Doe" >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label> Số Điện Thoại</label>
                            <input class="form-control" type="text"  placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ 1</label>
                            <input class="form-control" type="text"placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ 2</label>
                            <input class="form-control" type="text" value="" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thành phố</label>
                            <select lect class="custom-select">
                                <option selected>Hà Nội</option>
                                <option>Hải Phòng</option>
                                <option>TP.HỒ CHÍ MINH</option>
                                <option>Cà Mau</option>
                                <option>Thanh Hóa</option>
                                <option>Bến Tre</option>
                                <option>Lạng Sơn</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thành Phố</label>
                            <input class="form-control" type="text" value="" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" value="" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP  </label>
                            <input class="form-control" type="text" value="" placeholder="123">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                        @php 
                        $sum=0
                        @endphp

                        <div class="d-flex justify-content-between">
                         <table class="table">
                            <tr>
                                <th>sản phẩm</th>
                                <th>giá</th>
                                <th>số lượng</th>
                                <th>thành tiền</th>
                            </tr>
                            @foreach($cart as $item)
                            <tr>
                              <td> <p> <img width="100px" src="{{asset($item['image'])}}" alt=""> </p>  {{$item['name']}} <p>loại :{{$item['attr']['color']}},{{$item['attr']['size']}}</p></td> 
                              <td>   <p>{{number_format($item['price'],0,'.','.')}}</p></td> 
                              <td>  <p>{{$item['qty']}}</p></td> 
                              <td>  <p>{{number_format($item['qty']*$item['price'],0,'.','.')}}</p></td> 
                            </tr>
                            @php 
                            $sum+=$item['qty']*$item['price']
                            @endphp
                            @endforeach
                         </table>
                        </div>
                      

                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tổng phụ</h6>
                            <h6 class="font-weight-medium">{{number_format( $sum)}}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">vận chuyển</h6>
                            <h6 class="font-weight-medium">{{$ship=0}}</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng</h5>
                            <h5 class="font-weight-bold">{{ number_format( $sum=$sum+$ship)}}</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" checked class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Thanh Toán Tiền Mặt</label>
                            </div>
                        </div>
                        {{-- <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Chuyển khoản</label>
                            </div>
                        </div> --}}
                        <input type="hidden" name="totalCost"  value="{{$sum}}">
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Đặt Hàng</button>
                    </div>
                </div>
            </div>
      
        </div>
    </form>
    </div>
    <!-- Checkout End -->
@endsection
