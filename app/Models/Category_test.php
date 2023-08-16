<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_test extends Model
{
    use HasFactory;
    
    protected $fillable = ['test_id', 'category_id'];

    public function testCategory(){
        return $this->hasMany(Test::class);
    }

    public function categoryTest(){
        return $this->hasMany(Category::class);
    }
}
