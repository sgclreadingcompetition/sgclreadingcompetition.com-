<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Triggered by localhost/api/download/{name}, route to app/Http/Controllers/DownloadController.php getDownload() */
Route::get('/download/{name}',[
    'uses' => 'DownloadController@getDownload'
]);

Route::get('/question',[
    'uses' => 'QuestionController@getQuestions',
    'middleware' => ['auth:api']
]);

Route::post('/answer', [
    'uses' => 'AnswerController@postAnswer',
    'middleware' => ['auth:api']
]);

Route::get('/answer', [
    'uses' => 'AnswerController@getAnswer',
    'middleware' => ['auth:api']
]);

Route::post('/user/signup',[
    'uses' => 'UserController@signup'
]);

Route::post('/user/signin',[
    'uses' => 'UserController@signin'
]);

Route::post('/sendemail', [
    'uses' => 'EmailController@sendemail'
]);