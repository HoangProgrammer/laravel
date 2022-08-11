<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

use Exception;
use Illuminate\Http\Request;
class SigninController extends Controller
{
   
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    

    public function googleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {
            dd($e);
            return redirect('/login');
        }

        // check if they're an existing user
        $existing = User::where('google_id', $user->id)->first();
        if ($existing) {

            Auth::login($existing);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->username            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->phone           = "";
            $newUser->birthday        =  Date('Y-m-d');
            $newUser->role            = 1;
            $newUser->status          = 0;
            $newUser->avatar          = $user->avatar;
            $newUser->room_id          = 1;

            $newUser->save();
            return redirect()->to('/');
        }
    }

    


    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('/auth/login');
        }

        // check if they're an existing user
        $existing = User::where('facebook_id', $user->id)->first();
        if ($existing) {
            // log the user in
            auth()->login($existing);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->facebook_id     = $user->id;
            $newUser->role            = 1;
            $newUser->status          = 0;
            $newUser->avatar          = $user->avatar;
            $newUser->save();
            auth()->login($newUser);
        }
        return redirect()->to('/');
    }


    public function LoginAdmin(Request $request)
    {
        if ($user=  Auth::attempt([
            "email" => $request->email,
            "password" => $request->password
      ])) {   
        // dd($user);   
        // echo "dr";

            return redirect('admin');
        } else {
   dd($user);
// echo "xịt";
            return redirect('login');
        }
        # code...
    }
}
