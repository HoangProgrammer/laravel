@extends('server.LayoutServer')
@section('title', 'Danh sách sản phẩm')
@section('header', 'Danh sách sản phẩm ')

@section('content')
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>tên</th>
            <th>giá </th>
            <th>ảnh</th>
            <th colspan="2"><button class="btn btn-primary btn-lg modal-btn" data-toggle="modal"
                    data-target="#modelId"><a class="text-light" >+add</a></button></th>
        </tr>
    </thead>
    <tbody>
        @php 
    $i=0
        @endphp
        @foreach($data as $value)
         {{$i+=1}}
        <tr>
            <td scope="row">1</td>
            <td class="name_{{$i}}">{{$value['name']}}</td>
            <td class="price_{{$i}}">{{$value['price']}}</td>
            <td class="image_{{$i}}"><img src={{$value['image']}} alt=""></td>
                   
            <td><button class="btn btn-warning btn-edit" data-id={{$i}}>edit</button></td>
            <td><button class="btn btn-danger">delete</button></td>
            </td>
        </tr>
        @endforeach
       
   

    </tbody>
</table>

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name" id=""
                            aria-describedby="emailHelpId" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="">avatar</label>
                        <input type="file" class="form-control" name="avatar" id=""
                            aria-describedby="emailHelpId" placeholder="">
                   
                    </div>
                    <div class="form-group">
                        <label for="">price</label>
                        <input type="text" class="form-control" name="price" id=""
                            aria-describedby="emailHelpId" placeholder="">
                     
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    // let name= $('input[name="name"]').val();
    // let avatar= $('input[name="avatar"]').val();
    
    // let price= $('input[name="price"]').val();

    $('.btn-edit').click(function (){
        let id=$(this).attr('data-id');
        console.log(id)

    $('.modal').modal('show');

  

    let name= $('.name_'+id).html();
    let avatar= $('.avatar_'+id).html();
    let price= $('.price_'+id).html();

   $('input[name="name"]').val(name);
    $('input[name="avatar"]').val(avatar);
   $('input[name="price"]').val(price);
    })


})
</script>

@endsection


