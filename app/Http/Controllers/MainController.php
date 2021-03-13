<?php

namespace App\Http\Controllers;

use App\Mail\Report;
use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('naspekov.erkin@gmail.com')->send(new Report($request->name, $request->phone, $request->email, $request->comment));
    }

    public function index(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $event = $request->event;
        $poster = Poster::where('id',$id)->where('name',$name)->where('type',$event)->first();
        if (!is_null($poster))
        {
            return view('poster',['poster' => $poster]);
        }
        else
        {
            abort(404);
        }
        return null;
    }
}
