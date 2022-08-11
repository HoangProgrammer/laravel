@extends('client.LayoutClient')
@section('title', 'Tìm kiếm')

@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Tìm kiếm sản phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Tìm Kiếm Sản phẩm</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection
@section('content')
<div class="container-fluid pt-5">
    <div class="row px-xl-5  pb-3">
        @foreach($products as $product)
  
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset($product->image)}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{$product->name}} </h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{$product->sale!=0 ? number_format($product->price * (100 - $product->sale ) /100):number_format($product->price )}}</h6><h6 class="text-muted ml-2">
                            <del>{{$product->sale==0 ? number_format($product->price):''}}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{route('detail',[$product->category->slug,$product->slug])}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>xem chi tiết</a>
                    <a href="{{route('detail',[$product->category->slug,$product->slug])}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>

@endforeach
    </div>

</div>

@endsection