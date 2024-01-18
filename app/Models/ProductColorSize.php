<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['product_size_id',	'product_color_id',	'quantity',	'prix-tow',	'descounte',	'status'];
    protected $table ='product_color_size';


    public function ProductColor(){
        return $this->belongsTo(ProductColor::class);
    }



    public function ProductSize(){
        return $this->belongsTo(ProductSize::class);
    }
}
