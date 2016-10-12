// JavaScript Document
//验证登录
$(function(){
	var userName = getCookie("STORE_USERNAME");
	var opposid = getCookie("OPPOSID");
	if (userName && opposid) {
		$("#account_logged").css("display", "block");
		$("#account_logged span").html(userName);
		$("#userId").val(userName);
	} else {
		$("#account_info").css("display", "block");
		$("#userId").val("");
	}
	var modelName = getCookie("model_name"); 
	modelName && $("#phone_type").val(modelName);
	
	$.post(baseHost+"/user/verify.json", function(response){
		response = (typeof response == "object") ? response : $.parseJSON(response);
		if (response.ret == 0 && response.logged && response.logged == 1) {
			$("#userId").val(response.userName);
			$("#account_info").css("display", "none");
			$("#account_logged").css("display", "block");
			$("#account_logged span").html(response.userName);
		} else {
			$("#account_info").css("display", "block");
			$("#account_logged").css("display", "none");
		}
	});
	$("#account_logout").click(function(){
		$.post(baseHost+"/user/logout.json", function(result){
			result = (typeof result == "object") ? result : $.parseJSON(result);
			if (result.ret === 0) {
				$("#account_info").css("display", "block");
				$("#account_logged").css("display", "none");
				$("#userId").val("");
				window.location.reload();
			}
		});
	});
	$(".phone_type dl dd").click(function(){
		setCookie("model_name", $(this).html());
		redirectByPlatform($(this).attr("tid"));
	});
	
	//搜索框的提示信息变化
	$("#search_text").focus(function(){
		if($(this).val()=="请输入关键字"){
			$(this).val("");
		}
	});
	$("#search_text").blur(function(){
		if($(this).val()==""){
			$(this).val("请输入关键字");
		}
	});
	$("#header_search").click(function(){
		var keyword = encodeURIComponent($.trim($("#search_text").val()));
		var from = $.trim($("#search_from").val());
		if (keyword && keyword != "请输入关键字") {
			window.location.href=baseHost+"/search/do.html?keyword="+keyword+"&nav="+from;
		}
	});
	/*$("#search_text").keydown(function(event){
		var e=event || window.event ||arguments.callee.caller.arguments[0];
		var keyword = encodeURIComponent($.trim($("#search_text").val()));
		var from = $.trim($("#search_from").val());
		if((e.keyCode ==13|| e.which==13) && keyword && keyword != "请输入关键字"){
			window.location.href=baseHost+"/search/do.html?keyword="+keyword+"&nav="+from;
		}
	});
	$("#search_text").keypress(function(event){
		var e=event || window.event ||arguments.callee.caller.arguments[0];
		var keyword = encodeURIComponent($.trim($("#search_text").val()));
		var from = $.trim($("#search_from").val());
		if((e.keyCode ==13|| e.which==13) && keyword && keyword != "请输入关键字"){
			window.location.href=baseHost+"/search/do.html?keyword="+keyword+"&nav="+from;
		}
	});*/
	$("#search_text2").focus(function(){
		if($(this).val()=="您可以换个词，继续搜索哦"){
				$(this).val("");
			}
	});
	$("#search_text2").blur(function(){
		if($(this).val()==""){
				$(this).val("您可以换个词，继续搜索哦");
			}
	});
	$("#re_search").click(function(){
		var keyword = encodeURIComponent($.trim($("#search_text2").val()));
		var from = $.trim($("#search_from").val());
		if (keyword && keyword != "您可以换个词，继续搜索哦") {
			window.location.href=baseHost+"/search/do.html?keyword="+keyword+"&nav="+from;
		}
	});
});

