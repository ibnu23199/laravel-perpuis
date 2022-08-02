<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

    //dashboard
    Route::get('dashboard', 'DashboardController@index');

    //category
    Route::get('kategory','CategoryController@index');
    Route::get('kategory/edit/{id}','CategoryController@edit');
    Route::post('kategory/add','CategoryController@store');
    Route::get('kategory/edit/{id}', 'CategoryController@edit');
    Route::put('kategory/edit/update/{id}', 'CategoryController@update');
    Route::delete('kategory/delete/{id}','CategoryController@delete');
    Route::get('category/book/{id}', 'CategoryController@postbyCategory');

    //book
    Route::get('book','BookController@index');
    Route::get('book/add','BookController@add');
    Route::post('book/add/store','BookController@store');
    Route::get('book/detail/{id}','BookController@detail');
    Route::get('book/details/{id}','BookController@details');
    Route::get('book/read/{id}', 'BookController@read');
    Route::get('book/edit/{id}','BookController@edit');
    Route::put('book/edit/update/{id}','BookController@update');
    Route::delete('book/delete/{id}','BookController@delete');
    Route::get('book/verify/{id}','BookController@verify');

    //about
    Route::get('about','AboutController@index');

    //sumbang
    Route::get('sumbang','SumbangController@index');
    Route::post('sumbang/add/store','SumbangController@store');

    //chat
    Route::get('chat','ChatController@index');

    //books
    Route::get('books','AllbookController@index');

    //serach
    Route::post('/autocomplete/search', 'AllbookController@livesearch')->name('autocomplete.search');
    Route::get('search', 'SearchController@search');

    //review
    Route::post('post/{post}/comment', 'BookController@addreview')->name('post.comment.add');

    //anggota

    Route::get('anggota', 'AnggotaController@index');
    Route::get('anggota/add', 'AnggotaController@add');
    Route::post('anggota/add/store', 'AnggotaController@store');
    Route::get('anggota/edit/{id}', 'AnggotaController@edit');
    Route::put('anggota/ubahprofile', 'AnggotaController@updateprofile');
    Route::put('anggota/ubahpassword', 'AnggotaController@updatepassword');
    Route::get('profile', 'AnggotaController@profile');
    Route::delete('anggota/delete/{id}','AnggotaController@delete');

    //review
    Route::get('review', 'ReviewController@index');
    Route::get('review/{id}','ReviewController@review');
    Route::delete('review/delete/{id}','ReviewController@delete');
    Route::post('balas/{post}/comment', 'ReviewController@store')->name('balas.review.store');



});

Route::get('/home', function () {
    return redirect('dashboard');
});

Route::get('/keluar', function () {
    Auth::logout();
    return redirect('/');
});
