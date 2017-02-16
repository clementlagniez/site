<?php
 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 
Route::get('/', [
    'as' => 'hub',
    'uses' => 'PagesController@hub'
]);

Route::get('/index', [
    'as' => 'index',
    'uses' => 'PagesController@index'
]);
 
Route::resource('albums', 'AlbumsController'); 
Route::resource('artists', 'ArtistsController');
Route::resource('bands', 'BandsController');
Route::resource('books', 'BooksController');
Route::resource('characters', 'CharactersController');
Route::resource('cities', 'CitiesController');
Route::resource('countries', 'CountriesController');
Route::resource('genres', 'GenresController');
Route::resource('instruments', 'InstrumentsController');
Route::resource('movies', 'MoviesController');
Route::resource('nationalities', 'NationalitiesController');
Route::resource('songs', 'SongsController');
Route::resource('states', 'StatesController');
Route::resource('subgenres', 'SubgenresController');
Route::resource('subtypes', 'SubtypesController');
Route::resource('tracks', 'TracksController');
Route::resource('types', 'TypesController');