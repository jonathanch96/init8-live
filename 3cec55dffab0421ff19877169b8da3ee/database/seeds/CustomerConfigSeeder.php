<?php

use Illuminate\Database\Seeder;
use App\Model\Customer\CustomerConfig;
class CustomerConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	CustomerConfig::create([
    		'key'=>'email',
    		'value'=>'cs@init8.id',
    	]);
    	CustomerConfig::create([
    		'key'=>'address',
    		'value'=>'Mall Taman Palem Lantai LG blok B no. 57<br />Cengkareng, Jakarta Barat 11730',
     ]);
        CustomerConfig::create([
            'key'=>'title',
            'value'=>'INIT8 - IT Solution',
        ]);
        CustomerConfig::create([
            'key'=>'main-logo',
            'value'=>'\assets\img\logo.png',
        ]);
    }
}
