@extends('home')

@section('main_panel')
<div class="container-fluid p-4">
    <table class="table text-white ">
        <thead>
            <tr>
                <th>Picture</th>
                <th>ID</th>
                <th>Name</th>
                <th>IC</th>
                <th>Phone no.</th>
                <th>Gmail</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Address</th>
                <th>Coach</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coachees as $coachee)
                <tr>
                    <td>
                        <img src="assets/img/avatar.png" class="user_avatar"></img>
                    </td>
                    <td>
                        {{$loop->index + 1}}
                    </td>
                    <td>
                        {{$coachee->name}}
                    </td>
                    <td>
                        {{$coachee->ic}}
                    </td>
                    <td>
                        {{$coachee->phone}}
                    </td>
                    <td>
                        <a class="text-white" href="http://{{$coachee->gmail}}">{{$coachee->gmail}}</a>
                    </td>
                    <td>
                        {{$coachee->weight}}
                    </td>
                    <td>
                        {{$coachee->height}}
                    </td>
                    <td>
                        {{$coachee->address}}
                    </td>
                    <td>
                        {{$coachee->coach}}
                    </td>
                    <td>Edit Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection