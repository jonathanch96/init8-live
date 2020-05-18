<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name'=>'Jonathan',
    		'email'=>'jonathanchang96@gmail.com',
    		'password'=>'$2y$10$NTsPuIpZB4qGGtg0FHfyAuu.5DPN1sm5iGnUlTrqB8oTQ5i6WGU/K',
            'role_id'=>1,
    	]);
    }
}
