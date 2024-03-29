<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/posts', function () {
//     $post = Post::create([
        
//         'title' => 'my-first-post',
//         'slug' => 'my-first-post'   
//     ]);
//     return $post;
// });

Route::resource('posts', 'PostController');
Route::resource('users', 'UserController');


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Users

Route::prefix('/user')->group ( function() {
    Route::post('/login', 'LoginController@login');
    Route::middleware('auth:api')->get('/users', 'UserController@index');
    
});

