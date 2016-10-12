<!DOCTYPE html>

<html class='no-js'>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
  <title>{$desc['title']}</title>
  <meta name="keywords" content="{$desc['keywords']}" />
  <meta name="description" content="{$desc['description']}" />
  <meta property="qc:admins" content="1257363774670076375" />

  	<link media="all" type="text/css" rel="stylesheet" href="{{ asset('Home/css/styles.css?v=20160217142111')}}">
  </head>

<body>
 <header class='main-header'>
  <div class='upper-area'>
    <div class='wrapper g'>
      <ul class='gi menu-sec'>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='http://www.oppo.cn/' target='_blank'>社区</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='http://www.coloros.com/' target='_blank'>ColorOS</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='http://store.oppomobile.com/' target='_blank'>软件商店</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='http://zhushou.oppo.com/' target='_blank'>手机助手</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='http://yun.oppo.com/' target='_blank'>云服务</a>
  </li>
  
</ul>      <div class='search gi'>
  <a class='js-toggle-close' href='#'>
    <span class='icon icon-search'></span>
  </a>
  <div class='search-form js-content'>
    <div class='wrapper'>
      <form action='http://www.opposhop.cn/products' class='main-form' data-desktop='.search-form .wrapper' data-mobile='.main-menu .search'>
        <div class='input-button-item'><input placeholder='搜索OPPO商品' type='text' name="q"><button class='button button-primary' type='submit'>搜索</button>
        </div>
      </form>
    </div>
  </div>
</div>      <ul class='gi log-area'>
	<if condition = "session('?login')">
	  <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
		<a href="{:U('Home/User/index')}">
		  <span class='text'>我的OPPO</span>
		  <span class='icon icon-messages'></span>
		  <span class='n-messages'>()</span>
		</a>
	  </li>
	  <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
		<a class='logout' href="{:U('Home/User/logout')}">退出</a>
	  </li>
	<else />
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
      <a href="{:U('Login/index')}">
        登录
      </a>
    </li>
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
		<a href="{:U('Add/index')}">
		注册
		</a>
    </li>
  <li class='gi' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area' id='old-version-link'>
  </li>
  </if>
</ul>      <ul class='gi menu-lang'>
  <li class='gi gi-language' data-desktop='.menu-lang' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a class='lang-link js-toggle-close' href='#'>Global</a>
    <div class='languages js-content' data-desktop='.gi-language' data-mobile='.languages-panel'>
      <div class='wrapper'>
        <h3 class='h-epsilon'>Select your country or region</h3>
        <ul>
          <li>
          <a  href='http://www.oppo.com/dz/'>Algérie</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/au/'>Australia</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/bd/'>Bangladesh</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/eg/'>Egypt</a>
          </li>
          <li>
          <a href='http://www.oppo.com/en/'>Global</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/in/'>India</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/id/'>Indonesia</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/ke/'>Kenya</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/my/'>Malaysia</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/ma/'>Maroc</a>
          </li>
          <!-- <li>
          <a  href='http://www.oppo.com/mx/'>México</a>
          </li> -->
          <!-- <li>
          <a  href='http://www.oppo.com/ng/'>Nigeria</a>
          </li> -->
          <li>
          <a  href='http://www.oppo.com/pk/'>Pakistan</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/ph/'>Philippines</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/sg/'>Singapore</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/lk/'>Sri Lanka</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/tw/'>台灣</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/ae/'>UAE</a>
          </li>
          <li>
          <a  href='http://www.oppomobile.vn/'>Việt Nam</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/th/'>ประเทศไทย</a>
          </li>
          <li>
          <a  href='http://www.oppo.com/mm/'>Myanmar</a>
          </li>
          <li>
          <a  class='current'  href='http://www.oppo.com/cn/'>中国</a>
          </li>
        </ul>
      </div>
    </div>
  </li>
