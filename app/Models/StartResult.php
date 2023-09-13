<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartResult extends Model
{
    use HasFactory;

    protected $fillable = ['test_id', 'user_name', 'total_points'];

    protected $table = 'start_results';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
