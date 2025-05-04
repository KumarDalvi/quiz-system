<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Quiz;
class Mcq extends Model
{
    //
    function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
