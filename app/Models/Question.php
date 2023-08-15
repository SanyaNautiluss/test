<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questionTest(){
        return $this->belongsTo(Test::class);
    }

    public function questionAnswer(){
        return $this->hasMany(Answer::class);
    }

}
