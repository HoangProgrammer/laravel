@extends('client.LayoutClient')
<!-- Topbar Start -->

@section('title', 'Chi tiết sản phẩm')

@section('content')

@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi Tiết Sản Phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chi Tiết sản phẩm </p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
@endsection


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">


                    @foreach ($product->images as $key=>$image)
                  
                    @if( $key ==0 )
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src=" {{ asset($image->image) }}" alt="Image">
                    </div>
                    @else 
                    <div class="carousel-item ">
                        <img class="w-100 h-100" src=" {{ asset($image->image) }}" alt="Image">
                    </div>

                    @endif
                      
                    @endforeach



                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-7 pb-5">
<form action="{{route('cart')}}" method="post">
@csrf
            <h3 class="font-weight-semi-bold"> {{ $product->name }} </h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">({{ count($product->comments)}} Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">
                {{ $product->sale !== 0 ? number_format(($product->price * (100 - $product->sale)) / 100, 0, '.', '.') : number_format($product->price, 0, '.', '.') }}
            </h3>
            <del>{{ $product->sale !== 0 ? number_format($product->price, 0, '.', '.') : '' }} </del>
            {{-- <p class="mb-4">sản phẩm sạch đẹp</p> --}}
            @foreach ($attribute as $attr)
                @if ($attr->parent_id == 0)
                    <div class="d-flex mb-3">
                        <p class="text-dark font-weight-medium mb-0 mr-3">{{ $attr->name }}:</p>

                        @foreach ($product->attrs as $value)
                            {{-- {{$value}} --}}
                            @if ($value->parent_id === $attr->id)
                               
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input  type="radio" class="custom-control-input" id="{{$value->name}}"  value="{{$value->name}}"
                                            name="{{$attr->name}}">
                                        <label class="custom-control-label" for="{{$value->name}}">{{ $value->name }}</label>
                                    </div>
                            @endif
                       
                        @endforeach
                    </div>
                @endif
            @endforeach
           
            @if($errors->any())
            <ul class="text-danger">
 
            @foreach($errors->all() as $error)
   <li>
    {{$error}}
   </li>
 
  @endforeach
</ul>
            @endif


            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <span class="btn btn-primary btn-minus">
                            <i class="fa fa-minus"></i>
                        </span>
                    </div>
                    <input type="text" name="qty" class="form-control bg-secondary text-center" value="1" min=0  max={{$product->qty}}>
                    <div class="input-group-btn">
                        <span class="btn btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$product->id}}"  >
                <input type="hidden" name="price" value="{{ $product->price * (100 - $product->sale) / 100}}"  >
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button>
            </div>



            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
    </form>

        </div>
        {{-- endform --}}


    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Giới Thiệu</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Nhận xét <span class="countComment">({{ count($product->comments)}})</span></a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Giới thiệu sản phẩm</h4>
                    <p class="desc_text">
                      {{ $product->desc}}
                    </p>
                
                </div>
              
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4"><span class="countComment">{{ count($product->comments)}}</span> nhận xét về {{$product->name}}</h4>
                          <div id="showComments">
                            {{-- <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class=" mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no
                                        at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                </div>
                            </div> --}}
                          </div>
                          <div class="pagination">
{{$comments->links()}}
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                            @if(Auth::user())
                            <h4 class="mb-4">Nhận xét ở đây</h4>
                            {{-- <small>Your email address will not be published. Required fields are marked *</small> --}}
                            {{-- <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Your Rating * :</p>
                                <div class="text-primary " >
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div> --}}

                            <div id="rateYo"></div>
                            <input type="hidden" id='rating' value=''>
                            <input type="hidden" id='product_id' value={{$product->id}}>

                            <form>
                                <div class="form-group">
                                    <label for="message">Đánh giá của bạn *</label>
                                    <textarea id="massage" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                        
                              <div class= ''>
                                <div class="form-group">
                                    <label for="email">Your Email *</label>
                                    <input type="email" class="form-control" id="email"  value="{{Auth::user()!=''?Auth::user()->email:''}}">                      
                                    <input type="hidden" class="form-control" id="id"  value="{{Auth::user()!=''?Auth::user()->id:''}}">                           
                              </div>
                        
                                <div class="form-group mb-0">
                                    <input type="button" id="send" value="gửi ngay" class="btn btn-primary px-3">
                                </div>
                                <br>
                                <ul class="showerror">

                                </ul>
                            </form>
@else

<h3>đăng nhập để nhận xét</h3>
@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->