// 图片轮播广告
(function($) {
	$.fn.Slider = function(options) {
		var setting = {
			"bigImg"  : "",
			"num"     : "",
			"timeOut" : 5000
		};
		var opts = $.extend({},setting, options);
 
		var runIndex = 0;
		var adWidth = $(opts.bigImg + " li").width();
		var timer;
		
		var _showImg = function(index) {
			var obj_img = $(opts.bigImg).find("img").eq(index);
			if(!obj_img.attr("src") || obj_img.attr("src")==""){
				window.setTimeout(function(){obj_img.attr("src",obj_img.attr("data-url"));},0);
			}
			$(opts.bigImg).stop(true, false).animate({opacity : 0.3}, 100, "swing", function(){
				$(this).scrollLeft(adWidth * index).animate({opacity : 1.0}, 300, "swing");
			 }); 


			$(opts.num + " li").removeClass("nownav").eq(index).addClass("nownav");
		};
 
		var _auto = function() {
			timer = setTimeout(function() {
				runIndex++;
				if (runIndex >= $(opts.bigImg + " li").length) {
					runIndex = 0;
				}
				_showImg(runIndex);
				_auto();
			},opts.timeOut);
		};
 
		var _stop = function() {
			clearTimeout(timer);
		};
 
		return this.each(function() {
			_auto();
			$(opts.bigImg).hover(function() {
				_stop();
			},function() {
				_auto();
			});
 
			$(opts.num + " li").hover(function() {
				_stop();
				runIndex = $(opts.num + " li").index(this);
				_showImg(runIndex);
			},function() {
				_auto();
			}).eq(0).hover().addClass("nownav");
		});
	};
})(jQuery);	

//执行图片轮播等操作
$(".av").Slider({
	"bigImg"  : ".av_left",
	"num"     : ".img_dot",
	"timeOut" : 5000
});
// 热门应用游戏等轮播
(function($) {
	$.fn.Slider_hot = function(options) {
		var setting = {
			"bigImg"  : "",
			"num"     : "",
			"timeOut" : 5000
		};
		var opts = $.extend({},setting, options);
 
		var runIndex = 0;
		var adWidth = $(opts.bigImg + " li").width();
		var timer;
		
		var _showImg = function(index) {
			var obj_img = $(opts.bigImg).find("img").eq(index);
			if(!obj_img.attr("src") || obj_img.attr("src")==""){
				window.setTimeout(function(){obj_img.attr("src",obj_img.attr("data-url"));},0);
			}
			$(opts.bigImg).stop(true, false).animate({opacity : 0.3}, 1, "swing", function(){
				$(this).scrollLeft(adWidth * index).animate({opacity : 1.0}, 3, "swing");
			 }); 


			$(opts.num + " li").removeClass("nownav").eq(index).addClass("nownav");
		};
 
		var _auto = function() {
			timer = setTimeout(function() {
				runIndex++;
				if (runIndex >= $(opts.bigImg + " li").length) {
					runIndex = 0;
				}
				_showImg(runIndex);
				_auto();
			},opts.timeOut);
		};
 
		var _stop = function() {
			clearTimeout(timer);
		};
 
		return this.each(function() {
			_auto();
			$(opts.bigImg).hover(function() {
				_stop();
			},function() {
				_auto();
			});
 
			$(opts.num + " li").hover(function() {
				_stop();
				runIndex = $(opts.num + " li").index(this);
				_showImg(runIndex);
			},function() {
				_auto();
			}).eq(0).hover().addClass("nownav");
		});
	};
})(jQuery);	
//热门应用软件滑动

$(".left").Slider_hot({
	"bigImg"  : ".hot_soft_container",
	"num"     : ".img_dot2",
	"timeOut" : 10000
});

$(".left").Slider_hot({
	"bigImg"  : ".hot_soft_container2",
	"num"     : ".img_dot3",
	"timeOut" : 10000
});

//编辑吐血推荐hover效果
if($(".soft_tuijian")){
		$(".soft_tuijian:gt(4)").find(".soft_hover").css("top","-40px");
}

$(".soft_tuijian").hover(
		function(){
				$(this).find(".soft_hover").css("display","block").css("z-index","2");
				$(this).css("z-index","222");
			},
		function(){
				$(this).find(".soft_hover").css("display","none").css("z-index","");
				$(this).css("z-index","");
			}
	);
	
//热门应用hover效果
$(".hot_content .h_soft").hover(
	function(){
			$(this).find(".h_soft_bg").css("background","url("+styleHost+"/images/hot_soft_hover_bg.png)").css("height","142px");
			$(this).find("div").find("div").css("display","none");
			$(this).find(".down").css("display","block");
			if($(this).find(".icon_hot"))
			{
				$(this).find(".icon_hot").css("display","block");
				}
			if($(this).find(".icon_new"))
			{
				$(this).find(".icon_new").css("display","block");
				}
		},
	function(){
			$(this).find(".h_soft_bg").css("background","none").css("height","");
			$(this).find(".h_soft_bg").find("div").eq(0).css("display","block");
			$(this).find(".down").css("display","none");
			if($(this).find(".icon_hot"))
			{
				$(this).find(".icon_hot").css("display","none");
				}
			if($(this).find(".icon_new"))
			{
				$(this).find(".icon_new").css("display","none");
				}		
		}
);

