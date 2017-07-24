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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account');
Route::get('/news', 'News\NewsController@index');

Route::get('/gallery','Gallery\GalleryController@index');


Route::get('/contact','Contact\ContactController@index');

Route::get('/messages', function(){
    return view('messages.messages',['requestedView' => false,'success' => '','bgColor' => '']);
});

//
Route::post('/submitContact','Contact\ContactController@updateContactDetails');


Route::post('/addNews','News\NewsController@addNews');

//update News
Route::post('/updateNews','News\NewsController@updateNews');

//delete News
Route::get('/news/delete/{id}','News\NewsController@deleteNews');



//

Route::post('/addGallery','Gallery\GalleryController@addGallery');

Route::post('/updateGallery','Gallery\GalleryController@updateGallery');

Route::get('/gallery/delete/{id}','Gallery\GalleryController@deleteGallery');

Route::post('/gallery/addCategory','Gallery\GalleryController@addCategory');



//register

Route::get('addUserAdmin','Auth\addAdminController@index')->name('addUserAdmin');

Route::post('addUserAdmin','Auth\addAdminController@add');



//messages

Route::get('viewMessage/{id}','Messages\MessagesController@viewMessage')->name('viewMessage');

Route::get('deleteMessage/{id}','Messages\MessagesController@deleteMessage')->name('deleteMessage');


