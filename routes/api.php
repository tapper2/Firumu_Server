<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
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

   /**********************************
        AlbumsController
    ***********************************/
    Route::get('/getAllAlbumsById', [AlbumController::class, 'getAllAlbumsById']);
    Route::post('/addSingleAlbum', [AlbumController::class, 'addSingleAlbum']);
    Route::get('/getSingleAlbumById', [AlbumController::class, 'getSingleAlbumById']);
    Route::get('/getSelectListItems', [AlbumController::class, 'getSelectListItems']);
    Route::get('/deletePhoto', [AlbumController::class, 'deletePhoto']);
    Route::post('/addPhoto', [AlbumController::class, 'addPhoto']);

    
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

 
 
// });
