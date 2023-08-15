<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id'
    ];

    public function testCategory(){
        return $this->belongsTo(Category::class);
    }

    public function testQuestion(){
        return $this->hasMany(Question::class);
    }
}