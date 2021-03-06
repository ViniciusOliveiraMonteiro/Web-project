<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name', 'amount', 'image'
    ];

    public function orders(){
    	return $this->hasMany(Order::class);
    }
}
