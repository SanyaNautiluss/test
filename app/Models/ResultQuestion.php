<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'result_id', 'time_taken'];

    public function result(){
        return $this->belongsTo(Result::class);
    }
}
