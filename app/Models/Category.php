<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[	'name','image','perant'];
    protected $table = 'categories';


    public function child(){
        return $this->hasMany(Category::class,'perant');
    }


    public function perant()
    {
        return $this->belongsTo(Category::class,'perant');
    }
    public function Product(){
        return $this->hasMany(Category::class,'category_id');
    }
}
