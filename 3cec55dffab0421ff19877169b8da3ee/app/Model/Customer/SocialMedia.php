<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
	protected $fillable = [
		'social_media_name',
		'icon',
	];
}
