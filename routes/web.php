<?php




/*
|-----------------------------------------------------------------------------------------
| WEB ROUTES
|-----------------------------------------------------------------------------------------
| Here is where you can register web routes for your application.  These routes are loaded
| by the RouteServiceProvider within a group which contains the "web" middleware group.
| Now create something great!
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'RedirectController@home');
    Route::get('/skills', 'RedirectController@skills');
    Route::get('/contact', 'RedirectController@contact');
    Route::get('/portfolio', 'RedirectController@portfolio');
    Route::get('/mit', 'RedirectController@mit');
    Route::get('/privacy', 'RedirectController@privacy');
    Route::get('/terms', 'RedirectController@terms');
    Route::get('/test', 'RedirectController@test');
    Route::get('/dashboard', 'RedirectController@dashboard');
    Route::get('/comments', 'RedirectController@comments');
    Route::get('/notes', 'RedirectController@notes');


    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();




/*
|-----------------------------------------------------------------------------------------
| APPLICATION ROUTES
|-----------------------------------------------------------------------------------------
| This route group applies the "web" middleware group to every route it contains.  The
| "web" middleware group is defined in your HTTP kernel and includes session state, CSRF
| protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::post('comment', 'CommentController@submit');
    Route::post('notes', 'NotesController@submit');
});

