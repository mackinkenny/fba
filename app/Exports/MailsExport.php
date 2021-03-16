<?php

namespace App\Exports;

use App\Mail;
use Maatwebsite\Excel\Concerns\FromCollection;

class MailsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mail::all('email');
    }
}
