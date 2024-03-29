<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = [	'product_size_id','size'];
    protected $table ='product_size';


    public function Product(){
        return $this->belongsTo(Product::class);

        
    }


    public function ProductColorSize(){
        return $this->hasMany(ProductColorSize::class);

        
    }
}
