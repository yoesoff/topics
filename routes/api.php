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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('topics', 'TopicController');
Route::apiResource('votes', 'VoteController');

Route::get('/votes/my_votes/{username}', 'VoteController@my_votes');

Route::post('/topics/{id}/votes', 'TopicController@vote');
Route::get('/topics/{id}/votes', 'TopicController@getVote');
