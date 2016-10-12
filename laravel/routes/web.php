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

Route::get('/', function () {
    return view('welcome');
});
//网站后台路由配置

Route::get("/admin/login","Admin\LoginController@login");  //后台登录login
Route::post("/admin/doLogin","Admin\LoginController@doLogin");  //执行后台登录login
Route::get("/admin/logout","Admin\LoginController@logout");  //执行后台logout
Route::get("/admin/getCode/{tmp}","Admin\LoginController@getCode");  //加载验证码

//后台路由组
Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
		//商品尺寸规格库存路由
		Route::get('/good/size/{id}','Admin\GoodController@checkStyle');//新品添加尺规图库信息视图
		Route::post('/good/size/story','Admin\GoodController@addStyleSize');
		Route::post('/good/editsize','Admin\GoodController@updateSize');//执行编辑

		
		//商品详情路由
		Route::get('/good/detail/{id}','Admin\GoodController@createDetail');//显示添加详情视图
		Route::post('/good/detail','Admin\GoodController@storyDetail');//执行添加
        Route::get('/good/reg/{id}','Admin\GoodController@regGoods');//审核路由
        Route::post('/goodsreg/{id}','Admin\GoodController@doRegGoods');//审核路由
		
	
		Route::get("/","Admin\IndexController@index"); //后台首页

    	Route::resource("users", "Admin\UsersController");  //会员管理
    	
    	Route::resource("op_admin", "Admin\op_adminController");//后台用户管理
    	Route::resource("op_member_detail", "Admin\op_member_detailController");//后台会员管理
    	Route::resource("op_carousel", "Admin\op_carouselController");//后台轮播图管理

    	Route::resource("config", "Admin\ConfigController");  //后台配置管理
    	Route::resource("order", "Admin\OrderController");  //后台订单管理
    	Route::resource("link", "Admin\LinkController");  //后台友情链接管理
    	Route::resource("comment", "Admin\CommentController");  //后台商品评论管理

         Route::get('/type/gettype','Admin\TypeController@getType'); //后台分类ajax
        Route::resource('/type','Admin\TypeController'); //后台商品分类管理
        Route::resource('/good','Admin\GoodController'); //后台商品信息管理
       

    	Route::resource("address", "Admin\AddressController");  //后台会员地址管理
        Route::resource("/comment/reply", "Admin\CommentController@reply");  //后台商家回复管理
    	Route::get("/order/details/{id}", "Admin\OrderController@details");  //后台订单管理

		Route::resource("op_tab", "Admin\op_tabController");//后台板块管理

});

//首页路由；
Route::get('/', function () {
    return view('home.Index.index');
});
//产品首页路由
Route::get('/demo',function(){

	return view('home.Goods.index');
});

//品牌首页路由
Route::get('/demo1',function(){

	return view('home.News.index');
});
//用户首页
Route::get('/demo2',function(){

	return view('home.User.index');
});

//用户退出；

//Route::get('/logout',function(){
	//return view('home.User.logout');
//});

//体验店路由
Route::get('/demo3',function(){
	return view('home.Store.index');
});

//前台路由配置
Route::get("/","Home\IndexController@index");
//登录路由
Route::get("/home/login","Home\LoginController@login");  //前台登录login
Route::post("/home/doLogin","Home\LoginController@doLogin");  //执行前台登录login
Route::get("/home/logout","Home\LoginController@logout");  //执行前台logout

//注册路由
Route::get('/demo5',function(){
	return view('home.Add.index');
});

//配件路由
Route::get('/demo6',function(){
	return view('home.Part.index');
});

//积分商城路由
Route::get('/demo7',function(){
	return view('home.ScoreShop.index');
});
