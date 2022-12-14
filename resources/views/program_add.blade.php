@extends('home')

@section('main_panel')
<div class="container-fluid p-4">
    <div class="row text-center">
        @if (isset($program))
            <form method="POST" action="/program/edit">
                @csrf
                <input type="hidden" name="id" value="{{$program->id}}">
                <div class="col-lg-6 col-sm-12">
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Date:</div>
                        <div class="col-6">
                            <input id="date" name="date" type="date" class="form-control" value="{{$program->date}}" required placeholder="Date" autofocus>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Time:</div>
                        <div class="col-6">
                            <input id="time" name="time" type="text" class="form-control" value="{{$program->time}}" required placeholder="Time" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Program</div>
                        <div class="col-6">
                            <input id="program" name="program" type="text" class="form-control" value="{{$program->program}}" required placeholder="Program" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Description</div>
                        <div class="col-6">
                            <textarea id="description" name="description" class="form-control" value="{{$program->description}}" style="height: 100px" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 text-white fs-5">Status:</div>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                @if ($program->status == 1)
                                <option value="1" selected="selected">Available</option>
                                <option value="0">Complete</option>
                                @else
                                <option value="1">Available</option>
                                <option value="0" selected="selected">Complete</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            @else
            <form method="POST" action="/program/new">
                @csrf
                <div class="col-lg-6 col-sm-12">
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Date:</div>
                        <div class="col-6">
                            <input id="date" name="date" type="date" class="form-control" required placeholder="Date" autofocus>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Time:</div>
                        <div class="col-6">
                            <input id="time" name="time" type="text" class="form-control" required placeholder="Time" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Program</div>
                        <div class="col-6">
                            <input id="program" name="program" type="text" class="form-control" required placeholder="Program" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Description</div>
                        <div class="col-6">
                            <textarea id="description" name="description" class="form-control" style="height: 100px" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 text-white fs-5">Status:</div>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected="selected">Available</option>
                                <option value="0">Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection