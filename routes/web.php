<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'Backend\HomeController@index');

Route::resource('/backend/blog', 'Backend\BlogController');
Route::resource('/backend/animo', 'Backend\AnimoController');
Route::resource('/backend/dayatampung', 'Backend\DayatampungController');
Route::resource('/backend/maba', 'Backend\MabaController');
Route::resource('/backend/mabareg', 'Backend\MabaRegController');
Route::resource('/backend/mhsaktif', 'Backend\MhsAktifController');
Route::resource('/backend/tabel12', 'Backend\Tabel12Controller');
Route::resource('/backend/tabel13', 'Backend\Tabel13Controller');
Route::resource('/backend/tabel14', 'Backend\Tabel14Controller');
Route::resource('/backend/tabel15', 'Backend\Tabel15Controller');
Route::resource('/backend/tabel16', 'Backend\Tabel16Controller');
Route::resource('/backend/tabel18', 'Backend\Tabel18Controller');
Route::resource('/backend/tabel19', 'Backend\Tabel19Controller');
Route::resource('/backend/tabel110', 'Backend\Tabel110Controller');
Route::resource('/backend/tabel111', 'Backend\Tabel111Controller');
Route::resource('/backend/tabel114', 'Backend\Tabel114Controller');
Route::resource('/backend/tabel115', 'Backend\Tabel115Controller');
Route::resource('/backend/tabel116', 'Backend\Tabel116Controller');
Route::resource('/backend/tabel117', 'Backend\Tabel117Controller');
Route::resource('/backend/tabel118', 'Backend\Tabel118Controller');
Route::resource('/backend/tabel119', 'Backend\Tabel119Controller');
Route::resource('/backend/tabel120', 'Backend\Tabel120Controller');
Route::resource('/backend/tabel121', 'Backend\Tabel121Controller');
Route::resource('/backend/tabel122', 'Backend\Tabel122Controller');
Route::resource('/backend/tabel129', 'Backend\Tabel129Controller');
// Route::get('/tabel129_export_fakultas', 'Tabel129Controller@exportDataFakultas');
// Route::get('/tabel129_export', 'Tabel129Controller@exportData');
// Route::post('/export_data_fakultas', 'Tabel129Controller@exportPostData');

Route::resource('/backend/tabel130', 'Backend\Tabel130Controller');
Route::resource('/backend/tabel131', 'Backend\Tabel131Controller');
Route::resource('/backend/tabel132', 'Backend\Tabel132Controller');
Route::resource('/backend/tabel134', 'Backend\Tabel134Controller');
Route::resource('/backend/tabel135', 'Backend\Tabel135Controller');
Route::resource('/backend/tabel136', 'Backend\Tabel136Controller');
Route::resource('/backend/tabel137', 'Backend\Tabel137Controller');
Route::resource('/backend/tabel141', 'Backend\Tabel141Controller');
Route::resource('/backend/tabel142', 'Backend\Tabel142Controller');
Route::resource('/backend/tabel144', 'Backend\Tabel144Controller');
Route::resource('/backend/tabel147', 'Backend\Tabel147Controller');
Route::resource('/backend/tabel148', 'Backend\Tabel148Controller');
Route::resource('/backend/tabel151', 'Backend\Tabel151Controller');
Route::resource('/backend/tabel169', 'Backend\Tabel169Controller');
Route::resource('/backend/tabel171', 'Backend\Tabel171Controller');
Route::resource('/backend/tabel172', 'Backend\Tabel172Controller');
Route::resource('/backend/tabel173', 'Backend\Tabel173Controller');
Route::resource('/backend/tabel174', 'Backend\Tabel174Controller');
Route::resource('/backend/tabel178', 'Backend\Tabel178Controller');
Route::resource('/backend/tabel184', 'Backend\Tabel184Controller');
Route::resource('/backend/tabel185', 'Backend\Tabel185Controller');
Route::resource('/backend/tabel186', 'Backend\Tabel186Controller');
Route::resource('/backend/tabel187', 'Backend\Tabel187Controller');
Route::resource('/backend/tabel188', 'Backend\Tabel188Controller');
Route::resource('/backend/tabel189', 'Backend\Tabel189Controller');
Route::resource('/backend/tabel190', 'Backend\Tabel190Controller');

Route::resource('/backend/tabel21', 'Backend\Tabel21Controller');
Route::resource('/backend/tabel22', 'Backend\Tabel22Controller');
Route::resource('/backend/tabel23', 'Backend\Tabel23Controller');
Route::resource('/backend/tabel24', 'Backend\Tabel24Controller');
Route::resource('/backend/tabel25', 'Backend\Tabel25Controller');
Route::resource('/backend/tabel213', 'Backend\Tabel213Controller');
Route::resource('/backend/tabel214', 'Backend\Tabel214Controller');
Route::resource('/backend/tabel225', 'Backend\Tabel225Controller');
Route::resource('/backend/tabel226', 'Backend\Tabel226Controller');
Route::resource('/backend/tabel227', 'Backend\Tabel227Controller');
Route::resource('/backend/tabel228', 'Backend\Tabel228Controller');
//Bidang 3
Route::resource('/backend/tabel31', 'Backend\Tabel31Controller');
Route::resource('/backend/tabel32', 'Backend\Tabel32Controller');
Route::resource('/backend/tabel33', 'Backend\Tabel33Controller');
Route::resource('/backend/tabel34', 'Backend\Tabel34Controller');
Route::resource('/backend/tabel35', 'Backend\Tabel35Controller');
Route::resource('/backend/tabel37', 'Backend\Tabel37Controller');
Route::resource('/backend/tabel38', 'Backend\Tabel38Controller');
//Bidang 4
Route::resource('/backend/tabel41', 'Backend\Tabel41Controller');
Route::resource('/backend/tabel42', 'Backend\Tabel42Controller');
Route::resource('/backend/tabel43', 'Backend\Tabel43Controller');
Route::resource('/backend/tabel44', 'Backend\Tabel44Controller');
Route::resource('/backend/tabel46', 'Backend\Tabel46Controller');
Route::resource('/backend/tabel47', 'Backend\Tabel47Controller');

//config
Route::resource('/backend/permission', 'Config\PermissionController');
Route::resource('/backend/role', 'Config\RoleController');
Route::resource('/backend/user', 'Config\UserController');

Route::resource('/backend/navigation-tree-view', 'Config\NavigationController');

/*** export data **/ 
//daya tampung
Route::get('/backend/exportdytampung', 'Backend\DayatampungController@export');
Route::post('/backend/exportdytampung', 'Backend\DayatampungController@exportPostData');



