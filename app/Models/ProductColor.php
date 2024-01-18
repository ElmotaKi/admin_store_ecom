<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $fillable = ['id','products-color_id',	'color'];
    protected $table ='product_color';


    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function ProductColorSize(){
        return $this->hasMany(ProductColorSize::class);
    }
}
