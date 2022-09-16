@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="main_header d-flex justify-content-between">
        <h2 class="text-white">SLIM FIT COACHING SYSTEM</h2>
        <div class="header_authbox d-flex align-items-center">
            <img class="user_avatar me-2" src="/assets/img/avatar.png"></img>
            <h4 class="text-white mb-0 me-4">{{Auth::user()->username}}</h4>
            <form id="logout-form" action="{{ url('logout') }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm btn-outline-light">Logout</button>
            </form>
        </div>
    </div>
    <div class="panel_container d-flex mt-2">
        <div class="side_menu">
            <h3 class="mt-4 text-white mb-2 text-center">Welcome, <strong>{{Auth::user()->name}}</strong></h3>
            <div class="d-flex flex-column p-2">
                <a class="side_btn ms-3 profile_btn" href="/profile">My Profile</a>

                @if(Auth::user()->role == 0)
                    <div class="side_btn ms-3">Manage User</div>
                        <a class="side_btn ms-5" href="/coach">Coach</a>
                        <a class="side_btn ms-5" href="/coachee">Coachee</a>
                    <div class="side_btn ms-3">Manage Report</div>
                @elseif(Auth::user()->role == 1)
                    <div class="side_btn ms-3">Manage User</div>
                        <a class="side_btn ms-5" href="/coachee">Coachee</a>
                    <div class="side_btn ms-3">Manage Health</div>
                    <a class="side_btn ms-3" href="/program">Manage Program</a>
                    <div class="side_btn ms-3">Manage Payment</div>
                @else
                    <div class="side_btn ms-3">Health Update</div>
                    <div class="side_btn ms-3">Program</div>
                    <div class="side_btn ms-3">Payment</div>
                @endif
            </div>
        </div>
        <div class="main_panel ms-2">
            @yield('main_panel')
        </div>
    </div>
</div>
@endsection