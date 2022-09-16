<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Payment;


class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
        $payments = Payment::all();
        return view('/payment',['payments' => $payments]);
    }

    public function new(Request $request)
    {
        # code...
        $payment = new Payment;
        $payment->date = $request->date;
        $payment->pid = $request->pid;
        $payment->pdescription = $request->pdescription;
        $payment->status = $request->status;
        $payment->name = $request->name;
        $payment->coach = Auth::user()->id;
        $payment->save();
        return redirect('/payment');
    }

    public function delete(Request $request)
    {
        # code...
        $payment = Payment::find($request->id);
        $payment->delete();
        return redirect('/payment');
    }

    public function add(Request $request)
    {
        # code...
        if (isset($request->id)) {
            # code...
            $payment = Payment::find($request->id);
            return view('/payment_add',['payment' => $payment]);
        } else {
            return view('/payment_add');
        }
        
    }

    public function edit(Request $request)
    {
        # code...
        $payment = Payment::find($request->id);
        $payment->date = $request->date;
        $payment->pid = $request->pid;
        $payment->pdescription = $request->pdescription;
        $payment->status = $request->status;
        $payment->name = $request->name;
        $payment->save();
        return redirect('/payment');
    }
}
