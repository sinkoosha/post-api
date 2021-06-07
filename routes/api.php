<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\UserController;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {

    Route::get('/posts', [PostController::class, 'show']);
    Route::post('posts/create', [PostController::class, 'create']);
    Route::put('posts/update/{PostId}', [PostController::class, 'update']);
    Route::patch('/posts/delete/{id}', [PostController::class, 'remove']);
});
//Route::get('/users' , [UserController::class , 'show']);
//Route::get('/users/{id}' , [UserController::class , 'getid']);
