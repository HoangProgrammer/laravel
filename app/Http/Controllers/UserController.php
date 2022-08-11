<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
    // function __construct(){
    //     $this->middleware('authAdmin');
    // }

    function index()
    {

        //     $users=User::find(15)->room;
        // dd($users->name);
        // foreach($users as $val){
        //     dd($val);
        // }

        $user = User::select('id', 'name', 'username', 'avatar', 'email', 'phone', 'role_id', 'status', 'google_id', 'facebook_id')
            ->paginate(5);
        return view('server.user.user', [
            'users' => $user,
        ]);
    }


    // thêm user
    function create()
    {
        // $rooms =  Room::select('id','name')->get();
        return view(
            'server.user.create',
        );
    }


    // lưu user
    function store(UserRequest $request)
    {
        // dd($request->all());

        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->newPassword, [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2
        ]);


        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            // format ảnh chuyển về số          
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // save on storage
            $user->avatar =  $file->storeAs('images/', $filename);
        }
        $user->save();

        return redirect()->route('users');
    }




    // sửa user
    public function edit($id)
    {
        // dd($id);
        $user = User::find($id);
        // $rooms = Room::all();
        return view('server.user.update', [
            'users' => $user,
            // 'rooms'=>$rooms        
        ]);
        # code...
    }

    // function uploadFile($nameFile){

    //      $nameFile->file('avatar');
    //      $extension=time().'.'.$nameFile->getClientOriginalExtension();
    //      $nameFile->storeAs('images/',$extension);
    // }


    // lưu sửa user
    function update(UserRequest $request, $id)
    {
        // dd($request->all());

        $user = User::find($id);
        // dd(  $user->fill($request->all()));
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->room_id = $request->room_id;
        $user->role = $request->role;
        $user->status = $request->status;

        if ($request->hasFile('avatar')) {
            $files = $user->avatar;
            // dd($file); kiểm tra file tồn tại
            if (file_exists($files)) {
                unlink($files);
                // dd('tồn tại');  
            }
            $file = $request->file('avatar');
            // format ảnh chuyển về số
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // di chuyển ảnh 
            $user->avatar = $file->move('images/', $filename);
        } else {
            $user->avatar = $user->avatar;
        }

        $user->update();
        return redirect()->route('users');
    }
    // xóa user
    function delete(REQUEST $request, $id)
    {
        // dd($id);
        $user = User::find($id);
        $files = $user->avatar;
        if (file_exists($files)) {
            unlink($files);
        }
        if ($user) {
            $user->delete();
            Alert::success('User deleted');
        }
        return redirect()->to('/admin/users');
    }

    public function search(REQUEST $request)
    {
        $text = $request->text;
        if ($text != '') {
            $users = User::where('name', 'like', '%' . $text . '%')->paginate(5);
        } else {
            $users = User::select('id', 'name', 'username', 'avatar', 'email', 'phone', 'birthday', 'role', 'status')->paginate(5);
        }
        return view('server.user.user', [
            'users' => $users,
        ]);
    }

    public function sort(REQUEST $request)
    {
        $text = $request->value;
        if ($text == 'asc') {
            $users = User::orderBy('id', 'asc')->paginate(5);
        } else {
            $users = User::orderBy('id', 'desc')->paginate(5);
        }
        return response()->json(array('data' => $users));
    }

    public function updateRole($id)
    {
        $user = User::find($id);
        if ($user->role_id == 0) {
            $user->role_id = 1;
        } else {
            $user->role_id = 0;
        }
        $user->save();
        return redirect()->route('users');
    }
}
