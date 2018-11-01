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


Auth::routes();

//-----------------前台-----------------
Route::get('/', 'IndexController@index')->name('index');
Route::get('/index.html', 'IndexController@index')->name('index');
Route::get('/about.html', 'IndexController@about')->name('about');
Route::get('/services.html', 'IndexController@services')->name('services');
Route::get('/portfolio.html', 'IndexController@portfolio')->name('portfolio');
Route::get('/contact.html', 'IndexController@contact')->name('contact');
Route::get('/news.html', 'IndexController@news')->name('news');








//-----------------后台-----------------
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>'admin'],function () {
    //商品分类
    Route::group(['prefix' => 'category'],function () {
        //列表
        Route::get('index', 'CategoryController@index')->name('admin.category.index');
        //添加
        Route::get('create', 'CategoryController@create')->name('admin.category.create');
        //编辑
        Route::get('update/{id}', 'CategoryController@update')->name('admin.category.update');
        //保存
        Route::post('store', 'CategoryController@store')->name('admin.category.store');
        //状态修改
        Route::get('change/status', 'CategoryController@operateStatusAjax')->name('admin.category.change.status');
    });
    Route::group(['prefix' => 'article'],function () {
        //列表
        Route::get('index', 'ArticleController@index')->name('admin.article.index');
        Route::get('create', 'ArticleController@create')->name('admin.article.create');
        Route::post('store', 'ArticleController@store')->name('admin.article.store');
        Route::get('update', 'ArticleController@update')->name('admin.article.update');
        Route::get('change/status', 'ArticleController@changeStatus')->name('admin.article.change.status');
        Route::get('change/sort', 'ArticleController@changeSort')->name('admin.article.change.sort');
    });

});
