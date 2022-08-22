@extends('server.LayoutServer')
@section('title', 'Danh Sách Người dùng')
@section('header', 'Danh Sách Người dùng')

@section('content')
    <div class="row container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="{{ route('users.search') }}" method="get">
                @csrf
                <div class="form-group">
                    <input  type="text" name="text" id="searchUser" style="width:500px ; border-radius:5px ; height:40px "
                        placeholder="tìm kiếm">
                    <button type="submit" class="btn btn-primary search"> <i class="fa fa-search"></i></button>
                </div>

            </form>
        </div>

        <div class="showUser col-lg-6 col-md-6 col-sm-12">
            <div class='d-flex justify-content-end'>
                <select name="sort" id="sortId">
                    <option value="asc" selected>sắp xếp theo id tăng dần</option>
                    <option value="desc" >sắp xếp theo id giảm dần</option>

                </select>
            </div>

        </div>

    </div>


    <table class="table  table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th> name</th>
                <th>user name</th>
                <th>email</th>
                <th>phone</th>
                <th>avatar</th>         
                <th>role</th>
                <th>status</th>
                <th colspan="2"><button class="btn btn-primary btn-lg"><a href="{{ Route('users.create') }}"
                            class="text-light">+add</a></button></th>
            </tr>
        </thead>
        <tbody class="response">
            @php
                $i = 0;
            @endphp
            @foreach ($users as $value)
                <tr>
                    <td scope="row">{{ $i += 1 }}</td>
                    <td>{{ $value['name'] }}</td>
                    <td>{{ $value['username'] }}</td>
                    <td>{{ $value['email'] }}</td>
                    <td>{{ $value['phone'] }}</td>
                    <td><img width="100px" src="
                @if($value->avatar===null)          
               {{  asset('/images/users/user-defaul.jpg') }} 
                @else
                   {{                 
                    $value->google_id==null && $value->facebook_id == null  ? asset($value->avatar) : $value->avatar                                 
                    }} 
                @endif
                 
                    
                   " alt=""></td>
                    <td>
                        <a title="nhấn vào cập nhật" class="btn btn-secondary" href="{{route('users.role',$value->id)}}">
                            {{ $value['role_id'] == 0 ? 'người dùng' : 'admin' }}
                        </a>
                       </td> 
                    <td>{{ $value['status'] == 0 ? 'mở' : 'khóa' }}</td>    

                    
                    <td><a class="btn btn-warning" href="{{ route('users.edit', $value->id) }}"> edit</a></td>
                    {{-- <td><a class="btn btn-danger btn-delete " data-toggle="modal" data-target="#modelId"
                            id={{ $value->id }} name="{{ $value->name }}" avatar="{{ $value->avatar }}">delete</a>
                        <form class="form-delete" action="{{ route('users.delete', $value->id) }} " method="post">
                            @csrf
                            @method('delete')
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content"> 
                                        <div class="modal-header">
                                            <h5 class="modal-title"> DELETE </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <h2 class="text-center text-name">bạn có chắc muốn xóa {{ $value->name }} ?</h2>
                                            <h2 class="text-center ">
                                                <img width="250px" class="text-image" src="" alt="">
                                            </h2>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="sumit" class="btn btn-success">yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td> --}}

                </tr>
            @endforeach


        </tbody>
    </table>



    {{ $users->links() }}



    @include('sweetalert::alert')
@endsection

@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            
            // console.log(window.location.href + '/');
            let http = window.location.href + '/'
            if(http!=='http://127.0.0.1:8000/admin/users/'){
               http='http://127.0.0.1:8000/admin/users/'
            }
            let local = window.location.origin + '/'    
            if(local!=='http://127.0.0.1:8000/'){
                local = 'http://127.0.0.1:8000/'
            }
            // console.log(http+'sort ');
            $(document).on('change','#sortId', function() {
                let value = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: `${http}sort`,
                    data: {
                        value: value
                    },
                    success: function(reponsive) {
                        // console.log(reponsive.data.data);
                        let i = 0
                        let html = reponsive.data.data.map(function(value, key) {
             

                            //   console.log(key,value);
                            return `
                    <tr>
                    <td scope="row">${i+=1}</td>
                    <td>${value.name}</td>
                    <td>${value.username}</td>  
                    <td>${value.email}</td>
                    <td>${value.phone}</td> 
                    <td><img width="150px" src=${(value.google_id===null && value.facebook_id===null) ? local+value.avatar: value.avatar }  alt=""></td>
                    <td>${value.role==0 ? 'người dùng':'admin'}</td>
                    <td>${value.status==0?'mở':'khóa'}</td>
                           
                    <td><a class="btn btn-warning" href="${http}edit/${value.id}"> edit</a></td>
                    <td><a class="btn btn-danger btn-delete" data-toggle="modal"
                        data-target="#modelId"  id="${value.id}"  name="${value.name}" avatar="${value.avatar}">delete</a>
                         <form action="${http}delete/${value.id}" method="post">     
                            @csrf
                            @method('delete')
                          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"> DELETE </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                         
                                            <h2 class="text-center text-name">Bạn có chắc muốn xóa ${value.name} ?</h2>        
                                            <h2 class="text-center">
                                                <img width="250px" class="text-image" src="" alt="">
                                            </h2>        
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="sumit" class="btn btn-success">yes</button>
                                      </div>
                                </div>
                            </div>
                        </div>  
                      </form>  
                    </td>
                    
                </tr>
                     `

                        });

                        $('.response').html(html)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                    }
                })
            })

            $(document).on('click', '.btn-delete', function() {
                // console.log($(this).attr('id'));
                let id = $(this).attr('id');
                let name = $(this).attr('name') 
                let avatar = $(this).attr('avatar')
                console.log(name, avatar);
                $('.form-delete').attr('action', `${http}delete/${id}`)

                $('.text-name').html(` Bạn có chắc muốn xóa  <p class="text-danger">${name}</p> `)
                $('.text-image').attr('src', `${local}${avatar}`)

            })

        })
    </script>
@endsection
