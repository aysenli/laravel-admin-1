<?php
Route::get('/admin/index', 'Vendor\Admin\IndexController@Index');
Route::get('/admin/article/index', 'Vendor\Admin\ArticleController@Index');
Route::get('/admin/article/add', 'Vendor\Admin\ArticleController@add');
Route::post('/admin/article/add', 'Vendor\Admin\ArticleController@add');

Route::post('/admin/home/message', 'Vendor\Admin\HomeController@message');