//排行榜tab切换
$(".paihang_tab li").eq(0).mouseover(function(){
$("#top_app").css("display","block");
$("#top_game").css("display","none");
$(this).find("a").addClass("tab_click");
$(".paihang_tab li").eq(1).find("a").removeClass("tab_click");
});
$(".paihang_tab li").eq(1).mouseover(function(){
$("#top_app").css("display","none");
$("#top_game").css("display","block");
$(this).find("a").addClass("tab_click");
$(".paihang_tab li").eq(0).find("a").removeClass("tab_click");
}); 

//排行榜hover效果
$(".paihang_list li").hover(
			function(){
				$(this).find(".pl_info").find("p").css("display","none");
				$(this).find(".pl_info").find("div").css("display","none");
				$(this).find(".pl_info").css("padding-top","5px");
				$(this).find(".pl_info").find(".pl_down").css("display","block").css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
				$(this).find(".pl_down").hover(function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
							},function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
					});
			},
			function(){
				$(this).find(".pl_info").find("p").css("display","block");
				$(this).find(".pl_info").find("div").css("display","block");
				$(this).find(".pl_info").css("padding-top","0");
				$(this).find(".pl_info").find(".pl_down").css("display","none").css("background","none");	
			}	
		);






//热门推荐图标模式hover效果
$(".li_tubiao").hover(
		function(){
			$(this).find(".down_num").css("display","none");
			$(this).find(".up_time").css("display","none");
			$(this).find(".down").css("display","block").css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
			$(this).find(".down").hover(function(){
											$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
										},function(){
											$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
										});
			$(this).addClass("li_tubiao_bg");
			if($(this).find(".recommend_hot"))
			{
				$(this).find(".recommend_hot").css("display","block");
				}
			if($(this).find(".recommend_new"))
			{
				$(this).find(".recommend_new").css("display","block");
				}
		},
		function(){
			$(this).find(".down_num").css("display","block");
			$(this).find(".up_time").css("display","block");
			$(this).find(".down").css("display","none");
			$(this).removeClass("li_tubiao_bg");	
			if($(this).find(".recommend_hot"))
			{
				$(this).find(".recommend_hot").css("display","none");
				}
			if($(this).find(".recommend_new"))
			{
				$(this).find(".recommend_new").css("display","none");
				}		
		
		});


//主题榜hover效果
$(".li_theme").each(function(){
		$(this).hover(
			function(){
				$(this).find(".down_num").css("display","none");
				$(this).find(".up_time").css("display","none");
				$(this).find(".down").css("display","block").css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
				$(this).find(".down").hover(function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
							},function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
							});
				},
			function(){
				$(this).find(".down_num").css("display","block");
				$(this).find(".up_time").css("display","block");
				$(this).find(".down").css("display","none").css("background","none");	
				}
		);
	});


//菜单中主题的子菜单显示效果
if($(".menu_theme").children("a").hasClass("click2")){
	$(".menu_theme").hover(
		function(){
			$(this).children("a").removeClass().css("background","none");
			$(this).find(".submenu").css("display","block");				
			},
		function(){
			$(this).children("a").addClass("click2").css("background","url("+styleHost+"/images/menu_select_bg.png) no-repeat");
			$(this).find(".submenu").css("display","none");				
			}
	);
}
else{
	$(".menu_theme").hover(
		function(){
			//$(this).children("a").css("margin-left","7px");
			$(this).find(".submenu").css("display","block");				
			},
		function(){
			//$(this).children("a").css("margin-left","7px");
			$(this).find(".submenu").css("display","none");				
			}
	);		
}

//应用游戏子菜单显示效果
$(".menu_soft").each(function(){
		if($(this).children("a").hasClass("click2")){
			$(this).hover(
				function(){
					$(this).children("a").removeClass().css("background","none");
					$(this).find(".submenu").css("display","block");				
					},
				function(){
					$(this).children("a").addClass("click2").css("background","url("+styleHost+"/images/menu_select_bg.png) no-repeat");
					$(this).find(".submenu").css("display","none");				
					}
			);
		}
		else{
			$(this).hover(
				function(){
					//$(this).children("a").css("background","none");
					$(this).find(".submenu").css("display","block");				
					},
				function(){
					//$(this).children("a").css("background","url(images/menu_select_bg.png)");
					$(this).find(".submenu").css("display","none");				
					}
			);		
		}	
	});
	

