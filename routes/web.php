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

Route::get('/',[

    'uses'=>'frontcontroller@index',
    'as'=>'/'

    ]);


Route::get('/add_district',[

    'uses'=>'admincontroller@add_district',
    'as'=>'add_district'

]);

Route::post('/district_add',[

    'uses'=>'admincontroller@district_add',
    'as'=>'district_add'

]);




Route::get('/joinhere',[

    'uses'=>'frontcontroller@joinhere',
    'as'=>'joinhere'

]);

Route::get('/addblood_group',[

    'uses'=>'admincontroller@addbloodgroup',
    'as'=>'addblood_group'

]);




Route::post('/grouptodatabse',[

    'uses'=>'admincontroller@grouptodatabse',
    'as'=>'grouptodatabse'

]);
Route::post('/joindonor',[

    'uses'=>'frontcontroller@joindonor',
    'as'=>'joindonor'

]);



Route::get('/findhere',[

    'uses'=>'frontcontroller@findhere',
    'as'=>'findhere'

]);



Route::get('/districtselect/{id}',[

    'uses'=>'frontcontroller@districtselect',
    'as'=>'districtselect'

]);




Route::get('/news',[

    'uses'=>'frontcontroller@news',
    'as'=>'news'

]);


Route::get('/shownewsadd',[

    'uses'=>'admincontroller@shownewsadd',
    'as'=>'shownewsadd'

]);



Route::post('/addnews',[

    'uses'=>'admincontroller@addnews',
    'as'=>'addnews'

]);

Route::get('/managenews',[

    'uses'=>'admincontroller@managenews',
    'as'=>'managenews'

]);


Route::get('/editnews/{id}',[

    'uses'=>'admincontroller@editnews',
    'as'=>'editnews'

]);

Route::post('/updatenews',[

    'uses'=>'admincontroller@updatenews',
    'as'=>'updatenews'

]);


Route::get('/deletenews/{id}',[

    'uses'=>'admincontroller@deletenews',
    'as'=>'deletenews'

]);


Route::post('/bloodrequest',[

    'uses'=>'admincontroller@bloodrequest',
    'as'=>'bloodrequest'

]);



Route::get('/managerequest',[

    'uses'=>'admincontroller@managerequest',
    'as'=>'managerequest'

]);





Route::get('/whocangiveblood',[

    'uses'=>'frontcontroller@whocangiveblood',
    'as'=>'whocangiveblood'

]);





Route::get('/whydonateblood',[

    'uses'=>'frontcontroller@whydonateblood',
    'as'=>'whydonateblood'

]);



Route::get('/tipsfordonation',[

    'uses'=>'frontcontroller@tipsfordonation',
    'as'=>'tipsfordonation'

]);



Route::get('/afterdonation',[

    'uses'=>'frontcontroller@afterdonation',
    'as'=>'afterdonation'

]);



Route::get('/getinvolved',[

    'uses'=>'frontcontroller@getinvolved',
    'as'=>'getinvolved'

]);


Route::get('/contact',[

    'uses'=>'frontcontroller@contact',
    'as'=>'contact'

]);

Route::post('/submitcontactmessage',[

    'uses'=>'admincontroller@submitcontactmessage',
    'as'=>'submitcontactmessage'

]);

Route::get('/viewmessage',[

    'uses'=>'admincontroller@viewmessage',
    'as'=>'viewmessage'

]);


Route::get('/subscribe',[

    'uses'=>'admincontroller@subscribe',
    'as'=>'subscribe'

]);


Route::post('/savesubscribe',[

    'uses'=>'admincontroller@savesubscribe',
    'as'=>'savesubscribe'

]);

Route::get('/typesofblooddonations',[

    'uses'=>'frontcontroller@typesofblooddonations',
    'as'=>'typesofblooddonations'

]);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