</ul>    </div>
  </div>
  <div class='bottom-area'>
    <div class='wrapper'>
      <a class='js-open-menu' href='#'>
        <i class='js-open-menu-bar'></i>
      </a>
      <div class='logo logo-extend'>
        <a href='{:U("Home/Index/index")}'>
          <img alt="" src="__PUBLIC__/{$desc['logo']}" style="width:190px;height:31px"/>
        </a>
       
      </div>
      <a class='js-open-user' href='#'>
        <img src="{{ asset('Home/images/icon-menu-user.png')}}" alt="">
      </a>
      <div class='main-menu'>
       
        <div class='search'></div>
        <nav>
  <div class='nav-ul-view'>
  <ul class='menu g'>
    <li class='gi
        '>
      <a class='m-item' href='{:U("Home/Index/index")}'>
        <span>首页</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href='{:U("Home/Goods/index")}'>
        <span>产品</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href='{:U("Home/News/index")}'>
        <span>品牌</span>
              </a>
          </li>
    <li class='gi'>
      <a class='m-item' href='{:U("Home/Goods/index")}'>
        <span>在线商城</span>
        <span class='js-toggle-submenu toggle'></span>
      </a>
      <ul class='sub-menu'>
        <li>
          <a href='{:U("Home/Goods/index")}'>手机</a>
        </li>
        <li>
          <a href='{:U("Home/Part/index")}'>配件</a>
        </li>
        <li>
        	<a href='{:U("Home/ScoreShop/index")}' target='_blank'>积分商城</a>
        </li>
      </ul>
    </li>
    <li class='gi
        is-active
        '>
      <a class='m-item' href='{:U("Home/Store/index")}'>
        <span>体验店</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href=''>
        <span>服务</span>
              </a>
    </li>
        </ul>
  </div>
</nav>      </div>
      <div class='user-menu'>
<div class='relative'>
  <ul>
    <li class='user-menu-login'>
      <a href="http://www.opposhop.cn/orders">我的订单</a>
    </li>
    <li class='user-menu-login'>
      <a href="http://my.oppo.com/user/profile">账户信息</a>
    </li>
    <li class='user-menu-login'>
      <a href="http://www.opposhop.cn/user/addresses">配送地址</a>
    </li>
    <li class='user-menu-login user-menu-message'>
      <a href="http://my.oppo.com/user/messages">系统消息</a>
    </li>
    <li class='user-menu-login user-menu-cart'>
      <a href="http://www.opposhop.cn/cart">购物车</a>
    </li>
    <li class='user-menu-login user-menu-toLogin'>
      <a href='{:U("Home/Login/index")}'>
        登录
      </a>
    </li>
    <li class='user-menu-logout'>
      <a href='{:U("Home/User/logout")}'>退出</a>
    </li>
  </ul>
</div>
</div>    </div>
  </div>
  <div class='nav-sub-menu'>
  <div class='relative'></div>
</div>
<div class='nav-search-mask'></div>
<div class='nav-search'>
  <div class='nav-search-container'>
    <div class='nav-search-content'>
      <div class='nav-search-input'>
        <form action='http://www.opposhop.cn/products' class='main-form'>
          <input placeholder='搜索OPPO商品' type='text' name="q">
          <button class='button' type='submit'>搜索</button>
          <a href='#' class='nav-search-close'>取消</a>
        </form>
      </div>
    </div>
  </div>
