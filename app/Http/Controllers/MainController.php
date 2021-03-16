<?php

namespace App\Http\Controllers;

use App\Exports\MailsExport;
use App\Mail\Report;
use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Excel;

class MainController extends Controller
{
    public function send(Request $request)
    {
        if (isset($request->event))
        {
            Mail::to('naspekov.erkin@gmail.com')->send(new \App\Mail\Poster($request->name, $request->phone, $request->email, Poster::find($request->event)));
        }
        else
        {
            Mail::to('naspekov.erkin@gmail.com')->send(new Report($request->name, $request->phone, $request->email, $request->comment));
        }
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

    public function addEmail(Request $request)
    {
        $email = \App\Mail::where('email',$request->email)->first();
        if(is_null($email))
        {
            $email = new \App\Mail();
            $email->email = $request->email;
            $email->save();

        }
        else
        {
            return response()->json([
               'status' => 1,
            ]);
        }

        return response()->json([
            'status' => 0,
        ]);
    }

    public  function upload_excel_emails()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new MailsExport, 'mails.xlsx');
    }
}
