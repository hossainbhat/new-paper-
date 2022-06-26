<?php

use Illuminate\Support\Facades\Route;



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

    });


});
