@extends('server.LayoutServer')
@section('title', 'sửa người dùng ')
@section('header', 'sửa người dùng ')

@section('content')
    <form action="{{ route('users.update',$users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">tên </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id=""
                aria-describedby="emailHelpId" placeholder="" value="{{$users->name}}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">tên người dùng</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                id="" aria-describedby="emailHelpId" placeholder=""  value="{{$users->username}}">
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                placeholder="" class="@error('email') is-invalid @enderror"  value="{{$users->email}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                id="" aria-describedby="emailHelpId" placeholder=""  value="{{$users->password}}">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id=""
                aria-describedby="emailHelpId" placeholder=""  value="{{$users->phone}}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">birthday</label>
            <input type="datetime" class="form-control  @error('birthday') is-invalid @enderror" name="birthday"
                id="" aria-describedby="emailHelpId" placeholder=""  value="{{$users->birthday}}">
            @error('birthday')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">avatar</label>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id=""
                aria-describedby="emailHelpId" placeholder="">
            @error('avatar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <img width="250px" src="{{asset($users->avatar)}}" alt="no image">
        </div>
        <div class="form-group">
            <label for="">quyền</label><br>
            <input type="radio" {{ $users->role===0?'checked':'' }} class="@error('role') is-invalid @enderror" name="role" 
                value="0" > nhân viên <br>
            <input type="radio" {{ $users->role===1?'checked':'' }} class="@error('role') is-invalid @enderror" name="role" 
                value="1"> giám đốc
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">trạng thái</label><br>
            <input type="radio" {{ $users->status===0?'checked':'' }} class=" @error('status') is-invalid @enderror" name="status" 
            value="0">kích hoạt <br>
        <input type="radio"  {{ $users->status===1?'checked':'' }}  class=" @error('status') is-invalid @enderror" name="status" 
            value="1"> không kích hoạt
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

 
        <button type="submit" class="btn btn-primary">
            cập nhật
        </button>
    </form>
@endsection



@section('script')

    <script type="text/javascript"></script>
@endsection
