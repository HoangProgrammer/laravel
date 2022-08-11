@extends('server.LayoutServer')
@section('title', 'Đăng Ký ')
@section('header', 'Đăng Ký ')

@section('content')
    <form action="/register-admin" method="post">
        @csrf
        <div class="form-group">
            <label for="">user name</label>
            <input type="text" class="form-control" name="email" id=""
                aria-describedby="emailHelpId" placeholder="">
 
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="text" class="form-control" name="password" id=""
                aria-describedby="emailHelpId" placeholder="">
    
        </div>
<button type="submit" class="btn btn-primary">
save
</button>
    </form>

    @endsection
    
