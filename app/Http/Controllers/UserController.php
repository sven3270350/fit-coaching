<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Profile() {
        return view('/profile');
    }
    public function Coach()
    {
        $coachs = User::where('role', 1)->get();
        return view('/coach', ['coachs' => $coachs]);
    }
    public function Coachee()
    {
        $user = Auth::user();
        $coachees = User::where('role', 2)->where('coach', $user->username)->get();
        return view('/coachee', ['coachees' => $coachees]);
    }
}
