

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
			// $(this).find(".h_soft_bg").css("background","url(../../../Public/Home/App/Images/hot_soft_hover_bg.png)").css("height","142px");
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
				$(this).find(".pl_info").find(".pl_down").css("display","block").css("background","url(../../../Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");
				$(this).find(".pl_down").hover(function(){
								$(this).css("background","url(../../../Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");
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
			$(this).find(".down").css("display","block").css("background","url(../../../Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");
			$(this).find(".down").hover(function(){
											$(this).css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) 0 -55px no-repeat");
										},function(){
											$(this).css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) 0 -28px no-repeat");
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
				$(this).find(".down").css("display","block").css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) 0 -28px no-repeat");
				$(this).find(".down").hover(function(){
								$(this).css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) 0 -55px no-repeat");
							},function(){
								$(this).css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) 0 -28px no-repeat");
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
			$(this).children("a").addClass("click2").css("background","url(../../../Public/Home/App/Images/menu_select_bg.png) no-repeat");
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
					$(this).children("a").addClass("click2").css("background","url(../../../Public/Home/App/Images/menu_select_bg.png) no-repeat");
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
				$(this).find(".li_about_middle").find(".down").css("display","block").css("/Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");		
				$(this).find(".li_about_middle").find(".down").hover(function(){
								$(this).css("background","url(/Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");
							},function(){
								$(this).css("background","url(/Public/Home/App/Images/btns_bg.png) 0 -28px no-repeat");
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
		if(content.length>50){
				content=content.substring(0,50)+"...";
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
		$("#pre_img").css("background","url(../../../Public/Home/App/Images/btns_bg.png) 0px 0 no-repeat").css("cursor","pointer");
		if(left==len-3){
			$("#next_img").removeClass().addClass("next_img_end");
			$("#next_img").css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) -80px 0 no-repeat").css("cursor","auto");
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
		$("#next_img").css("background","url(../../../Public/Home/App/Images/images/btns_bg.png) -16px 0 no-repeat").css("cursor","pointer");;		
		if(left==0){
			$("#pre_img").removeClass().addClass("pre_img_end");
			$("#pre_img").css("background","url(../../../Public/Home/App/Images/btns_bg.png) -64px 0 no-repeat").css("cursor","auto");
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
			$(this).find(".down").css("display","block").css("../../../Public/Home/App/Images/images/btns_bg.png) 0 -55px no-repeat");
			$(this).find(".down").hover(function(){
											$(this).css("../../../Public/Home/App/Images/images/btns_bg.png) 0 -55px no-repeat");
										},function(){
											$(this).css("../../../Public/Home/App/Images/images/btns_bg.png) 0 -28px no-repeat");
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



//分页居中代码
if($("#yw0")){
	var n=$("#yw0").find("li").length;
	var w=66*2+(n-2)*34+5*n;
	$("#yw0").css("width",w);
}
//返回顶部
$(".back_top").click(function(){
	// alert(222222);
	var isIE6= navigator.appVersion.indexOf("MSIE 6")>-1; 
	if(isIE6){
		$('html,body').scrollTop(0);
		$(".back_top").css("display","none");
	}else{
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


