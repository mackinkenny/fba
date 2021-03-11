<?php

namespace App\Http\Controllers;

use App\Expert;
use Illuminate\Http\Request;

class ExpertsController extends Controller
{
    public function index()
    {
        $experts = Expert::all()->reverse();
        return view('experts.list', ['experts' => $experts]);
    }

    public function show(Request $request)
    {
        $expert = Expert::find($request->v);

        return view('experts.show', ['expert' => $expert]);
    }
}
