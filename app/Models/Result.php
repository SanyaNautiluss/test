<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['test_id', 'total_points', 'time_taken', 'answers'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}