</div>  <div class="languages-panel"></div>
</header>

  <main class='main-content'>
    <div class='wrapper'>
      <ul class='breadcrumb'>
  <li>
    <a href=''>
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  体验店
              </li>
      </ul>
    </div>
    <div class='hero'>
      <div class='hero-image'>
    <picture>
    <!--[if IE 9]>
    <video style="display: none;"> <![endif]-->
    <source media='(min-width: 990px)' srcset="{{ asset('Home/images/20150317090358ot93yaALDPx6zZyJ.jpg')}}">
    <source media='(min-width: 750px)' srcset="{{ asset('Home/images/20150317090319JU8syLGl7EbM1fX1.jpg')}}">
    <source media='(min-width: 300px)' srcset="{{ asset('Home/images/20150317090321NxympTnrMhDCjBxd.jpg')}}">
    <!--[if IE 9]> </video> <![endif]-->
    <img src="{{ asset('Home/images/20150317090321NxympTnrMhDCjBxd.jpg')}}" srcset="{{ asset('Home/images/20150317090358ot93yaALDPx6zZyJ.jpg')}}">
  </picture>
    </div>      <div class='search-store-wrapper'>
        <form action="" method="get" class='search-store'>
          <div class='input-button-item'>
            <input type='text' name="address" value="{:I('get.address')}" placeholder="请输入城市或体验店名称">
            <button class='button' type='submit'>搜索</button>
          </div>
        </form>
      </div>
    </div>
    <div class='slab-white'>
      <div class='wrapper'>
         <!--  <div class="select_cities_shops" id="select_cities_shops">
          		<span class="tips">请选择查询的城市：</span>
				
				
          		<div class='basic-input one-whole desk-one-fifth inline-block'>
			        <span class='icon icon-grey-arrow-down'></span>
			        <select id='select' name='province_id'></select>
			    </div>
			    <div class='basic-input one-whole desk-one-fifth inline-block city-select'>
			        <span class='icon icon-grey-arrow-down'></span>
			        <select id='select' name='city_id'></select>
			    </div>
          	</div> -->
      </div>
    </div>
    <div class='slab-light brick-s'>
      <div class='wrapper'>
        
        <div class='location-map g slab-white-border'>
          <div class='gi lap-one-whole desk-three-quarters'>
            <div class='js-tabs'>
              <ul class='menu-tabs js-tabs-nav'>
                <li class='one-whole is-active'>
                  <a href='#'>体验店</a>
                </li>
               
              </ul>
              <div class='js-tab-content'>
                <div class='js-tab is-active'>
                  <div class='map map-fix-infowindow' id='shop_map'></div>
                </div>
            
              </div>
            </div>
          </div>
          <aside class='gi lap-one-whole desk-one-quarter location-map-legend' data-desktop='.location-map'
                 data-mobile='.aside-mobile'>
            <section>
              <h2 class='h-delta'>体验店服务</h2>
              <ul class='icon-list shops-icons'>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-hyjf'></span>
                </span>
                  会员积分
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-hyzsjg'></span>
                </span>
                  会员专属价格
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-sjtm'></span>
                </span>
                  手机贴膜
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-yyrjxz'></span>
                </span>
                  应用软件下载
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-gjsj'></span>
                </span>
                  固件升级
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-coloros'></span>
                </span>
                  ColorOS
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-jkybf'></span>
                </span>
                  剪卡、云备份
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-gnjx'></span>
                </span>
                  功能教学
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-sjjyz'></span>
                </span>
                  手机加油站
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-wificl'></span>
                </span>
                  WIFI冲浪
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-axs'></span>
                </span>
                  爱心伞
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-sx'></span>
                </span>
                  送修
                </li>
                <li>
                <span class='icon-wrapper'>
                  <span class='icons-shops icon-shop-xoms'></span>
                </span>
                  小欧秘书
                </li>
              </ul>
            </section>
          </aside>
        </div>
        <div class='location-address'>
          <h3 class='h-gamma'> 体验店（{$count}）</h3>
          <ul class='list-store slab-white-border'>
		  <?php 
			$i=1; 
			if(isset($_GET['p'])){
			$page = $_GET['p'];
			}else{
			$page = 1;
			}
		  
		  
		  ?>
		  <foreach name="data" item="data" >
              <li class='store-location js-collapse'>
                <span class='marker'><?php echo ($page-1)*5+$i?></span>
                <div class='store-location-info g'>
                  <div class='gi lap-one-third store-name'>
                    <p>
                      <strong>{$data['name']}</strong>
                    </p>

                    <p>
                      <a class='view-details' href='{:U("Home/Store/detail",array("id"=>$data["id"]))}'>查看详情</a>
                    </p>
                  </div>
                  <div class='gi lap-one-third'>
                    <p>{$data['address']}</p>
                  </div>
                  <div class='gi lap-one-third'>
                    <p>{$data['tel']}</p>
                  </div>
                </div>
              </li>
			  <?php $i++;?>
		  </foreach>
          </ul>
        <ul class="pagination">
			{$show}
		</ul>

        </div>
                <div class='aside-mobile'></div>
      </div>
    </div>
  </main>
  <footer class='main-footer'>
  <div class='footer-prominent-area'>
    <div class='wrapper g'>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          primary
        ' href='http://www.oppo.cn/' title="OPPO社区" target='_blank'><span class='img'><img alt='OPPO社区' title="OPPO社区" src="{{ asset('Home/images/201502270202233FZ8VzjUJgb2YsLn.png')}}"></span><span class='text'>OPPO社区</span></a>
  </div>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          secondary
        ' href='http://www.coloros.com/' title="ColorOS" target='_blank'><span class='img'><img alt='OPPO ColorOS' title="ColorOS" src="{{ asset('Home/images/20150227020237clUXgMcj3UhukiC0.png')}}"></span><span class='text'>ColorOS</span></a>
  </div>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          primary
        ' href='http://store.oppomobile.com/' title="软件商店" target='_blank'><span class='img'><img alt='OPPO软件商店' title="软件商店" src="{{ asset('Home/images/20150314030306RfYFRTucS1nB3wtQ.png')}}"></span><span class='text'>软件商店</span></a>
  </div>
  </div>  </div>
  <div class='footer-sitemap'>
    <nav class='wrapper'>
  <ul class='g'>
        <li class='gi lap-one-fifth'>
      <a class='m-item' href='http://www.oppo.com/cn/products' target="_blank">推荐机型</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href='http://www.opposhop.cn/products/330.html' target='_blank'>R7s</a>
        </li>
                <li>
          <a href='http://www.opposhop.cn/products/319.html' target='_blank'>R7 Plus</a>
        </li>
                <li>
          <a href='http://www.opposhop.cn/products/288.html' target='_blank'>R7</a>
        </li>
                <li>
          <a href='http://www.opposhop.cn/products/118.html' target='_blank'>R1C</a>
        </li>
                <li>
          <a href='http://www.opposhop.cn/products/112.html' target='_blank'>N1 mini</a>
        </li>
              </ul>
    </li>
        <li class='gi lap-one-fifth'>
      <a class='m-item' href='http://www.opposhop.cn/' target="_blank">在线购买</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href='http://www.opposhop.cn/products?is_promotion=0&category=1' target='_blank'>手机</a>
        </li>
                <li>
          <a href='http://www.opposhop.cn/products?is_promotion=0&category=2' target='_blank'>配件</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/help?name=购买帮助' target='_blank'>购物指南</a>
        </li>
                <li>
          <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/help/614?name=打假维权' target='_blank'>官方授权网店</a>
        </li>
              </ul>
    </li>
        <li class='gi lap-one-fifth'>
      <a class='m-item' href='http://www.oppo.com/cn/service' target="_blank">服务</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href='http://www.oppo.com/cn/service/help?name=购买帮助' target='_blank'>购买帮助</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/help/360?name=购买帮助' target='_blank'>物流查询</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/faq' target='_blank'>常见问题</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/help?name=服务政策' target='_blank'>服务政策</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/service/map' target='_blank'>服务网点查询</a>
        </li>
              </ul>
    </li>
        <li class='gi lap-one-fifth'>
      <a class='m-item' href='http://points.oppo.com/' target="_blank">会员相关</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href='http://my.oppo.com/auth/login' target='_blank'>会员登录</a>
        </li>
                <li>
          <a href='http://my.oppo.com/auth/register' target='_blank'>会员注册</a>
        </li>
                <li>
          <a href='http://points.oppo.com/' target='_blank'>积分兑换</a>
        </li>
              </ul>
    </li>
        <li class='gi lap-one-fifth'>
      <a class='m-item' href='http://www.oppo.com/cn/blogs' target="_blank">OPPO品牌</a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href='http://www.oppo.com/cn/blogs/about' target='_blank'>关于OPPO</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/blogs?group_name=资讯' target='_blank'>资讯</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/photogallery' target='_blank'>摄影作品</a>
        </li>
                <li>
          <a href='http://www.oppo.com/cn/blogs/video' target='_blank'>我们的视频</a>
        </li>
              </ul>
    </li>
      </ul>