{{-- <ul class="pagination">      
<li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
<span class="page-link" aria-hidden="true">‹</span>
</li>

<li class="page-item active" aria-current="page">
    <span class="page-link">1</span>
</li>
<li class="page-item">
    <a class="page-link" href="http://127.0.0.1:8000/admin/users?page=2">2</a>
</li>                                           
<li class="page-item">
<a class="page-link" href="http://127.0.0.1:8000/admin/users?page=2" rel="next" aria-label="Next »">›</a>
</li>
</ul> --}}

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Sản phẩm tương tự</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
             
          
         @foreach($productRelate as $product)
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100"
                            src="{{ asset($product->image)}}"
                            alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{{$product->name}}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6> {{ $product->sale !== 0 ? number_format(($product->price * (100 - $product->sale)) / 100, 0, '.', '.') : number_format($product->price, 0, '.', '.') }}</h6>
                            <h6 class="text-muted ml-2"><del>{{ $product->sale !== 0 ? number_format($product->price, 0, '.', '.') : '' }}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{route('detail',[$product->category->slug,$product->slug])}}" class="btn btn-sm text-dark p-0"><i
                                class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i
                                class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
@endforeach

            </div>
        </div>
    </div>
</div>



@if(Session::has('localStorage') )

    @php
     Session::get('localStorage')
@endphp

@endif
@section('script')

    <script type="text/javascript"> 

    let desc=@json($product->desc);
    $('.desc_text').html(desc);
    // console.log(desc);


        $(function() {

            let url=document.location.origin;


            function  FetchComment(){
                let id=$('input[name="id"]').val()
            axios.get(url+'/api/comment/'+id).then(function(res){
                // console.log(res);
                FetchData(id,res.data.data)
            }         
            )       
            }

  
         function  FetchData(id=$('input[name="id"]').val(), data=[]){
            let comments=data.map(function(value ,key){
            // console.log(value);    
                let arr='';
                            for (let i = 0; i <5; i++) {
                if(value.rating<=i){
                    arr +=`<i class="fas fa-star text-dark"></i>`
                
                }else{
                    arr +=`<i class="fas fa-star"></i>` 
                }
                }
                return  `<div class="media mb-4">
                                <img src="${ value.user.google_id==null || value.user.fackebook_id==null ? value.user.avatar :   url+'/'+value.user.avatar}" alt="Image" class=" mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6>${value.user.name}<small> - <i>01 Jan 2045</i></small></h6>
                                                                    
                                    <div class="text-primary mb-2">
                                       ${arr}
                                       
                                    </div>
                                    <p>${value.message}</p>
                                </div>
                            </div> `
                })
                // console.log(res.data.data.length);
                $('.countComment').html(data.length)
                $('#showComments').html(comments)
                
            }

      
            FetchComment()  
            FetchData() 
         



            
                            $(document).on('click','.page-link' ,function(e){

                e.preventDefault();
                $(this).closest('.page-item').addClass('active').siblings().removeClass('active')
                let id=$('input[name="id"]').val();
                let page=''
                if($(this).attr('href')){
                    page=$(this).attr('href').split('page=')[1]
                }else{
                    page=''
                }

                $.ajax({
                    method: 'GET',
                    url:"{{route('Pagination')}}",
                    data:{
                        page:page,
                        product_id:id
                    },  
                    success: function(data){        
                        console.log(data);     
                        FetchData(id,data.data)
                    }

                })
                })
                





    //    console.log(url);
            $("#rateYo").rateYo({
                rating: 0,
                fullStar: true,
                onSet: function(rating) {
                    $('#rating').val(rating);
                }
            });






            $('#send').on('click', function(e){
                e.preventDefault();
              
                let rating=$('#rating').val();
                let email=$('#email').val();
                let message=$('#massage').val();
                let user_id=$('#id').val(); 
                let product_id=$('#product_id').val(); 
                let data={
                    rating:rating,
                    email:email,
                    message:message,
                    user_id:user_id,
                    product_id:product_id,
                    parent_id:0
            }
            //  console.log(data);

                axios.post(url+'/api/comment',
                    data
                ).then(function(response) {
                    // console.log(response.data);
                 
                    if(response.data.status==405){
                        
                      let html=  response.data.data.map(function(error) {
                        console.log(error);

                        return   `<li class="text-danger"> ${error}</li>`      
                       
                        })
                        $('.showerror').html('')
                        $('.showerror').html(html)
                     
                    //   $('.showerror').append(`<li class="text-danger"> ${response.data.errors}</li>`)
                    //  $('.showerror').append(`<li class="text-danger"> ${response.data.errors}</li>`)

                    }else{
                     
                        $('li.page-item').addClass('active')[1]
                        $('li.page-item').removeClass('active')
                        FetchComment()  
                        // console.log(response.data);
                    }
            

                })

            })
           
        });

    


    </script>
@endsection
@endsection
