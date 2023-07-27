<?php

use App\Models\Posts;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/one',function(Request $request){
    return User::find(1)->posts;
    // Posts::create($request->all());
    // return 'ok';
});

Route::post('/add-user',function(Request $request){
    // User::create([
    //     'name'=>'sara',
    //     'email'=>'sar@g.com',
    //     'password'=>'123',
    // ]);
    // return 'ok';

    return Role::all();
    //  'ok';

    // return User::all();

});
