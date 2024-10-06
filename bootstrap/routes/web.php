<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Test\TestController;


/*Route::get('/admin/{type}', function($type){
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


Route::get('/test', [TestController::class, 'testMethod']);
