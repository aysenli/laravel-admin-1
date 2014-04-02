<?php
Route::get('/admin/index', 'Vendor\Admin\IndexController@Index');

Route::get('/admin/article/index', 'Vendor\Admin\ArticleController@Index');
Route::get('/admin/article/add', 'Vendor\Admin\ArticleController@add');
Route::post('/admin/article/add', 'Vendor\Admin\ArticleController@add');
Route::get('/admin/article/edit/{id}', 'Vendor\Admin\ArticleController@edit')->where('id','[0-9]+');
Route::post('/admin/article/edit/{id}', 'Vendor\Admin\ArticleController@edit')->where('id','[0-9]');
Route::post('/admin/article/del', 'Vendor\Admin\ArticleController@del');
Route::post('/admin/article/category_del', 'Vendor\Admin\ArticleController@CategoryDel');


Route::get('/admin/article/category_index', 'Vendor\Admin\ArticleController@CategoryIndex');

Route::post('/admin/home/message', 'Vendor\Admin\HomeController@message');
