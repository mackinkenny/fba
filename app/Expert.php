<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Expert extends Model
{
    public function posters()
    {
        return $this->hasMany(Poster::class);
    }
}
