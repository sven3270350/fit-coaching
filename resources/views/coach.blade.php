@extends('home')

@section('main_panel')
<div class="container-fluid p-4">
    <table class="table text-white ">
        <thead>
            <tr>
                <th>Picture</th>
                <th>ID</th>
                <th>HL ID</th>
                <th>Name</th>
                <th>IC</th>
                <th>Phone no.</th>
                <th>Gmail</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coachs as $coach)
                <tr>
                    <td>
                        <img src="assets/img/avatar.png" class="user_avatar"></img>
                    </td>
                    <td>
                        {{$loop->index + 1}}
                    </td>
                    <td>
                        {{$coach->h_id}}
                    </td>
                    <td>
                        {{$coach->name}}
                    </td>
                    <td>
                        {{$coach->ic}}
                    </td>
                    <td>
                        {{$coach->phone}}
                    </td>
                    <td>
                        <a class="text-white" href="http://{{$coach->gmail}}">{{$coach->gmail}}</a>
                    </td>
                    <td>
                        {{$coach->address}}
                    </td>
                    <td>Edit Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection