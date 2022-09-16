<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Program;

class ProgramController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
        $programs = Program::all();
        return view('/program',['programs' => $programs]);
    }

    public function new(Request $request)
    {
        # code...
        $program = new Program;
        $program->date = $request->date;
        $program->time = $request->time;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->program = $request->program;
        $program->coach = Auth::user()->id;
        $program->save();
        $programs = Program::all();
        return redirect('/program');
    }
}
