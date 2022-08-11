@extends('auth.LayoutAuth')

@section('title', 'đăng ký')

@section('content')
    {{-- <form action="{{route('postSignUp')}}" method="post">
        <h1 class="text-center">Đăng ký</h1>
@csrf

<div class="form-group">
  <label for="">name</label>
  <input type="text" name="name"  class="form-control" value="{{old('name')}}" >

 @error('name')
     <span class="text-danger">{{$message}}</span>
 @enderror
</div>
<div class="form-group">
  <label for="">username</label>
  <input type="text" name="username"  class="form-control" value="{{old('username')}}" >

 @error('username')
     <span class="text-danger">{{$message}}</span>
 @enderror
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email"  class="form-control" value="{{old('email')}}" >

 @error('email')
     <span class="text-danger">{{$message}}</span>
 @enderror
</div>

<div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password"  class="form-control" value="{{old('password')}}" >
    
    @error('password')
    <span class="text-danger">{{$message}}</span>
@enderror
  </div>

<div class="form-group">
    <label for="">password_confirmation</label>
    <input type="password" name="password_confirmation"  class="form-control" value="{{old('password_confirm')}}" >
    
    @error('password_confirmation')
    <span class="text-danger">{{$message}}</span>
@enderror
  </div>

<div class="form-group">
    <label for="">role</label>
<select name="role_id" id="">
<option value="1">ADMIN</option>
<option value="0">User</option>

</select>
  </div>
<div class="form-group">
    <label for="">trạng thái</label>
<select name="status" id="">
<option value="0">hoạt động</option>
<option value="1">không hoạt đông</option>

</select>
  </div>

  <button type="submit">đăng ký</button>
  <a class="btn btn-primary" href="{{route('getLogin')}}">đăng nhập</a>
    </form> --}}



    <form action="{{ route('postSignUp') }}" method="post">
        @csrf

        <div class="card">
            <div class="form">
                <div class="left-side">
                    <img src="{{ asset('images/banners/hdecor.net2_.png') }}" />
                </div>

                <div class="right-side">
                    <div class="register">
                        <p><a href="{{route('getLogin')}}">đăng nhập ngay</a></p>
                    </div>

                    <div class="hello">
                        <h2>Đăng ký</h2>
                        {{-- <h4>Welcome back you have been missed! </h4> --}}
                        <div class="boxes">
                          <span><i class="fab fa-google text-danger fs-10"></i></span>
  
                          <span><i class="fab fa-facebook text-primary fs-10"></i></span>
  
                      </div>
                    </div>

                    <form>

                        <div class="input_text">
                            <input type="text" name="name" placeholder="Enter user" class="form-control" value="{{ old('name') }}">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_text">
                            <input type="text" name="username" placeholder="Enter username" class="form-control" value="{{ old('username') }}">

                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_text">
                            <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" />
                            @error('email')
                                <h6 class="text-danger">{{ $message }} </h6>
                            @enderror
                        </div>
                        <div class="input_text">
                            <input type="Password" placeholder="Enter Password" name="password" {{ old('password') }} />
                            @error('password')
                                <h6 class="text-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="input_text">
                            <input type="Password" placeholder="Enter Passwo    rd" name="password_confirmation" {{ old('password_confirmation') }} />
                            @error('password_confirmation')
                                <h6 class="text-danger">{{ $message }}</h6>
                            @enderror
                        </div>
                        <div class="input_text">
                            <select name="role_id" id="" class="form-control">
                                <option value="1">ADMIN</option>
                                <option value="0">User</option>

                            </select>
                        </div>
                        <div class="input_text">
                            <select name="status" id="" class="form-control">
                                <option value="0">hoạt động</option>
                                <option value="1">không hoạt đông</option>

                            </select>
                        </div>
                        <div class="recovery">
                            <p>Quên Mật Khẩu</p>
                        </div>
                        <div class="btnS ">
                            <button type="submit">Đăng ký</button>
                        </div>

                    </form>

               
                 
                </div>
            </div>
        </div>
    </form>






@endsection
