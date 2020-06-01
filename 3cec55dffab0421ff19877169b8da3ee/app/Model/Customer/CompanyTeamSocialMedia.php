<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class CompanyTeamSocialMedia extends Model
{
	protected $fillable = [
		'company_team_id',
		'social_media_type',
		'url',
	];
	public function getSocialMedia(){
		return $this->hasOne('App\Model\Customer\SocialMedia','id','social_media_type');
	}
}
