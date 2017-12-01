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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/email', function () {
    return view('emails/reminder');
});

route::get('/lar',function(){
    return view('Index/index');
});
//添加页面
route::get('/data_add',function(){
    return view('Index/data_add');
});
//首页展示
route::get('/','IndexController@lar_get');

route::get('/lar_show','IndexController@lar_get');
//获取数据
route::get('/get_xml','IndexController@get_xml');

//route::get('/date_add','IndexController@date_add');

route::get("/test",'IndexController@index');

route::get("/get_data",'IndexController@get_data');

route::any("/get",'Data@index');

route::get('/get_info','IndexController@get_info');

route::any('/submit_do','IndexController@submit_do');

route::get('/t_email','Data@test');

Route::get('mail/sendReminderEmail/{id}','MailController@sendReminderEmail');