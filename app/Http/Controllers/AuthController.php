<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //
    public  function getLogin()
    {

        return view('auth.login');
    }



    public  function postLogin(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin');
        } else {
            Alert::warning('email hoặc mật khẩu không đúng');
            return back();
        }
    }


    public  function getSignUp()
    {

        return view('auth.sign_up');
    }



    public  function postSignUp(SignUpRequest $request)
    {

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'status' => $request->status
        ]);
        Alert::success('Đăng ký thành công');
        return back();
    }


    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('getLogin');
    }




    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }



    public function googleCallback()
    {


        try {
            $googleLogin = Socialite::driver('google')->user();
            // dd($googleLogin);
             if ($googleLogin) {
            $user = User::where('google_id', $googleLogin->id)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->route('home');
            } else {
                // dd($googleLogin->user);
                // create a new user
                $newUser                  = new User;
                $newUser->username        = $googleLogin->name;
                $newUser->name            = $googleLogin->name;
                $newUser->email           = $googleLogin->email;
                $newUser->google_id       = $googleLogin->id;
                $newUser->phone           = '';
                $newUser->role_id         = 0;
                $newUser->status          = 0;
                $newUser->avatar          = $googleLogin->avatar;

                $newUser->save();
                Auth::login($newUser);
                return redirect()->route('home');
            }
        }


        } catch (\Throwable $th) {
            throw $th;
        }

      
    }



    // dang nhap bang facebook 

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {

        $facebookLogin = Socialite::driver('facebook')->user();
        if ($facebookLogin) {
            $user = User::where('facebook_id', $facebookLogin->id)->first();

            if ($user) {
                auth()->login($user);
                return redirect()->to('/');
                // log the user in    
            } else {
                // create a new user
                // dd($facebookLogin);

                $newUser                  = new User;
                $newUser->name            = $facebookLogin->name;
                $newUser->email           = $facebookLogin->email;
                $newUser->facebook_id     = $facebookLogin->id;
                $newUser->username        = '';
                $newUser->role_id         = 0;
                $newUser->status          = 0;
                $newUser->avatar          = $facebookLogin->avatar;
                $newUser->save();
                return redirect()->to('/');
            }
        }
        // check if they're an existing user



    }
}
