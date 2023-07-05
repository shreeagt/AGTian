<?php

use App\Http\Controllers\SRMController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\Indexcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


Route::get('/test', function() {
    return view('test');
});

Route::get('/thankyou', [Indexcontroller::class, 'thankyou'])->name('thankyou');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
       
        /** 
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        // Route::group(['middleware' => ['role:admin', 'permission:access-srm']], function () {
        //     Route::get('/SRM', [SRMController::class, 'index'])->name('srm.index');
        // });
        Route::group(['middleware' => ['auth', 'permission']], function () {
            Route::group(['prefix' => 'SRM', 'middleware' => ['role:admin', 'permission:access-srm']], function () {
                Route::get('/', [SRMController::class, 'index'])->name('srm.index');
            });
        });
       
        Route::get('/videoList', 'VideoController@index')->name('videoList');
       
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

       
    });

    Route::group(['middleware' => ['auth', 'role:so']], function () {
        Route::get('/doctors/create', 'DoctorsController@create')->name('doctors.create');
        Route::post('/doctors/create', 'DoctorsController@insertdoctors')->name('doctors.insert');
        Route::get('/doctors/show', 'DoctorsController@showdoctors')->name('doctors.show');
        // Route::get('/doctors/home/{doctor}', 'DoctorsController@link')->name('doctors.link');
        // Route::post('/doctors/upload', 'DoctorsController@upload')->name('doctors.upload');
        Route::delete('/doctors/{doctor}', 'DoctorsController@destroy')->name('doctors.destroy');
        Route::get('/doctors/{doctor}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit');
        Route::put('/doctors/{doctor}', [DoctorsController::class, 'update'])->name('doctors.update');
    });

    Route::get('/videocreate', 'VideoController@create')->name('videocreate');
    Route::post('/videsave', 'VideoController@store')->name('videosave');    
    Route::patch('/{video_id}/update', 'VideoController@update')->name('videoupdate');
});

Route::group(['namespace' => 'App\Http\Controllers'], function() {
        Route::get('/doctors/home/{doctor}', 'DoctorsController@link')->name('doctors.link');
        Route::post('/doctors/upload', 'DoctorsController@upload')->name('doctors.upload');
});

Route::get('/', [Indexcontroller::class, 'index'])->name('index');
Route::get('/participate',[Indexcontroller::class, 'participate'])->name('participate');
Route::post('/insertvideo',[Indexcontroller::class, 'insertvideo'])->name('insertvideo');
Route::get('/videostatus/{id}', [Indexcontroller::class, 'updatevideo'])->name('update');
Route::get('/videosttatus/{id}', [Indexcontroller::class,'rject'])->name('reject');
Route::get('/winner', [Indexcontroller::class, 'winner'])->name('winner');

Route::get('/videoLis/{id}', [VideoController::class,'updatevideo'])->name('videoList.update');
Route::get('/videoLiis/{id}', [VideoController::class,'rject'])->name('videoLiist.reject');