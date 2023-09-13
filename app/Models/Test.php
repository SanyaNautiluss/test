<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'category_test', 'test_id', 'category_id');
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
