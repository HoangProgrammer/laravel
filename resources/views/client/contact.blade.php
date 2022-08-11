
@extends('client.LayoutClient')
<!-- Topbar Start -->

@section('title','Liên hệ')

@section('header')
    <!-- Page Header Start -->  
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 170px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">LIÊN HỆ CHÚNG TÔI</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Liên Hệ</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên hệ cho bất kỳ thắc mắc nào</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" value="{{Auth::user()?Auth::user()->name:old('name')}}" placeholder="tên của bạn"  />
                               
                            <p class="help-block text-danger">
                                @error('name')
                            {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control"  name="email" value="{{Auth::user()?Auth::user()->email :old('email')}}"  placeholder="email"/>
                                 
                            <p class="help-block text-danger">
                                @error('email')
                                {{$message}}
                                    @enderror

                            </p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="topic" value="{{old('topic')}}"  placeholder="Chủ đề"/>
                               
                            <p class="help-block text-danger">
                                @error('topic')
                                {{$message}}
                                    @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control"  name="content" value="" rows="6" placeholder="Nội dung" >{{old('content')}}</textarea>
                            <p class="help-block text-danger">
                                @error('content')
                                {{$message}}
                                    @enderror
                            </p>    
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4"  >Gửi thư</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Liên lạc</h5>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Cửa hàng 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Số 255,D.Nguyễn Trãi,Thanh Xuân ,Hà nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>EHome@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Cửa hàng 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>172 Lý Thường Kiệt, Phường 6, Tân Bình, TP. HCM</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>EHome@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+028 3864 3711</p>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <!-- Contact End -->


 