<?php

//use App\Http\Controllers\PhotoController;

use App\Http\Controllers\Test\TestController;

use App\Http\Controllers\Test\PictureController;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;





/*  use App\Http\Controllers\Test\ContactusController;
    use App\Http\Controllers\Test\galleryController;
    use App\Http\Controllers\Test\aboutController;
*/

/*
Route::get('/admin/{type}', function($type){
    $user_list = [1, 2, 3, 4];
    return view('admin.welcome',compact('type',$type,'user_list',$user_list));
});
Route::get('/user', function(){
    return view('user.welcome');
});
Route::POST('post_route_check', function(){
     return view('user.welcome');
});
*/

Route::group(['prefix' =>'Test'], function () {
    // Routes handled by TestController
    Route::get('/contactus', [TestController::class, 'testMethod1']);
    Route::get('/gallery/{student}', [TestController::class, 'testMethod2']);
    Route::get('/about', [TestController::class, 'testMethod3']);

    // Resourceful route handled by PictureController
    Route::resource('picture', PictureController::class);
});
Route::get('/',[HomeController::class, 'index']);


