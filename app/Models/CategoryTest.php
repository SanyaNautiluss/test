<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTest extends Model
{
    use HasFactory;
    
    protected $fillable = ['test_id', 'category_id'];

    protected $table = 'category_test'; // Explicitly specify the table name

    public function test(){
        return $this->hasMany(Test::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }
}
