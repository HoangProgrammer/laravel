@extends('auth.LayoutAuth')

    @section('title','đăng nhập')   
       
    @section('content')
       <form action="{{ route('postLogin') }}" method="post">
          @csrf

            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <img src="{{asset('images/banners/hdecor.net2_.png')}}" />
                    </div>

                    <div class="right-side">
                        <div class="register">
                            <p>Not a member? <a href="{{route('getSignUp')}}">Đăng ký ngay</a></p>
                        </div>

                        <div class="hello">
                            <h2>Đăng Nhập</h2>
                            <div class="boxes">
                              <span><a href="{{route('loginGoogle')}}">  <i class="fab fa-google text-danger fs-10"></i> </a></span>
      
                              <span> <a href="{{route('loginFacebook')}}">  <i class="fab fa-facebook text-primary fs-10"></i> </a></span>
      
                          </div>
                        </div>

                        <form >

                            <div class="input_text">
                                <input type="text"  placeholder="Enter Email" name="email" value="{{ old('email') }}"/>
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
                            <div class="recovery">
                                <p>Quên Mật Khẩu</p>
                            </div>
                            <div class="btnS ">
                                <button type="submit">Đăng nhập</button>
                            </div>

                        </form>

                            
                    </div>
                </div>
            </div>
          </form> 
          @include('sweetalert::alert')

@endsection