</nav>  </div>
  <div class='footer-tools'>
    <div class='wrapper'>
      <div class='footer-social lap-one-half desk-lap-one-third'><p>
          <span class='text'>关注我们</span>
          <a href='http://weibo.com/oppo' target='_blank'>
            <span class='icon icon-weibo'></span>
          </a>
          <a href='#' id='footer-wx' class='relative'>
            <span class='icon icon-wechat'></span>
            <img src="{{ asset('Home/images/wx.png')}}" class="wx-float" alt=""> 
          </a>
                    <a href='http://career.oppo.com' target='_blank' class='text text-link'>加入我们</a>
          <a href='http://www.oppo.com/cn/service/help?name=sourcing' target='_blank' class='text text-link'>采购相关</a>
        </p>
      </div>
      <div class='footer-subscribe lap-one-half desk-lap-one-third align-right'>
        <div class="g one-whole desk-one-half lap-one-half about-contact pull-left">
	        <a id="btn-kf" href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1" target="_blank">
	        <div class="about-contact-icon">
	          <span class="icon icon-tel"></span>
	        </div>
	        <div class="about-contact-info">
	          <h4 class='h-delta'>
	            <span class="highlight">在线客服</span>
	            <span class="icon icon-arrow"></span>
	          </h4>
	          <p>人工服务：8:30~22:00</p>
	          <p>24小时智能机器人服务</p>
	        </div>
	        </a>
	    </div>
	    <div class="g one-whole desk-one-half lap-one-half about-contact pull-left second-about-contact">
            <div class="about-contact-icon">
              <span class="icon icon-tel"></span>
            </div>
            <div class="about-contact-info">
              <h4 class='h-delta'>
                <span class="highlight">4001-666-888</span>
              </h4>
              <p style="">7*24小时客服电话</p>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class='footer-info'>
    <div class='wrapper'>
      <p class='copy'>{$desc['copyright']}</p>
      <a href="http://wljg.gdgs.gov.cn/corpsrch.aspx?key=441900000436441" target="_blank" title="企业名称：广东欧珀电子工业有限公司
