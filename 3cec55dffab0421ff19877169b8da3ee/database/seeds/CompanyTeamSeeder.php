<?php

use Illuminate\Database\Seeder;
use App\Model\Customer\CompanyTeam;
use App\Model\Customer\CompanyTeamSocialMedia;
class CompanyTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 1
        $data = 
        [
            'basic-info'=>[
                'full_name'=>'Niko Setiawan',
                'job_title'=>'Operational Manager',
                'profile_picture'=>'default/img/team1.jpeg',
                'profile_description'=>'Lulusan Sistem Informasi di Bina Nusantara, Spesialis IT support dan sudah dipercayakan oleh beberapa perusahaan, Co founder dari Travepedia',
            ],
            'social_media'=>
            [
                [
                    'company_team_id'=>1,
                    'social_media_type'=>5,
                    'url'=>'https://www.instagram.com/nikoosetiawan/',
                ],
                [
                    'company_team_id'=>1,
                    'social_media_type'=>3,
                    'url'=>'https://www.linkedin.com/in/niko-setiawan-5a8b09140/',
                ],
            ],
        ];
        CompanyTeam::create($data['basic-info']);
        foreach ($data['social_media'] as $key => $sc) {
            CompanyTeamSocialMedia::create($sc);
        }
        //id 2
        $data = 
        [
            'basic-info'=>[
                'full_name'=>'Niko Setiawan',
                'job_title'=>'Operational Manager',
                'profile_picture'=>'default/img/team1.jpeg',
                'profile_description'=>'Lulusan Sistem Informasi di Bina Nusantara, Spesialis IT support dan sudah dipercayakan oleh beberapa perusahaan, Co founder dari Travepedia',
            ],
            'social_media'=>[
                [
                    'company_team_id'=>2,
                    'social_media_type'=>5,
                    'url'=>'https://www.instagram.com/jonathanchang56/',
                ],
                [
                    'company_team_id'=>2,
                    'social_media_type'=>3,
                    'url'=>'https://www.linkedin.com/in/jonathan-chang-25901910b/',
                ],
            ],
        ];
        CompanyTeam::create($data['basic-info']);
        foreach ($data['social_media'] as $key => $sc) {
            CompanyTeamSocialMedia::create($sc);
        }


    }
}
