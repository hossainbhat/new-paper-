<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('/')->namespace('App\Http\Controllers\FrontEnd')->group(function(){

    Route::get('/', 'FrontEndController@index')->name('front.index');

});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::match(['get','post'],'/', 'AdminController@login')->name('admin.login');

    Route::group(['middleware' => ['admin']], function () {
        // settings
        Route::match(['get','post'],'/profile', 'AdminController@profile')->name('admin.profile');
        Route::post('/check-pwd', 'AdminController@chkPassword')->name('admin.chkPassword');
        Route::post('/update-pwd', 'AdminController@updatePassword')->name('admin.updatePassword');
        Route::get('/delete-profile-image/{id}', 'AdminController@deleteProfileImage')->name('admin.deleteProfileImage');
        //dashboad
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/logout', 'AdminController@logout')->name('admin.logout');
        //role 
        Route::resource('roles', 'RoleController', ['names' => 'admin.roles']);
        Route::get('delete-role/{id}', 'RoleController@deleteRole')->name('admin.deleteRole');
        //permission
        Route::resource('admins', 'AdminController', ['names' => 'admin.admins']);
        Route::get('delete-admin/{id}', 'AdminController@deleteAdmin')->name('admin.deleteAdmin');
        //category
        Route::get('/categories', 'CategoryController@categories')->name('admin.categories');
        Route::post('/update-category-status', 'CategoryController@updateCategoryStatus')->name('admin.CategoryStatus');
        Route::match(['get','post'],'/add-edit-category/{id?}', 'CategoryController@addEditCategory')->name('admin.addEditCategory');
        Route::get('delete-category/{id}', 'CategoryController@deleteCategory')->name('admin.deleteCategory');

 
    });


});
