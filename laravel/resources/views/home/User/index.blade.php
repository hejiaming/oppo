<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html style="" class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><!-- Added by HTTrack -->
<head>
<script src="{{ asset('Home/js/optj-1.js')}}"></script>
<script src="{{ asset('Home/js/hm.js')}}"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>{$desc['title']} </title>
    <meta name="keywords" content="{$desc['keywords']}">
    <meta name="description" content="{$desc['description']}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('Home/css/styles.css')}}">


    <script src="{{ asset('Home/js/modernizr.js')}}"></script>


    <link href="{{ asset('Home/css/oppo.css')}}" rel="stylesheet" type="text/css"></head>

<body>
<header class='main-header'>
  <div class='upper-area'>
    <div class='wrapper g'>
      <ul class='gi menu-sec'>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='' target='_blank'>社区</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='' target='_blank'>ColorOS</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='' target='_blank'>软件商店</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='' target='_blank'>手机助手</a>
  </li>
  <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='' target='_blank'>云服务</a>
  </li>
  <!-- <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
  </li> -->
  <!-- <li class='gi gi-search' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='#' class='m-item'><img src="/cn/media/images/icon-menu-search.png')}}" /></a>
  </li> -->
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
</ul>      <ul class="gi menu-lang">
  
<li class="gi gi-language" data-desktop=".menu-lang" data-mobile=".main-menu nav .nav-ul-view &gt; ul">
    <a href="">Global</a>
    
  <div class="languages js-content" data-desktop=".gi-language" data-mobile=".languages-panel">
      <div class="wrapper">
        <h3 class="h-epsilon">Select your country or region</h3>
        <ul>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <!-- <li>
          <a  href='http://www.oppo.com/mx/'>México</a>
          </li> -->
          <!-- <li>
          <a  href='http://www.oppo.com/ng/'>Nigeria</a>
          </li> -->
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
          <li>
          <a href=""></a>
          </li>
        </ul>
      </div>
    </div></li></ul>    </div>
  </div>
  <div class="bottom-area">
    <div class="wrapper">
      <a class="js-open-menu" href="#">
        <i class="js-open-menu-bar"></i>
      </a>
      <div class="shop-cart">
  <a href="">
    <span class="text">购物车</span>
    <span class="icon icon-cart"></span>
    
  </a>
</div>      <div class="logo logo-extend">
        <a href="{:U('Home/Index/index')}">
          <img alt="" src="" style="width:190px;height:31px"/>
        </a>
        <!-- <a class="logo-special oppo-tj"  data-tj="www|img|revision|special-logo">
          <img src="/media/images/revision/qixi/qixi-logo.gif" />
        </a> -->
      </div>
      <a class="js-open-user" href="#">
        <img alt="" src="{{ asset('Home/images/icon-menu-user.png')}}">
      </a>
      <div class="main-menu">
        <!-- <div class='mobile-tools'>
          <a class='js-close-menu' href='#'>
            <img alt='' src='/cn/media/images/icon-menu-close.png')}}' />
          </a>
          <ul class='g log-area'></ul>
        </div> -->
        <div class="search"></div>
        <nav>
  <div class="nav-ul-view">
  <ul class="menu g">
    <li class="gi
        is-active
    ">
      <a class="m-item" href="{:U('Home/Index/index')}">
        <span>首页</span>
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="{:U('Home/Goods/index')}">
        <span>产品</span>
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="{:U('Home/News/index')}">
        品牌
              </a>
          </li>
    <li class="gi">
      <a class="m-item" href="{:U('Home/Goods/index')}">
        <span>在线商城</span>
        <span class="js-toggle-submenu toggle"></span>
      </a>
      <ul class="sub-menu">
        <li>
          <a href="{:U('Home/Goods/index')}">手机</a>
        </li>
        <li>
          <a href="{:U('Home/Part/index')}">配件</a>
        </li>
        <li>
          <a href="{:U('Home/ScoreShop/index')}">积分商城</a>
        </li>
      </ul>
    </li>
    <li class="gi">
      <a class="m-item" href="{:U('Home/Address/index')}">
        体验店
      </a>
    </li>
    <li class="gi">
      <a class="m-item" href="">
        服务
              </a>
    </li>
        </ul>
  </div>
