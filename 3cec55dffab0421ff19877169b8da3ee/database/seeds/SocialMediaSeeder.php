<?php

use Illuminate\Database\Seeder;
use App\Model\Customer\SocialMedia;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SocialMedia::create([
    		'social_media_name'=>'facebook',
    		'icon'=>'fa-facebook',
    	]);
    	SocialMedia::create([
    		'social_media_name'=>'twitter',
    		'icon'=>'fa-twitter',
    	]);
    	SocialMedia::create([
    		'social_media_name'=>'linked-in',
    		'icon'=>'fa-linkedin',
    	]);
    	SocialMedia::create([
    		'social_media_name'=>'youtube',
    		'icon'=>'fa-youtube-play',
    	]);
    	SocialMedia::create([
    		'social_media_name'=>'instagram',
    		'icon'=>'fa-instagram',
    	]);
    }
}
