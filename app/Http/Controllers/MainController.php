<?php

namespace App\Http\Controllers;

use App\Mail\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('naspekov.erkin@gmail.com')->send(new Report($request->name, $request->phone, $request->email, $request->comment));
    }
}