</nav>      </div>
      <div class="user-menu isLogin">
<div class="relative">
  <ul>
    <li class="user-menu-login">
      <a href=""></a>
    </li>
    <li class="user-menu-login">
      <a href=""></a>
    </li>
    <li class="user-menu-login">
      <a href=""></a>
    </li>
    <li class="user-menu-login user-menu-message">
      <a href=""></a>
    </li>
    <li class="user-menu-login user-menu-cart">
      <a href=""></a>
    </li>
    <li style="display: none;" class="user-menu-login user-menu-toLogin">
      <a href="http://my.oppo.com/auth/login?callback=http%3A%2F%2Fmy.oppo.com%2Fuser">
        登录
      </a>
    </li>
    <li class="user-menu-logout">
      <a href=""></a>
    </li>
  </ul>
</div>
</div>    </div>
  </div>
  <div class="nav-sub-menu">
  <div class="relative"></div>
</div>
<div class="nav-search-mask"></div>
<div class="nav-search">
  <div class="nav-search-container">
    <div class="nav-search-content">
      <div class="nav-search-input">
        <form action="http://www.opposhop.cn/products" class="main-form">
          <input placeholder="搜索OPPO商品" name="q" type="text">
          <button class="button" type="submit">搜索</button>
          <a href=""></a>
        </form>
      </div>
    </div>
  </div>
</div>  <div style="display: none;" class="languages-panel"></div>
</header>
    <foreach name = "data" item = "vo" >
      <main class="main-content user">
    <div class="wrapper">
      <ul class="breadcrumb">
  <li>
    <a href="{:U('Home/Index/index')}">
      首页
      <span>/</span>
    </a>
  </li>
            <li>
                  我的OPPO
              </li>
      </ul>
      <div class="myOppo-menu">
  <h1 class="h-gamma">个人首页</h1>
  <ul class='navigation'>
    <li class='is-active'>
      <a href='{:U("Home/User/index")}'>个人首页</a>
    </li>
    <li class=''>
      <a href='{:U("Home/User/userdetail")}'>账户信息</a>
    </li>
    <li class=''>
      <a href='{:U("Home/Address/index")}'>配送地址</a>
    </li>
    <li class=''>
      <a href='{:U("Home/Order/centerindex")}'>我的订单</a>
    </li>
    <li class=''>
      <a href=''>系统消息</a>
    </li>
    <li class=''>
      <a href=''>优惠券</a>
    </li>
  </ul>
</div>
      <div class="g">
        <div class="gi lap-two-fifths desk-one-quarter user-aside">
          <div class="user-data">
  <div class="user-avatar">
  <a target="_blank">
      <img class="fl" src="bianliang" width="200" height="200">
  </a>
  </div>
  <div class="user-name">
    <p>{$vo['usernames']}</p>
  </div>
  <!--
  <div class='user-actions'>
    <p>
      <a href=""></a>
    </p>
  </div>
  -->
  <ul class="user-data-info">
    <!--
    <li class='user-info-user'>
      <div class='user-info-icon'>
        <span class='icon icon-star-circle'></span>
      </div>
      <div class='user-data-info-title'>
        <p>VIP 会员 | 1级</p>
      </div>
      <p>
        <a href='#'>晋升至2级</a>
      </p>
    </li>
    -->
    <li class="user-info-dynamic">
      <div class="user-info-icon">
        <span class="icon icon-dollar-circle"></span>
      </div>
      <div class="user-data-info-title">
        <p>{$vo['score']}积分</p>
      </div>
      <p>
        <a href=""></a>
      </p>
    </li>
  </ul>
  <div class="advice">
    <div class="box box-banner sm">
  <a href="{:U('Home/Goods/index')}" target="_blank">
    <img alt="" src="{{ asset('Home/images/personal-center.jpg')}}">
    <div class="content">
      <!--<h1 class='h-epsilon'>所有原装及兼容配件均具有OPPO专家团队品质保证</h1>
      <p class='banner-subtitle'>了解更多我们的产品保证和退换货政策</p>  -->
    </div>
  </a>
