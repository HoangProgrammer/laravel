@extends('client.LayoutClient')
<!-- Topbar Start -->
@section('tilte', 'Cửa Hàng')

@section('header')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 170px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">{{ $category->name }}</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">{{ $category->name }}</p>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <!-- Page Header Start -->

    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Lọc theo giá</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="price-select custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all"> Tất cả</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" data-value="5" class="price-select custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">từ 5 - 10 triệu</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" data-value="10" class="price-select custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">từ 10 - 20 triệu</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" data-value="20" class="price-select custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">Trên 20 triệu</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>

                    </form>
                </div>
                <!-- Price End -->

                <!-- Color Start -->
                {{-- <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">All Color</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Black</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">White</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Red</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Blue</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Green</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div> --}}
                <!-- Color End -->

                <!-- Size Start -->
                {{-- <div class="mb-5">
                    <h5 class="font-weight-semi-bold mb-4">Lọc theo kích thước</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="select-size custom-control-input" data-value="L" checked
                                id="size-all">
                            <label class="  custom-control-label" for="size-all">Tất cả</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="  select-size custom-control-input" data-value="L" id="size-1">
                            <label class="custom-control-label" for="size-1">Lớn</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class=" select-size  custom-control-input" data-value="M" id="size-2">
                            <label class="custom-control-label" for="size-2">Vừa</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class=" select-size  custom-control-input" data-value="S" id="size-3">
                            <label class="custom-control-label" for="size-3">Nhỏ</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>

                    </form>
                </div> --}}
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                @csrf
                                <div class="input-group">
                                    <input id="searchProduct" type="text" class="form-control"
                                        placeholder="Tìm kiếm tên sản phẩm">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            {{-- <div class="dropdown ml-4">
                                <select name="" id="list-select">


                                    <option class="dropdown-item" value="new">Mới nhất</option>
                                    <option class="dropdown-item" value="desc">Giá cao</option>
                                    <option class="dropdown-item" value="asc">Giá thấp</option>

                                </select>

                            </div> --}}
                        </div>
                    </div>
                    <div class="row col-12 show-product">


                        {{-- {{dd($products)}} --}}
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 pb-1 hidden-product">
                                <div class="card product-item border-0 mb-4">
                                    <div
                                        class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="{{ asset($item->image) }}" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">{{ $item->name }}</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>{{ $item->sale !== 0 ? number_format(($item->price * (100 - $item->sale)) / 100, 0, '.', '.') : number_format($item->price, 0, '.', '.') }}
                                            </h6>
                                            <h6 class="text-muted ml-2">
                                                <del>{{ $item->sale !== 0 ? number_format($item->price, 0, '.', '.') : '' }}</del>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="{{ route('detail', [$item->category->slug, $item->slug]) }}"
                                            class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>xem
                                            chi tiết</a>
                                        <a href="" class="btn btn-sm text-dark p-0"><i
                                                class="fas fa-shopping-cart text-primary mr-1"></i>thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{ $products->links() }}

                    {{-- <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}

                </div>
            </div>
            <!-- Shop item End -->
        </div>
    </div>

    <!-- Shop End -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            const URL = window.location.href;
            const url = window.location.origin;
            let data = []
            function filter_by_attr(db) {

                console.log(db);
                let arrPrice = []
                let arrsort = []

                let cate = {{ $category->id }}

                db.map(function(value, key) {

                    if (value.price != null) {
                        arrPrice.push(value.price)
                    }
                    if (value.sort != null) {
                        arrsort.push(value.arrsort)
                    }


                })
                

                $.ajax({
                    method: 'GET',
                    url: `${URL}/select/`,
                    data: {
                        price: arrPrice,
                        cate: cate,
                        sort: arrsort
                    },

                    success: function(res) {
                        console.log(res.data);
                        //  console.log( res.data.length);
                        let db = res.data.flat()

                        fetchData(db)
                    }
                })
            }


            function fetchData(data) {
                let html = data.map(function(value, key) {
                    let priceSale = (value.sale !== 0) ? value.price * (100 - value.sale) / 100 : value
                        .price
                    let price = (value.sale != 0) ? value.price : ''
                    return `
                       <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="${ url+'/'+value.image }" alt="">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3">${ value.name }</h6>
                                    <div class="d-flex justify-content-center">
                                        <h6>
                                            ${priceSale.toLocaleString('vi', {style : 'currency', currency : 'VND'})}
                                        </h6>
                                        <h6 class="text-muted ml-2">
                                            <del>${ price.toLocaleString('vi', {style : 'currency', currency : 'VND'}) }</del>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="${url+'/shop/'+value.category.slug+'/'+value.slug}" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-eye text-primary mr-1"></i>xem chi tiết</a>
                                    <a href="${url+'/shop/'+value.category.slug+'/'+value.slug}" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
    `
                })

                $('.show-product').html(html)
            }








            //  xử lý mảng
            function dataMerge(db1 = []) {
                let newdata = db1.concat(db1);
                let unique = newdata.filter((c, index) => {
                    // console.log("c:"+newdata.indexOf(c));
                    // console.log("i:"+index);
                    return newdata.indexOf(c) === index;

                });

                // console.log(unique);

                filter_by_attr(unique)
            }






            // tạo một mảng rỗng chứa input checbox
        


            // Tìm kiếm theo giá
            $(document).on('click', '.price-select', function(e) {

                let priceCheck = Number($(this).attr('data-value'))
                // kiểm tra tồn tại của phần tử trong mảng

                if (data.find((value) => value.price === priceCheck)) {
                    // nếu có phần tử thì loại bỏ trong mảng
                    data = data.filter((val) => val.price !== priceCheck)
                } else {
                    // nếu không có thêm vào
                    data.push({
                        price: Number(priceCheck)
                    })
                }

                //  kiểm tra có bao nhiêu input[checkbox] được chọn 
                let notChecked = $('input.price-select[type=checkbox]:checked').length
                if (notChecked == 0) {
                    $('#price-all').prop('checked', true)
                    // filter_by_attr(data)
                }


                // kiểm tra phần tử được checkbox
                if (e.target.checked === true) {

                    if (e.target.id === 'price-all') {
                        // nếu là tất cả thì tất cả các ptu khác uncheckbox

                        $('.price-select').each(function(k) {
                            $('#price-' + k).prop('checked', false);
                        })
                        // phần tử đc check 
                        $(this).checked = true

                        data = data.filter((v) => v.price)
                        // console.log(data);
                        dataMerge(data)

                    } else {
                        // console.log(data);
                        $('#price-all').prop('checked', false)
                        // filter_by_attr(data)
                    }

                }
                dataMerge(data)

            })



            $(document).on('change', '#list-select', function() {
                data.push({
                    sort: $(this).val()
                });
                dataMerge(data)
            })



            // tìm kiếm theo ten

            $('#searchProduct').keyup(function(e) {
                let cate = {{ $category->id }}
                console.log('log' + cate);
                axios.get(`${URL}/search`, {
                    params: {
                        name: e.target.value,
                        cate: cate
                    }
                }).then(function(res) {
                    // console.log(res.data.data);
                    fetchData(res.data.data)
                })
            })

        })
    </script>
@endsection