法定代表人：金乐亲
标识状态：已激活 粤工商备E191512001248
电子标识有效期：2015-12-14～2020-12-16" class="footer-identification"><img src="{{ asset('Home/images/20141126002933.png')}}" alt="" style="border:0;"></a>

    </div>
  </div>
</footer>

<div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="http://www.wenjuan.com/s/ENb67n/" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="http://www.wenjuan.com/s/V7bume6/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

<script src="{{ asset('Home/js/lib.min.js')}}"></script>

<script src="{{ asset('Home/js/custom_form.js')}}-v=20150914144728"></script>

<script src="{{ asset('Home/js/scripts.js')}}-v=201506151120596"></script>

<script src="{{ asset('Home/js/oppo.min.js')}}-v=20160121142624"></script>


  <script src="http://api.map.baidu.com/api?v=2.0&amp;ak=84943bd4d6cdee6b618a9baad6696e39"></script>

  <script src="{{ asset('Home/js/shop_region.js')}}"></script>

  <script type="text/javascript" src="{{ asset('Home/js/SearchInfoWindow_min.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('Home/css/SearchInfoWindow_min.css')}}" />

<script type="text/javascript">
  var vm;
  OPPO.conf.BASE_URL = "http://localhost/oppo/index.php";
  OPPO.conf.STORE_URL = 'http://localhost/oppo/index.php';
  OPPO.conf.ACCOUNT_URL = 'http://localhost/oppo/index.php';
  OPPO.conf.domains = [];
  OPPO.conf.jsonpDone = false;
      OPPO.conf.jsonpDone = true;
  
  var url = OPPO.conf.STORE_URL + '/auth/check';
  //callback for jsonp
  var successCallback = function(data){
    $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
    $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
    $('.n-messages').text("(" + data['message_number'] + ")");
    $('.user-menu').addClass('isLogin');
    $('.user-menu-toLogin').hide();
    if (data['message_number']>0 || data['cart_number']>0) {
      $('.js-open-user').addClass('point-red');
      if (data['message_number']>0) $('.user-menu-message a').addClass('point-red');
      if (data['cart_number']>0) $('.user-menu-cart a').addClass('point-red');
    };
    if (data['append'] != '') $('body').append(data['append']);
  };
  var errorCallback = function(){
    $('ul.log-area .hasLogin').removeClass('show').addClass('hidden');
    $('ul.log-area .hasLogout').removeClass('hidden').addClass('show');
  };
  $.ajax({
    url: url,
    type: 'GET',
    dataType: 'jsonp',
    error: function() {
      errorCallback();
    },
    success: function(data){
      successCallback(data);
    }
  });

  (function () {
    var controllerNameWithAction = "ShopsController@index".split('@');
    var controllerName = controllerNameWithAction[0];
    var actionName = controllerNameWithAction[1];
    var controller = OPPO.controller[controllerName];
    if (controller) {
      action = controller()[actionName];
      if (action) {
        $(function () {
          vm = action();
        });
      }
    }
    // else console.log(controllerNameWithAction);
  })();
