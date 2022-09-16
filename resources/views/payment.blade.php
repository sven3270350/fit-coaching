@extends('home')

@section('main_panel')
<div class="container-fluid p-4" style="height:100%">
    <div style="min-height:75%">
    <table class="table text-white">
        <thead>
            <tr>
                <th>Date</th>
                <th>ID</th>
                <th>Name</th>
                <th>Payment Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>
                        {{$payment->date}}
                    </td>
                    <td>
                        {{$payment->pid}}
                    </td>
                    <td>
                        {{$payment->name}}
                    </td>
                    <td>
                        {{$payment->pdescription}}
                    </td>
                    @if ($payment->status == true)
                    <td>
                        Paid
                    </td>
                    @else
                    <td>
                        Unpaid
                    </td>
                    @endif
                    <td>
                        <a href="/payment/add/{{$payment->id}}"><i class="fa fa-solid fa-pen payment_edit"></i></a> <i id="{{$payment->id}}" class="fa fa-sharp fa-solid fa-trash payment_delete"></i>
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
            <a class="btn btn-primary" id="add_payment" href="/payment/add">Add new payment</a>
        </div>
    </div>
    @endif
</div>
@endsection