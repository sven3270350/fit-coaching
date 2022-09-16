@extends('home')

@section('main_panel')
<div class="container-fluid ">

    <div class="d-flex p-4 align-items-center">
        <img class="profile_avatar rounded-3 me-4" width="250px" height="250px" src="assets/img/avatar.png"></img>
        <div class="text-white">
            <h4>Name: <strong>{{Auth::user()->name}}</strong></h4>
            <h4>Gmail: <strong>{{Auth::user()->gmail}}</strong></h4>
            <h4>Phone: <strong>{{Auth::user()->phone}}</strong></h4>
        </div>
    </div>
</div>
@endsection