<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class CompanyTeam extends Model
{
	protected $fillable = [
		'full_name',
		'job_title',
		'profile_picture',
		'profile_description',
	];
	public function getCompanyTeamSocialMedias(){
		return $this->hasMany('App\Model\Customer\CompanyTeamSocialMedia','company_team_id');
	}
}
