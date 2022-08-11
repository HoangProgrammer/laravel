<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class commentController extends Controller
{

    public function index($id)
    {

        $comments=Comment::with('user')->where('product_id',$id)->orderBy('id','desc')->paginate(5);
        if($comments==[]){
            $comments=[];
        }

        return response()->json(
            $comments,
            status:200
        );
        # code...
    }
    //
    public function create(Request $request)
    {
        // return $request->input('message');
        $valid = Validator::make(
            $request->all(),
            [
                'rating' => 'required|min:1',
                'email' => 'required|email',
                'message' => 'required|min:6',
            ],
            [
                'rating.required' => 'vui lòng chọn đánh giá',
                'email.required' => 'bạn chưa nhập email',
                'email.email' => 'email không đúng định dạng',
                'message.required' => 'bạn chưa nhập nhận xét',
                'message.min' => 'vui lòng nhập tối thiểu 6 ký tự',
                'rating.min' => 'vui lòng chọn đánh giá',
              
            ]
        );


        if ($valid->fails()) {
            $errors=[];
            foreach ( $valid->errors()->all() as $error) {
                $errors[]=$error;
            }
            return response()->json(
                [
                    'data' => $errors,
                    'status'=> 405
                ]
            );

        } else{
              $comment=new Comment();
            $comment->fill($request->all());
            $comment->save(); 
            return response()->json(
                [
                    'data' =>Comment::with('user')
                    ->where('product_id',$request->product_id)
                    ->orderBy('id','desc')
                    ->paginate(5),
                    
                    'status' => 200
                ]
             
              
            );
        }
        
        


        # code...
    }
}