//详情页面相关推荐hover效果
if($(".soft_about")){
		$(".li_about").hover(
			function(){
				$(this).find(".li_about_middle").find("div").css("display","none");
				$(this).find(".li_about_middle").find("p").css("display","none");
				$(this).find(".li_about_middle").find(".down").css("display","block").css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");		
				$(this).find(".li_about_middle").find(".down").hover(function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
							},function(){
								$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
							});
				
				},
			function(){
				$(this).find(".li_about_middle").find("div").css("display","block");
				$(this).find(".li_about_middle").find("p").css("display","block");
				$(this).find(".li_about_middle").find(".down").css("display","none").css("background","none");				}
			);
	}
if($(".li_about")){
		$(".li_about").last().css("border","none");
	}

// 详情页面应用描述的收起和展开等操作
	$(document).ready(function(){
		if($("#soft_description").val()){
			show_little();
		}
	});
	var hotel_content=$("#soft_description").val();
	function show_all(){
		$(".soft_word p").html(hotel_content);      //   html()里面插入数据库里的完整数据
		$(".show_little").css("display","inline");
		$(".show_all").css("display","none");
		}
	function show_little(){
		var content=hotel_content;
		if(content.length>100){
				content=content.substring(0,100)+"...";
				$(".soft_word p").html(content);
				$(".show_little").css("display","none");
				$(".show_all").css("display","inline");
			}
		else{
				$(".soft_word p").html(content);
				$(".show_all").css("display","none");
				$(".show_little").css("display","none");
			}
		}

//应用详情图片显示
	var len=$(".img_list li").length;
	var width=201*len;
	$(".img_list").css("width",width);
	var left=0;
	if(len<=3){
		$("#pre_img").css("background","none");
		$("#next_img").css("background","none");
	}
	function next(){
		var obj=$(".img_list");
		if(left<len-3){
				obj.animate({
						marginLeft:'-=201px'
						});
				left=left+1;
			}
		$("#pre_img").removeClass("pre_img_end").addClass("pre_img");
		$("#pre_img").css("background","url("+styleHost+"/images/btns_bg.png) 0px 0 no-repeat").css("cursor","pointer");
		if(left==len-3){
			$("#next_img").removeClass().addClass("next_img_end");
			$("#next_img").css("background","url("+styleHost+"/images/btns_bg.png) -80px 0 no-repeat").css("cursor","auto");
			}
		}
	function pre(){
		var obj=$(".img_list");
		if(left>0){
			obj.animate({
					marginLeft:'+=201px'
					});
					left=left-1;
				}
		$("#next_img").removeClass("next_img_end").addClass("next_img");	
		$("#next_img").css("background","url("+styleHost+"/images/btns_bg.png) -16px 0 no-repeat").css("cursor","pointer");;		
		if(left==0){
			$("#pre_img").removeClass().addClass("pre_img_end");
			$("#pre_img").css("background","url("+styleHost+"/images/btns_bg.png) -64px 0 no-repeat").css("cursor","auto");
			}
		
		}
	
//评论评分
$(".star_nums i").each(function(index, element) {
			$(this).hover(
					function(){    //星星的hover效果
							for(var i=0;i<index+1;i++){
									$(".star_nums i").eq(i).addClass("light");
								}
							switch(index){
									case 0: $("#evaluate").html("糟糕"); break;
									case 1: $("#evaluate").html("较差"); break;
									case 2: $("#evaluate").html("一般"); break;
									case 3: $("#evaluate").html("不错") ;break;
									case 4: $("#evaluate").html("力荐"); break;
									default:$("#evaluate").html("(点击星星可评分)"); break;
								}
						},
					function(){
							
							if($("#soft_grade").val()){
								$(".light").removeClass();
								for(var j=0;j<Number($("#soft_grade").val())+1;j++){
									$(".star_nums i").eq(j).addClass("light");
									}
								switch(Number($("#soft_grade").val())){
									case 0: $("#evaluate").html("糟糕"); break;
									case 1: $("#evaluate").html("较差"); break;
									case 2: $("#evaluate").html("一般"); break;
									case 3: $("#evaluate").html("不错") ;break;
									case 4: $("#evaluate").html("力荐"); break;
									default:$("#evaluate").html("(点击星星可评分)"); break;
								}
							}
							else{
								$(".light").removeClass();
								$("#evaluate").html("");
								}
						}
				);
				
				$(this).click(function(){    //星星点击后的效果传值到id为soft_grade的input的value中
						$("#soft_grade").val(index);
						switch(index){
							case 0: $("#evaluate").html("糟糕"); break;
							case 1: $("#evaluate").html("较差"); break;
							case 2: $("#evaluate").html("一般"); break;
							case 3: $("#evaluate").html("不错") ;break;
							case 4: $("#evaluate").html("力荐"); break;
							default:$("#evaluate").html("(点击星星可评分)"); break;
						}
					});
});

