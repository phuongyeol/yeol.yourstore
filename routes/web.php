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
        // --------------------STORE----------------------------------------
	Route::get('/', function () {
	    return view('index'); 
	});
        
	Route::get('/master', function () {
	    return view('layouts.master');
	});

        Route::get('/product-detail', function(){
                return view('store.product-detail');
        });

        Route::get('/blog', function(){
                return view('store.blog');
        });

        Route::get('/cropit', 'UserController@index2');
        Route::post('/cropit', 'UserController@store2');
        //----------------------ADMIN--------------------------------------
	Route::prefix('admin')->group(function(){

		// Auth::routes();

        	Route::get('/', 'ProductController@index')->name('home');
        	Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
                Route::post('login', 'Auth\LoginController@login');
                Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

                // Registration Routes...
                Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
                Route::post('register', 'Auth\RegisterController@register');

                // Password Reset Routes...
                Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.request');
                Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.email');
                Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.reset');
                Route::post('password/reset', 'Auth\ResetPasswordController@reset');

                
                // ===============Product Management===============
                Route::group(['prefix'=>'product'],function(){
                	Route::get('/','ProductController@index')->name('product.index');
                	Route::get('/get-list-product','ProductController@getListProduct')->name('product.getlist');
                        Route::post('/image-view','ProductController@store');

                	Route::post('/store-product','ProductController@storeProduct')->name('product.store');
                        Route::get('/show/{id}','ProductController@show')->name('product.detail');
                        Route::get('{id_product}/product-detail','ProductController@getListProductDetail')->name('product.getListProductDetail');
                        Route::get('edit/{id}','ProductController@edit')->name('product.edit');
                        Route::put('update/{id}','ProductController@update')->name('product.update');
                        Route::delete('delete/{id}','ProductController@destroy')->name('product.delete');

                        // ============PRODUCT DETAIL==============//
                        Route::post('/image-view-details', 'ProductDetailController@storePD');
                        Route::get('/slide/{id}','ProductDetailController@slideshow')->name('pr_detail.slideshow');
                        
                        Route::post('{id_product}/store-product-detail', 'ProductDetailController@storeDetailProduct')->name('pr_detail.store');
                        Route::delete('delete-product-detail/{id}','ProductDetailController@destroyDetail')->name('pr_detail.delete');

                });
                
                // ===============User Management===============
                Route::group(['prefix'=>'user'],function(){
                        Route::get('/','UserController@index')->name('user.index');
                        Route::get('/get-list-user','UserController@getListUser')->name('user.getlist');
                        Route::get('/show/{id}','UserController@detail')->name('user.detail');
                        Route::post('/store','UserController@store')->name('user.store');

                        // Route::get('edit/{id}','UserController@edit')->name('user.edit');
                        // Route::put('update/{id}','UserController@update')->name('user.update');
                        Route::delete('delete/{id}','UserController@destroy')->name('user.delete');


                });

        });


	
