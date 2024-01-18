<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAddress extends Model
{
    use HasFactory;
    protected $fillable = ['user_adress_id','address',	'city',	'country',	'postal-code',	'phone',	'email',	'name',	'username'];
    protected $table ='user_adresse';

    public function User(){
        return $this->belongsTo(User::class);
    }
}
