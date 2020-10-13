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
    return view('welcome');
});


Route::get('/admin', function () {
    return view('welcome_admin');
});

 // Authentication Routes...
Route::get('admin/login','AuthAdmin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin/login','AuthAdmin\LoginController@login');
Route::post('admin/logout','AuthAdmin\LoginController@logout')->name('logout.admin');


Auth::routes();

Route::get('/auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', 'HomeController@start')->name('start');

Route::get('admin/home', 'HomeAdminController@index')->name('home.admin');

Route::group(['middleware' => 'auth'], function () {

	//users
	Route::get('/users', 'UserController@index')->name('users');

	Route::get('/showUser/{id}',  'UserController@show')->name('showUser');

	Route::put('userProfile/{id}',  'UserController@profile')->name('userProfile');

	Route::get('deleteUser/{id}',  'UserController@destroy')->name('deleteUser');

	Route::put('updateUser/{id}',  'UserController@update')->name('updateUser');
	Route::put('activateUser/{id}',  'UserController@activate')->name('activateUser');
	Route::put('change-password/{id}',  'UserController@password')->name('changepass');

	// Route::post('deleteUser/{id}',  'UserController@destroy')->name('deleteUser');

	Route::post('/user', 'UserController@store')->name('user.add');



	//vendors
	Route::get('/vendors', 'VendorController@index')->name('vendors');


	Route::get('/letters', 'LetterController@index')->name('letters');

	Route::get('/contacts', 'ContactController@index')->name('contacts');

	//employees
	Route::get('/employees', 'EmployeeController@index')->name('employees');

	//company profile
	Route::get('/profile_info', 'CompanyController@index')->name('profile_info');
	Route::get('/edit_info', 'CompanyController@edit')->name('edit_info');


	//Roles
	Route::get('/roles', 'RoleController@index')->name('roles');

	//Permissions
	Route::get('/permissions','PermissionController@index')->name('permissions');
	Route::post('/permissions/add','PermissionController@index')->name('permissions.add');

	//role and permissions
	Route::post('/user/permissions/add','PermissionController@store')->name('user.permissions.add');
	Route::post('/user/permissions/revoke','PermissionController@detach')->name('user.permissions.revoke');

	Route::post('/category-add','CategoryController@store')->name('category.add');
	Route::delete('/category-delete/{id}','CategoryController@destroy')->name('category.del');

	Route::get('/blog','BlogController@index')->name('blog');
	Route::post('/blog-post/add','BlogController@store')->name('blog.add');
	Route::get('/blog-show/{id}','BlogController@show')->name('blog.show');
	Route::get('/blog-edit','BlogController@edit')->name('blog.edit');
	Route::put('/blog/update/{id}','BlogController@update')->name('blog.update');
	Route::delete('/blog-delete/{id}','BlogController@destroy')->name('blog.del');

});