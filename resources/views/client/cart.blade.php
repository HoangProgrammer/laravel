@extends('client.LayoutClient')
<!-- Topbar Start -->

@section('title', 'Giỏ Hàng')

@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 170px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">GIỎ HÀNG</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">GIỎ HÀNG</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection


@section('content')
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Các sản phẩm</th>
                            <th>Giá bán</th>
                            <th>Số lượng</th>
                            <th>Tổng cộng</th>
                            <th>Loại bỏ</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">


                        {{-- {{dd($cart)}} --}}
                        @if ($cart == null)

                            <h1>Giỏ Hàng Trống</h1>
                        @else
                            @php
                                $sum = 0;
                            @endphp
                            @foreach ($cart as $value)
                                <tr class="cart-border">
                                    <td class="align-middle"><img src="{{asset($value['image'])}}" alt=""
                                            style="width: 80px;"> {{ $value['name'] }}</td>
                                    <td class="align-middle">{{ number_format($value['price']) }} vnđ </td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;">
                                            <div class="input-group-btn">
                                                <span class="btn btn-sm btn-primary btn-minus">
                                                    <i class="fa fa-minus"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                class="form-control form-control-sm bg-secondary text-center input-qty"
                                                data-value={{ $value['product_id'] }} value="{{ $value['qty'] }}" min="1">
                                            <div class="input-group-btn">
                                                <span class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle qtySS">{{ number_format($value['price'] * $value['qty']) }} vnđ
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('deleteCart',$value['product_id'])}}"
                                        onclick="return confirm('bạn có chắc muốn xóa không')"
                                        class="btn btn-sm btn-primary" style="border-radius: 50%"> 
                                            <i class="fa fa-times"></i>
                                            </a>
                                            </td>
                                </tr>
                                @php
                                    $sum += $value['price'] * $value['qty'];
                                @endphp
                            @endforeach


                        @endif

                    </tbody>
                </table>
            
            </div>
            @if ($cart != null)
                <div class="col-lg-4">
                    <form class="mb-5" action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-4" placeholder="Mã giảm giá    ">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Áp dụng mã</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('checkout') }}">



                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Tóm tắt giỏ hàng</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3 pt-1">
                                    <h6 class="font-weight-medium ttPrice">Tổng phụ</h6>
                                    <h6 class="font-weight-medium">{{ number_format($sum, 0, '.', '.') }} vnđ </h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Phí vận chuyển</h6>
                                    <h6 class="font-weight-medium"> 0</h6>
                                </div>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <div class="d-flex justify-content-between mt-2">   
                                    <h5 class="font-weight-bold totalPrice">Tổng cộng</h5>
                                    <h5 class="font-weight-bold"> {{ number_format($sum, 0, '.', '.') }} vnđ </h5>
                                </div>
                                <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                            </div>
                        </div>
                    </form>

                </div>
            @endif

        </div>
    </div>
    <!-- Cart End -->
@section('script')

    <script type="text/javascript">
        let url = window.location.origin

        $('.btn-minus').click(function() {
            let current=$(this);
            let quantity = $(this).closest('.cart-border').find('.input-qty').val()
            let product_id = $(this).closest('.cart-border').find('.input-qty').attr('data-value')
          console.log(quantity);
            $.ajax({
                url: `${url+'/UpdateCart'}`,
                data: {
                    status:'minus',
                    qty: quantity,
                    product_id: product_id
                },
                success: function(response) {
                    // console.log(response.status);
                    // let price = response.data.price * response.data.qty
                    // // console.log(response.data.price*response.data.qty);
                    // current.closest('.cart-border').find('.qtySS').text(price.toLocaleString('vi', {style : 'currency', currency : 'VND'}))
                    window.location.reload();

                }
            })
        })

        $('.btn-plus').click(function() {
            let current=$(this);
            let quantity = $(this).closest('.cart-border').find('.input-qty').val()
            let product_id = $(this).closest('.cart-border').find('.input-qty').attr('data-value')
            $.ajax({
                url: `${url+'/UpdateCart'}`,
                data: {
                    status:'plus',
                    qty: quantity,
                    product_id: product_id
                },
                
                success: function(response) {
                    // let price = response.data.price * response.data.qty
                    // current.closest('.cart-border').find('.qtySS').text(price.toLocaleString('vi', {style : 'currency', currency : 'VND'}));
                    window.location.reload();

                }
            })
        })



    </script>
@endsection

@endsection
