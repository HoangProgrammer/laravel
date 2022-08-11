@extends('server.LayoutServer')
@section('title', 'Thêm sản phẩm ')
@section('header', 'Thêm sản phẩm ')

@section('content')
<form action="/registerRequest" method="get">
    @csrf
    <div class="form-group">
        <label for="">tên sản phẩm</label>
        <input type="text" class="form-control" name="email" id=""
            aria-describedby="emailHelpId" placeholder="">

    </div>
    <div class="form-group">
        <label for="">giá sản phẩm</label>
        <input type="text" class="form-control" name="password" id=""
            aria-describedby="emailHelpId" placeholder="">

    </div>
    <div class="form-group">
        <label for="">ảnh</label>
        <input type="file" class="form-control" name="password" id=""
            aria-describedby="emailHelpId" placeholder="">

    </div>
<button type="submit" class="btn btn-primary">
save
</button>
</form>
@endsection


@section

<script type="text/javascript">

</script>
@endsection