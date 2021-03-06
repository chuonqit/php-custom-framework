<?php
use app\Services\Route;

// Home
Route::get('/', 'HomeController@index'); // trang chủ

// Category
Route::get('/danh-muc', 'CategoryController@index'); // danh mục
Route::get('/danh-muc/{cate}', 'CategoryController@details'); // danh mục chi tiet

// Product
Route::get('/{cate}/{brand}-{slug}', 'ProductController@details'); // trang chi tiết sản phẩm

// Admin
Route::get('/admin', 'Admin\DashboardController@index', 'admin|manager');

// Admin Options
Route::get('/admin/options', 'Admin\OptionController@index', 'admin');
Route::post('/admin/options', 'Admin\OptionController@index', 'admin');

// Admin product
Route::get('/admin/product', 'Admin\ProductController@index', 'admin|manager');
Route::get('/admin/product/variant', 'Admin\ProductController@variant', 'admin|manager');

Route::get('/admin/product/create', 'Admin\ProductController@create', 'admin|manager');
Route::post('/admin/product/create', 'Admin\ProductController@create', 'admin|manager');

Route::get('/admin/product/variant/create/{pid}', 'Admin\ProductController@variantCreate', 'admin|manager');
Route::post('/admin/product/variant/create/{pid}', 'Admin\ProductController@variantCreate', 'admin|manager');

Route::get('/admin/product/update/{id}', 'Admin\ProductController@update', 'admin|manager');
Route::post('/admin/product/update/{id}', 'Admin\ProductController@update', 'admin|manager');

Route::get('/admin/product/configuration/{pid}', 'Admin\ProductController@configuration', 'admin|manager');
Route::post('/admin/product/configuration/{pid}', 'Admin\ProductController@configuration', 'admin|manager');

Route::get('/admin/product/variant/update/{vid}/{pid}', 'Admin\ProductController@variantUpdate', 'admin|manager');
Route::post('/admin/product/variant/update/{vid}/{pid}', 'Admin\ProductController@variantUpdate', 'admin|manager');

Route::get('/admin/product/delete/{id}', 'Admin\ProductController@delete', 'admin|manager');
Route::get('/admin/product/variant/delete/{vid}/{pid}', 'Admin\ProductController@variantDelete', 'admin|manager');

// Auth
Route::auth();