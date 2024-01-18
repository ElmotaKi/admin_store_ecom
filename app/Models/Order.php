<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order  extends Model
{
    use HasFactory;
    protected $fillablle = ['order_id',	'status',	'paymend-method',	
    'paymend-id',	'total-prix',	'address',	'email',	'name',
    'username',	'city',	'postal-code',	'contry',	'phone',	'shoping-prix'];
    protected $table = 'orders';

    public function User(){
        return $this->belongsTo(User::class);
    }


}
