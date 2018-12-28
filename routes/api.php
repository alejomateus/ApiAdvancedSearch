<?php

use Illuminate\Http\Request;

Route::post('search', 'OffenderCrimeController@advancedsearch');
Route::get('cities', 'CityController@index');
Route::get('crimes', 'CrimeController@index');