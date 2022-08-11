@extends('server.LayoutServer')
@section('title', 'Thêm người dùng ')
@section('header', 'Thêm người dùng ')

@section('content')
<a class="btn btn-primary" href="{{route('users')}}">quay lại</a>
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">tên </label>  
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id=""
                aria-describedby="emailHelpId" placeholder="">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">tên người dùng</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                id="" aria-describedby="emailHelpId" placeholder="">
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                placeholder="" class="@error('email') is-invalid @enderror">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                id="" aria-describedby="emailHelpId" placeholder="">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id=""
                aria-describedby="emailHelpId" placeholder="">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="">birthday</label>
            <input type="date" class="form-control  @error('birthday') is-invalid @enderror" name="birthday"
                id="" aria-describedby="emailHelpId" placeholder="">
            @error('birthday')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="">avatar</label>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id=""
                aria-describedby="emailHelpId" placeholder="">
            @error('avatar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">quyền</label><br>
            <input type="radio" class="@error('role') is-invalid @enderror" name="role" 
                value="0"> Giám Đốc <br>
            <input type="radio" class="@error('role') is-invalid @enderror" name="role" 
                value="1"> Nhân viên
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">trạng thái</label><br>
            <input type="radio" class=" @error('status') is-invalid @enderror" name="status" 
            value="0"> kích hoạt <br>
        <input type="radio" class=" @error('status') is-invalid @enderror" name="status" 
            value="1"> không kích hoạt
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="">phòng</label>
            <select name="room_id" id="">
                @foreach ($rooms as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <button type="submit" class="btn btn-success">
            save
        </button> 
        <button type="reset" class="btn btn-primary">
            reset
        </button>
    </form>
@endsection



@section('script')

    <script type="text/javascript"></script>
@endsection