</div>
  </div>
</div>
        </div>
        <div class="gi lap-three-fifths desk-three-quarters my-oppo-content slab-white-border">
                      <section class="brick-shadow">
            <h1 class="h-epsilon">您的最新动态</h1>
            <ul class="user-activity faq">
            <foreach name="res" item="vo">
                <li class="user-info-order">
                  <div class="user-info-icon">
                    <span class="icon icon-shop-circle"></span>
                  </div>
                  <div class="activity-content">
                    <h2 class="activity-title">最近订单</h2>
                    <div class="activity-date">
                      <p>123123</p>
                    </div>
                    <div class="activity-details">
                      <img class="order-product-thumbnail" alt="" src="tupian"><p>
                        <a href="{:U('Goods/detail',array('id'=>$vo['good']['id']))}"><strong>{$vo['good']['gname']}</strong></a>
                        </p><p class="extra-text">
                            <if condition="$vo['status'] neq 1">
                              订单状态：{$vo['pay']=='1' ? '已付款' : '未付款'}
                            <else />
                              订单状态：已取消
                            </if>
                        </p>
                      <p></p>
                    </div>
                  </div>
                </li>             
            </foreach>         
            </ul>
          </section>
		  </foreach>
          <section class="brick-shadow">
            <h1 class="h-epsilon">服务板块推荐</h1>
<li class="user-info-points user-info-item">
	<div class="user-info-icon" style="width:69px;height:69px">
	  <span class="icon icon-points-circle"></span>
	</div>
	<div class="activity-content">
	  <h2 class="activity-title">积分商城</h2>
	  <div class="activity-details">
	    <p>OPPO积分商城面对所有会员开放，购物即可赚积分，积分礼品兑不停</p>
	    <p>
	      <a href="{:U('Home/ScoreShop/index')}">现在就去逛逛吧~</a>
	    </p>
	  </div>
	</div>
</li>

<li class="user-info-center user-info-item">
	<div class="user-info-icon" style="width:69px;height:69px">
	  <span class="icon icon-center-circle"></span>
	</div>
	<div class="activity-content">
	  <h2 class="activity-title">帮助中心</h2>
	  <div class="activity-details">
	    <p>OPPO官网客服，为您提供最贴心的购物体验，解决您所有的购物疑问</p>
	    <p>
	      <a href="">您需要帮助吗？</a>
	    </p>
	  </div>
	</div>
</li>

<li class="user-info-experience-store user-info-item">
	<div class="user-info-icon" style="width:69px;height:69px">
	  <span class="icon icon-experience-store-circle"></span>
	</div>
	<div class="activity-content">
	  <h2 class="activity-title">体验店</h2>
	  <div class="activity-details">
	    <p>最全的线下门店查询渠道，为您搜索最近的OPPO体验店，热情的接待，专业的服务</p>
	    <p>
	      <a href="{:U('Home/Store/index')}">OPPO体验店期待您的光临</a>
	    </p>
	  </div>
	</div>
</li>

<li class="user-info-news user-info-item">
	<div class="user-info-icon" style="width:69px;height:69px">
	  <span class="icon icon-news-circle"></span>
	</div>
	<div class="activity-content">
	  <h2 class="activity-title">OPPO品牌</h2>
	  <div class="activity-details">
	    <p>最新最热的OPPO新闻，最快最全的市场动态，了解OPPO最新官方资讯</p>
	    <p>
	      <a href="{:U('Home/News/index')}">请关注OPPO新闻板块</a>
	    </p>
	  </div>
	</div>