</script>
<script type="text/javascript">
  $(function () {
      vm.initCities(110000,110100);
  if(110000 > 0)  vm.initMap('北京市', [{"id":911,"code":"BJ01006","name":"北京一滴油","type":1,"address":"北京市昌平区昌平镇小河乡大乔胡同45号，公共厕所对面","phone_number":"010-67601181","province_id":110000,"city_id":110100,"district_id":110106,"street":"9号","opening_time":"09 : 00","closing_time":"20 : 30","traffic_route":"","longitude":"116.430861","latitude":"39.864415","ip":"183.129.228.7","status":1,"created_at":"2015-05-20 10:59:18","updated_at":"2016-02-24 09:45:09","sequence":1,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2}},
										{"id":1532,"code":"BJ01009","name":"上海一滴油 ","type":1,"address":"上海市农家院小区5号家属楼16层阳台","phone_number":"010-82584976","province_id":110000,"city_id":110100,"district_id":110108,"street":"18号1C03","opening_time":"09 : 30","closing_time":"20 : 30","traffic_route":"","longitude":"116.323623","latitude":"39.989326","ip":"183.129.228.7","status":1,"created_at":"2015-05-20 10:59:18","updated_at":"2016-02-24 09:45:41","sequence":2,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2}},
										{"id":6946,"code":"BJ01027","name":"沙河一滴油","type":1,"address":"沙河自制蛆苍蝇堆乡大扑棱蛾子屯972号","phone_number":"010-56270331","province_id":110000,"city_id":110100,"district_id":110112,"street":"一层","opening_time":"09 : 00","closing_time":"21 : 00","traffic_route":"","longitude":"116.648797","latitude":"39.911847","ip":"121.52.234.186","status":1,"created_at":"2016-02-19 13:42:47","updated_at":"2016-02-24 09:49:53","sequence":99,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2}},
										{"id":4461,"code":"BJ01016","name":"刚果","type":1,"address":" 亚历山大·尼古拉耶维奇·奥斯特洛夫斯基","phone_number":"010-67985380","province_id":110000,"city_id":110100,"district_id":110115,"street":"6号","opening_time":"09 : 00","closing_time":"21 : 00","traffic_route":"","longitude":"116.425932","latitude":"39.793355","ip":"121.52.234.186","status":1,"created_at":"2016-02-19 13:42:36","updated_at":"2016-02-24 09:48:53","sequence":99,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2}},
										{"id":7394,"code":"BJ01035","name":"上海","type":1,"address":"画上荷花和尚画和","phone_number":"010-60670470","province_id":110000,"city_id":110100,"district_id":110116,"street":"8号","opening_time":"09 : 00","closing_time":"17 : 00","traffic_route":"","longitude":"116.586098","latitude":"40.29623","ip":"121.52.234.186","status":1,"created_at":"2016-02-19 13:41:04","updated_at":"2016-02-24 09:49:56","sequence":99,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2}},
										{"id":7253,"code":"BJ01033","name":"海外一滴油","type":1,"address":"美国白宫外交接待厅一号贵宾室","phone_number":"010-80595399","province_id":110000,"city_id":110100,"district_id":110112,"street":"6号","opening_time":"09 : 00","closing_time":"22 : 00","traffic_route":"","longitude":"116.567691","latitude":"39.731955","ip":"121.52.234.186","status":1,"created_at":"2016-02-19 13:40:56","updated_at":"2016-02-24 09:49:58","sequence":99,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2},},
										{"id":7250,"code":"BJ01032","name":"OPPO总部","type":1,"address":"北斤市产平区还龙观文环西路易容教育云蛆","phone_number":"010-81508751","province_id":110000,"city_id":110100,"district_id":110112,"street":"5号","opening_time":"09 : 00","closing_time":"21 : 00","traffic_route":"","longitude":"116.585189","latitude":"39.809475","ip":"121.52.234.186","status":1,"created_at":"2016-02-19 13:40:48","updated_at":"2016-02-24 09:49:26","sequence":99,"province":{"id":110000,"name":"北京市","parent_id":0,"type":1},"city":{"id":110100,"name":"北京市","parent_id":110000,"type":2},},
										 ]);
  });
</script>
<!-- 百度统计代码  -->

</body>

</html>
