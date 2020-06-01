<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('customer.home');
})->name('home');
Route::get('/about', function () {
	$company_teams = App\Model\Customer\CompanyTeam::all();
	return view('customer.about',[
		'company_teams'=>$company_teams,
	]);
})->name('about');


Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});