//搜索无结果推荐热门用于的效果
$(".li_hot").hover(
		function(){
			$(this).find("div").css("display","none");
			$(this).find(".down").css("display","block").css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
			$(this).find(".down").hover(function(){
											$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -55px no-repeat");
										},function(){
											$(this).css("background","url("+styleHost+"/images/btns_bg.png) 0 -28px no-repeat");
										});
		},
		function(){
			$(this).find("div").css("display","block");
			$(this).find(".down").css("display","none").css("background","none");				
		});

//首页榜单去掉最末的虚线
if($("#top_app")){
		$("#top_app").find("li").last().css("background","none");
	}
if($("#top_game")){
		$("#top_game").find("li").last().css("background","none");
	}

var nms = new nmWebStatistic(2);
		
//快速下载
function myDownload(productId, from) {
	window.location.href = baseHost+"/product/download.html?id="+productId+"&from="+from;
	var sourceCode = 0, position = 0, p;
	if (from && (p = from.indexOf("_")) != -1) {
		sourceCode = from.substring(0, p);
		position = from.substring(p+1, from.length);
	}
	nms.download(sourceCode, productId, position);
	//window.location.href = baseHost+"/product/download.html?id="+productId+"&from="+from;
}

//详情页下载
function detailInfoDownload(productId) {
	var arr = window.location.href.match(/from=([0-9_]+)/i);
	var from = arr != null ? arr[1] : '0_0';
	var sourceCode = 0, position = 0, p;
	if (from && (p = from.indexOf("_")) != -1) {
		sourceCode = from.substring(0, p);
		position = from.substring(p+1, from.length);
	}
	nms.download(sourceCode, productId, position);
	window.location.href = baseHost+"/product/download.html?id="+productId+"&from="+from;
}

function getCookie(name) {
	var arr = document.cookie.match(new RegExp(name+"\\s*=\\s*([^;]*)(\\s*;|$)"));
	return arr != null ? decodeURI(arr[1]) : null;
}

function setCookie(name, value, expHours)
{
    var exp = new Date();
    var cookie = name + "="+ encodeURI(value) + ";path=/;";
    
    if (expHours && expHours > 0) {
    	exp.setTime(exp.getTime() + expHours*3600*1000);
    	cookie += "expires=" + exp.toGMTString();
    }
	
    document.cookie = cookie;
}


function redirectByPlatform(platform) {
	var urlPathName = window.location.pathname;
	var rewritePathName = "";
	var res=urlPathName.match(/[a-z](\/(\d{1,3}))\/|[a-z](\/(\d+))\./);
	
	if (res) {
		var oldPlatform = typeof res[2] == "undefined" ? res[4] : res[2];
		var matchstr = typeof res[1] == "undefined" ? res[3] : res[1];
		if (oldPlatform == platform)
			return;
		rewritePathName = platform > 0 ? urlPathName.replace(new RegExp(oldPlatform), platform) : urlPathName.replace(new RegExp(matchstr), "");
	} else {
		if (platform == 0)
			return;
		rewritePathName = urlPathName=="/" ? "/index/"+platform+".html" : urlPathName.replace(/(^\/[^\/.]*)(.*)?/, "$1/"+platform+"$2");
	}
	
	window.location.href = baseHost+rewritePathName+window.location.search;
}

//首页头部机型选择
$(".type_box").hover(
	function(){
			$(".phone_type").css("display","block");
	
			$(".phone_type").find("dd").hover(function(){
					$(this).css("background","#9ed4be");
				},
				function(){
					$(this).css("background","none");
					}
				);
			$(".phone_type").find("dd").click(function(){
					$("#phone_type").val($(this).html());
					$(".phone_type").css("display","none");
				});
		},
	function(){
			$(".phone_type").css("display","none");	
		}
	
	);

