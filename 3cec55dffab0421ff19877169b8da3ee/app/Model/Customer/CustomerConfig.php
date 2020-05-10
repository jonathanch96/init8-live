<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class CustomerConfig extends Model
{
    protected $fillable=[
    	'key',
    	'value',
    ];
    public function getConfig($key,$default){
    	$value =  $this->where('key',$key)->first();
    	return $value?$value->value:$default;	
    }
}
