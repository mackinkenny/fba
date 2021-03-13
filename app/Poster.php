<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Poster extends Model
{
    public function experts()
    {
        return $this->belongsToMany(Expert::class);
    }
}