</li>
          </section>
                  </div>
      </div>
    </div>
  </main>

        <footer class="main-footer">
  <div class="footer-prominent-area">
    <div class="wrapper g">
    <div class="gi lap-one-third">
    <a class="footer-prominent-button
          primary
        " href="http://www.oppo.cn/" title="OPPO社区" target="_blank"><span class="img"><img alt="OPPO社区" title="OPPO社区" src="{{ asset('Home/images/201502270202233FZ8VzjUJgb2YsLn.png')}}"></span><span class="text">OPPO社区</span></a>
  </div>
    <div class="gi lap-one-third">
    <a class="footer-prominent-button
          secondary
        " href="http://www.coloros.com/" title="ColorOS" target="_blank"><span class="img"><img alt="OPPO ColorOS" title="ColorOS" src="{{ asset('Home/images/20150227020237clUXgMcj3UhukiC0.png')}}"></span><span class="text">ColorOS</span></a>
  </div>
    <div class="gi lap-one-third">
    <a class="footer-prominent-button
          primary
        " href="http://store.oppomobile.com/" title="软件商店" target="_blank"><span class="img"><img alt="OPPO软件商店" title="软件商店" src="{{ asset('Home/images/20150314030306RfYFRTucS1nB3wtQ.png')}}"></span><span class="text">软件商店</span></a>
  </div>
  </div>  </div>
  <div class="footer-sitemap">
    <nav class="wrapper">
  <ul class="g">
        <li class="gi lap-one-fifth">
        <a href=""></a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a href=""></a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a href=""></a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a href=""></a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
              </ul>
    </li>
        <li class="gi lap-one-fifth">
        <a href=""></a>
      <span class="toggle js-toggle-sitemap"></span>
      <ul>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
                <li>
          <a href=""></a>
        </li>
              </ul>
    </li>
      </ul>
</nav>  </div>
  <div class="footer-tools">
    <div class="wrapper">
      <div class="footer-social lap-one-half desk-lap-one-third">
	  <p>
          <span class="text">关注我们</span>
          <a href="" target="_blank">
            <span class="icon icon-weibo"></span>
          </a>
          <a href="#" id="footer-wx" class="relative">
            <span class="icon icon-wechat"></span>
            <img src="{{ asset('Home/images/wx.png')}}" class="wx-float" alt="">  
          </a>
		   <a href='' target='_blank' class='text text-link'>加入我们</a>
          <a href='' target='_blank' class='text text-link'>采购相关</a>
        </p>
      </div>
      <div class="footer-subscribe lap-one-half desk-lap-one-third align-right">
        <!-- <div class='g'>
          <div class='gi lap-one-whole one-whole'>
            <a href='#' id="btn-kf"><img src='/cn/media/images/zxkf.png')}}' /></a>
          </div>
          <div class='gi footer-lap-hide one-third'><img alt='' src='/cn/media/images/m.jpg')}}' /></div>
        </div> -->
        <div class="g one-whole desk-one-half lap-one-half about-contact pull-left">
	        <a id="btn-kf">
	        <div class="about-contact-icon">
	          <span class="icon icon-chat"></span>
	        </div>
	        <div class="about-contact-info">
	          <h4 class="h-delta">
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
              <h4 class="h-delta">
                <span class="highlight">4001-666-888</span>
              </h4>
              <p style="">7*24小时客服电话</p>
            </div>
        </div>
      </div>
      <!-- <div class='footer-subscribe lap-one-half desk-lap-one-third'>
        <form action='#' class='main-form'>
          <div class='input-button-item'><input placeholder='输入Email订阅我们的最新动态' type='text'>
          <button class='button button-primary' type='submit'>订 阅</button>
          </div>
        </form>
      </div> -->
    </div>
  </div>
  <div class="footer-info">
    <div class="wrapper">
      <p> {$desc['copyright']}</p>
    </div>
  </div>
</footer>
    
    <div style="display: none;" class="navi-scroll">
  <div class="navi-scroll-content">
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
  </div>
</div>
    
    <script src="{{ asset('Home/js/jquery-1.js')}}"></script>

    <script src="{{ asset('Home/js/custom_form.js')}}"></script>

    <script src="{{ asset('Home/js/responsive.js')}}"></script>

    <script src="{{ asset('Home/js/scripts.js')}}"></script>


    
    <script src="{{ asset('Home/js/account.js')}}"></script>

    <script src="{{ asset('Home/js/oppo.js')}}"></script><div id="account_bg" class="account_bg"></div><div id="account_contain" class="account_contain"></div>
  
<div class="js-sensor"></div></body></html>