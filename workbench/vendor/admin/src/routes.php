<?php
//只有登陆用户才能访问
Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('/admin/login/index');	
});

Route::get('/admin/login/index', 'Vendor\Admin\LoginController@Index');
Route::post('/admin/login/index', 'Vendor\Admin\LoginController@Index');

Route::get('/admin/index/index', array('before' => 'auth', 'uses' => 'Vendor\Admin\IndexController@Index'));

Route::get('/admin/article/index', 'Vendor\Admin\ArticleController@Index');
Route::get('/admin/article/add', 'Vendor\Admin\ArticleController@add');
Route::post('/admin/article/add', 'Vendor\Admin\ArticleController@add');
Route::get('/admin/article/edit/{id}', 'Vendor\Admin\ArticleController@edit')->where('id','[0-9]+');
Route::post('/admin/article/edit/{id}', 'Vendor\Admin\ArticleController@edit')->where('id','[0-9]');
Route::post('/admin/article/del', 'Vendor\Admin\ArticleController@del');
Route::post('/admin/article/category_del', 'Vendor\Admin\ArticleController@CategoryDel');


Route::get('/admin/article/category_index', 'Vendor\Admin\ArticleController@CategoryIndex');

Route::post('/admin/home/message', 'Vendor\Admin\HomeController@message');
