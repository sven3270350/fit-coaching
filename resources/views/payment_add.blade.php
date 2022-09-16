@extends('home')

@section('main_panel')
<div class="container-fluid p-4">
    <div class="row text-center">
        @if (isset($payment))
            <form method="POST" action="/payment/edit">
                @csrf
                <input type="hidden" name="id" value="{{$payment->id}}">
                <div class="col-lg-6 col-sm-12">
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Date:</div>
                        <div class="col-6">
                            <input id="date" name="date" type="date" class="form-control" value="{{$payment->date}}" required placeholder="Date" autofocus>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">ID:</div>
                        <div class="col-6">
                            <input id="pid" name="pid" type="text" class="form-control" value="{{$payment->pid}}" required placeholder="ID" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Name</div>
                        <div class="col-6">
                            <input id="name" name="name" type="text" class="form-control" value="{{$payment->name}}" required placeholder="Name" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Payment Description</div>
                        <div class="col-6">
                            <textarea id="pdescription" name="pdescription" class="form-control" value="{{$payment->pdescription}}" style="height: 100px" placeholder="Payment Description"></textarea>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 text-white fs-5">Status:</div>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                @if ($payment->status == 1)
                                <option value="1" selected="selected">Paid</option>
                                <option value="0">Unpaid</option>
                                @else
                                <option value="1">Paid</option>
                                <option value="0" selected="selected">Unpaid</option>
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
            <form method="POST" action="/payment/new">
                @csrf
                <div class="col-lg-6 col-sm-12">
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Date:</div>
                        <div class="col-6">
                            <input id="date" name="date" type="date" class="form-control" required placeholder="Date" autofocus>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">ID:</div>
                        <div class="col-6">
                            <input id="pid" name="pid" type="text" class="form-control" required placeholder="ID" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Name</div>
                        <div class="col-6">
                            <input id="name" name="name" type="text" class="form-control" required placeholder="Name" >
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6  text-white fs-5">Description</div>
                        <div class="col-6">
                            <textarea id="pdescription" name="pdescription" class="form-control" style="height: 100px" placeholder="Payment Description"></textarea>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 text-white fs-5">Status:</div>
                        <div class="col-6">
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected="selected">Paid</option>
                                <option value="0">Unpaid</option>
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