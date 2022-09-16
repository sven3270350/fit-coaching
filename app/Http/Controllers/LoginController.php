<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        if(Auth::check()) {
            return view('home');
        }
        $coachs = User::where('role', 1)->get();
        return view('welcome', ['coachs' => $coachs, 'err' => 0]);
    }

    public function Login(Request $request)
    {
        if(User::where('username', $request->username)->exists()) {
            $user = User::where('username', $request->username)->first();
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user, true);
                return view('profile');
            }
            $coachs = User::where('role', 1)->get();
            return view('welcome', ['coachs' => $coachs, 'err' => 2]);
        }
        $coachs = User::where('role', 1)->get();
        return view('welcome', ['coachs' => $coachs, 'err' => 1]);
    }

    public function Logout() {
        
    }

    public function Register_Coach(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->h_id = $request->hid;
        $user->ic = $request->ic;
        $user->phone = $request->phone;
        $user->address = $request->add;
        $user->gmail = $request->gmail;
        $user->username = $request->uname;
        $user->password = Hash::make($request->pswd);

        $user->coach = '';
        $user->gender = -1;
        $user->age = -1;
        $user->weight = -1;
        $user->height = -1;

        $user->role = 1;

        $user->save();
        return $user;
    }

    public function Register_Coachee(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->ic = $request->ic;
        $user->age = $request->age;
        $user->phone = $request->phone;
        $user->address = $request->add;
        $user->gmail = $request->gmail;
        $user->coach = $request->coach;
        $user->username = $request->uname;
        $user->password = Hash::make($request->pswd);

        $user->h_id = '';
        $user->gender = 0;
        $user->weight = 0;
        $user->height = 0;

        $user->role = 2;

        $user->save();
        return $user;
    }
}
