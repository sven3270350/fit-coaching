@extends('home')

@section('main_panel')
<div class="container-fluid p-4" style="height:100%">
    <div style="min-height:75%">
    <table class="table text-white">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Program</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
                <tr>
                    <td>
                        {{$program->date}}
                    </td>
                    <td>
                        {{$program->time}}
                    </td>
                    <td>
                        {{$program->program}}
                    </td>
                    <td>
                        {{$program->description}}
                    </td>
                    @if ($program->status == true)
                    <td>
                        Available
                    </td>
                    @else
                    <td>
                        Complete
                    </td>
                    @endif
                    <td>
                    <i class="fa fa-solid fa-pen"></i> <i class="fa fa-sharp fa-solid fa-trash"></i>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @if(Auth::user()->role == 1)
    <div class="row">
        <div class="col-md-10 col-sm-0"></div>
        <div class="col-md-2 col-sm-12 text-center">
            <a class="btn btn-primary" id="add_program" href="/program/add">Add new Program</a>
        </div>
    </div>
    @endif
</div>
@endsection