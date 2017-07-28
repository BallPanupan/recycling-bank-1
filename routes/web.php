<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','MemberC@login');
Route::get('/shop','ShopController@index');

Route::get('product','ProductController@product');
Route::get('product/type/{id_type}','ProductController@type');

Route::get('type1','ProductController@type1');/////////////////////////////////
Route::get('type2','ProductController@type2');/////////////////////////////////
Route::get('type3','ProductController@type3');/////////////////////////////////
Route::get('type4','ProductController@type4');/////////////////////////////////
Route::get('type5','ProductController@type5');/////////////////////////////////
Route::get('type6','ProductController@type6');/////////////////////////////////
Route::get('type7','ProductController@type7');/////////////////////////////////


Route::get('product/detail/{id}','ProductController@detail');

Route::get('basket','ProductController@basket');
Route::get('basket_insert/{id}','ProductController@basketInsert');

Route::get('/basketfn','ProductController@basketfn');


Route::post('basket_cal','ProductController@basketCal');

Route::get('basketx','ProductController@basketx');
Route::get('/basketx2','ProductController@basketx2');
Route::get('basketx/insert/{id}','ProductController@basketxInsert');
Route::post('basketx/cal','ProductController@basketxCal');


Route::post('order/insert','ProductController@orderInsert');

route::get('test', function(){
  $result=DB::select("select * from members");
  return $result;
});

Route::get('/hello2','MemberC@hello');
Route::get('/trang','MemberC@trang');
Route::get('/login','MemberC@login');
Route::post('/login','MemberC@login2');
route::get('/login2','MemberC@index');
route::post('/login2','MemberC@login2');
route::get('/homeuser','MemberC@homeuser2');
route::get('/Done','MemberC@Done_x');
route::get('/price_list','MemberC@price_list');


route::get('/register','MemberC@register');
route::post('/register2','MemberC@register2');

route::get('/registerx1','MemberC@registerx1');
route::post('/registerx2','MemberC@registerx2');


route::get('/member','MemberC@index');
route::get('member/all','MemberC@all');
route::get('/userhome','MemberC@home');
route::get('/logout','MemberC@logout');


route::get('member/show/{id}','MemberC@show');
route::get('member/insert','MemberC@insert');
route::post('member/insert2','MemberC@insert2');
route::get('member/delete/{id}','MemberC@delete');
route::get('member/update/{id}','MemberC@update');
route::post('member/update2','MemberC@update2');

Route::get('admin','AdminController@index');
Route::post('admin/login','AdminController@login');

Route::group(['middleware'=>'CheckAdmin'],function(){
Route::get('admin/home','AdminController@home');
Route::get('admin/home2','AdminController@home2');

Route::get('admin/logout','AdminController@logout');

Route::get('admin/product','AdminProductController@index');
Route::get('admin/product/insert','AdminProductController@insert');
Route::post('admin/product/insert2','AdminProductController@insert2');
Route::get('admin/product/update/{id}','AdminProductController@update');
Route::post('admin/product/update2','AdminProductController@update2');
Route::get('admin/product/delete/{id}','AdminProductController@delete');

Route::get('admin/type/update/{id}','AdminTypeController@update');
Route::post('admin/type/update2','AdminTypeController@update2');

Route::get('admin/type/insert','AdmintypeController@insert');
Route::post('admin/type/insert2','AdmintypeController@insert2');

Route::get('admin/type/delete/{id}','AdmintypeController@delete');

});

Route::get('admin/type','AdminTypeController@type');

Route::get('admin/order','AdminOrderController@index');
Route::get('admin/order/delete/{id}','AdminOrderController@delete');
Route::get('admin/order/view/{id}','AdminOrderController@view');
