<?php

Route::get("mediacenter/{media_id}", "vietanh\mediacenter\controllers\MediaController@show");
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::post("media", "vietanh\mediacenter\controllers\MediaController@store");
	Route::resource("mediacenter", "vietanh\mediacenter\controllers\MediaController");
});
Route::get("media/{media_id}", "vietanh\mediacenter\controllers\MediaController@show");


Route::group(['middleware' => ['api', 'auth:api']], function () {
	Route::resource("api/media", "vietanh\mediacenter\controllers\MediaController");
});
