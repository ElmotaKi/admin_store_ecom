<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [	'titel',	'description',	'address',	'phone',	'email',	'logo','favicon',	'facebook',	'twitter',	'youtub',	'tiktok'];
    protected $table ='setting';
}