//分页居中代码
if($("#yw0")){
	var n=$("#yw0").find("li").length;
	var w=66*2+(n-2)*34+5*n;
	$("#yw0").css("width",w);
}
//返回顶部
$(".back_top").click(function(){
	var isIE6= navigator.appVersion.indexOf("MSIE 6")>-1; 
	if(isIE6){
		$('html,body').scrollTop(0);
		$(".back_top").css("display","none");
	}
	else{
		$('html,body').animate({scrollTop: '0px'}, 800,function(){
			$(".back_top").css("display","none");
		}); 
}	
	return false;
});

var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x   
if (document.attachEvent) //if IE (and Opera depending on user setting)  
    document.attachEvent("on"+mousewheelevt, function(e){
	var t=document.body.scrollTop+document.documentElement.scrollTop;
		if(t==0){
				$(".back_top").css("display","none");
			}
		else{
				$(".back_top").css("display","block");	
			}
	});
else if (document.addEventListener) //WC3 browsers  
    document.addEventListener(mousewheelevt, function(e){
	var t=document.body.scrollTop+document.documentElement.scrollTop;
		if(t==0){
				$(".back_top").css("display","none");
			}
		else{
				$(".back_top").css("display","block");	
			}
	}, false); 

function searchKeyUp() {
	var keyword = $.trim($("#search_text").val());
	if (keyword == "请输入关键字" || keyword.length == 0) {
		$("#search_clew").css("display", "none");
		return;
	}
	$.ajax({
		type: "POST",
		url: baseHost+"/search/tips.json",
		data: "keyword="+encodeURIComponent(keyword),
		success: function(data){
            var str = '<ul id="search_clew_ul" class="search_clew_ul">';
            for (var i = 0; i < data.result.length; i++) {
                str += '<li id="list_' + i + '">' + data.result[i].name + '</li>';
            }
            str += '</ul>';
            
            if (data.result.length == 0) {
                $("#search_clew").css("display", "none");
            }
            else {
                $("#search_clew").html(str).css("display", "block");
            }
		}
	});
}

var flag = 0;
$("#search_text").keyup(function(event){
	var e = event || window.event;
	var code = e.keyCode || e.which;
	var c= String.fromCharCode(code);
    var isWordCharacter = c.match(/\w/);
    var isBackspaceOrDelete = (code == 8 || code == 46);

    if (code == 13) {
    	if ($(".search_select").length > 0) {
    		$(this).val($("#search_clew_ul li").eq(flag).html());
    	}
    	var keyword = $.trim($(this).val());
    	var from = $.trim($("#search_from").val());
    	
    	if (keyword && keyword != "请输入关键字") {
    		window.location.href=baseHost+"/search/do.html?keyword="+encodeURIComponent(keyword)+"&nav="+from;
    	}
    } 
    else if (code == 38 || code == 40) {
    	if ($(".search_select").length > 0) {
    		flag=$(".search_select").index("#search_clew_ul li");
    		if (code == 38) {
    			if (flag == 0) {
    				flag = $("#search_clew_ul li").length - 1;
    			}
    			else {
    				flag = flag - 1;
    			}
    		}
    		else if (code == 40) {
    			if(flag == $("#search_clew_ul li").length-1){
					flag=0;
				}
    			else {
					flag=flag+1;	
				}
    		}
    	}
    	else {
    		if(code == 38){
				flag = $("#search_clew_ul li").length-1;
			}
    		else if(code == 40){
				flag = 0;
			}	
    	}
    	
    	$("#search_clew_ul li").eq(flag).addClass("search_select");
		$("#search_clew_ul li").eq(flag).siblings().removeClass("search_select");
    }
    else if (isWordCharacter || isBackspaceOrDelete) {
    	searchKeyUp();
    }
});
$("#search_clew_ul li").live("mouseover",function(){$(this).addClass("search_select");$(this).siblings().removeClass("search_select");});   
$("#search_clew_ul li").live("mouseout",function(){$(this).removeClass("search_select");}); 
$("#search_clew_ul li").live("click",function(){
	var keyword = $.trim($(this).html());
	$("#search_text").val(keyword);
	var from = $.trim($("#search_from").val());
	
	if (keyword && keyword != "请输入关键字") {
		window.location.href=baseHost+"/search/do.html?keyword="+encodeURIComponent(keyword)+"&nav="+from;
	}
});
 
$(document).click(function(event){
	var e = event || window.event;
	var target=e.target || e.srcElement;
	var txtId = target.id;
	if (txtId != "search_text") {
		$("#search_clew").css("display", "none");	
	}
});
$("#search_text").focus(function(){searchKeyUp();});
