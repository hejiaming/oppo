<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
  <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
  <title>{$desc['title']}</title>
  <meta name="keywords" content="{$desc['keywords']}" />
  <meta name="description" content="{desc['description']}" />
  <meta property="qc:admins" content="1257363774670076375" />

  	<link media="all" type="text/css" rel="stylesheet" href="{{ asset('Home/css/styles.css')}}">

	
  <!-- <script src="http://www.oppo.com/cn/lib/modernizr.custom.js"></script>
 -->

  <!--[if lt IE 9]>
  <script src="{{ asset('Home/js/html5shiv.js')}}"></script>

  <script src="{{ asset('Home/js/respond.min.js')}}"></script>

  <script src="{{ asset('Home/js/selectivizr-min.js')}}"></script>

  <link media="all" type="text/css" rel="stylesheet" href="http://shopfs.myoppo.com/cn/assets/stylesheets/ie.css">

  <![endif]-->
    <style type="text/css">
  .snow-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 100001;
  }
  </style>
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
  <!-- <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
    <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
  </li> -->
  <!-- <li class='gi gi-search' data-mobile='.main-menu nav .nav-ul-view > ul'>
    <a href='#' class='m-item'><img src="/cn/media/images/icon-menu-search.png" /></a>
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
</div>      
<ul class='gi log-area'>
<if condition = "session('?login')">
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
    <a href="{{URL('/demo2')}}">
      <span class='text'>我的OPPO</span>
      <span class='icon icon-messages'></span>
      <span class='n-messages'>()</span>
    </a>
    </li>
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
    <a class='logout' href="{{URL('/home/logout')}}">退出</a>
    </li>
  <else />
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
      <a href="{{URL('/home/login')}}">
        登录
      </a>
    </li>
    <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
    <a href="{{URL('/demo5')}}">
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
        <a href='http://www.oppo.com/cn/'>
          <img src="" style="width:190px;height:31px" alt="">
        </a>
        <!-- <a class="logo-special oppo-tj" data-tj="www|img|revision|special-logo">
          <img src="/cn/media/images/revision/qixi/qixi-logo.gif" />
        </a> -->
        <!-- <a class="logo-special oppo-tj" data-tj="www|img|revision|special-logo">
          <img src="/cn/media/images/revision/newyear/monkey-logo.gif" />
        </a> -->
      </div>
      <a class='js-open-user' href='#'>
        <img src="{{ asset('Home/images/icon-menu-user.png')}}" alt="">
      </a>
      <div class='main-menu'>
        <!-- <div class='mobile-tools'>
          <a class='js-close-menu' href='#'>
            <img alt='' src='/cn/media/images/icon-menu-close.png' />
          </a>
          <ul class='g log-area'></ul>
        </div> -->
        <div class='search'></div>
        <nav>
  <div class='nav-ul-view'>
  <ul class='menu g'>
    <li class='gi
        is-active
        '>
      <a class='m-item' href="{:U('Index/index')}">
        <span>首页</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="{{ URL('/demo') }}">
        <span>产品</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="{{ URL('/demo1') }}">
        <span>品牌</span>
              </a>
          </li>
    <li class='gi'>
      <a class='m-item' href="{:U('Goods/index')}">
        <span>在线商城</span>
        <span class='js-toggle-submenu toggle'></span>
      </a>
      <ul class='sub-menu'>
        <li>
          <a href="{:U('Goods/index')}">手机</a>
        </li>
        <li>
          <a href="{{URL('/demo6')}}">配件</a>
        </li>
        
        <li>
        	<a href="{{URL('/demo7')}}" target='_blank'>积分商城</a>
        </li>
      </ul>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="{{URL('/demo3')}}">
        <span>体验店</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href='http://www.oppo.com/cn/service.html'>
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
      <a href='http://my.oppo.com/auth/login?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'>
        登录
      </a>
    </li>
    <li class='user-menu-logout'>
      <a href='http://my.oppo.com/auth/logout?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'>退出</a>
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

  <main class="main-content">
    <section class='full-carousel slick-dot-circle'>
      <div class='hero slick-slide'>
  <div class='hero-image center'>
      <a  href="{:U('ScoreShop/index')}" target='_blank' title=''>
    <picture>
      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
      <source media='(min-width: 990px)' srcset="{{ asset('Home/images/20160226060204UF2L8rI18BzrzcVB.jpg')}}" />
      <source media='(min-width: 750px)' srcset="{{ asset('Home/images/20160226060205zAOapXG6y921rbSC.jpg')}}" />
      <source media='(min-width: 300px)' srcset="{{ asset('Home/images/201602260602070M2dja4mSlplm7ua.jpg')}}" />
      <!--[if IE 9]> </video> <![endif]-->
      <img alt='' title='' src="{{ asset('Home/images/201602260602070M2dja4mSlplm7ua.jpg')}}" srcset="{{ asset('Home/images/20160226060204UF2L8rI18BzrzcVB.jpg')}}">
    </picture>
    </a>
  </div>
</div>
  <div class='hero slick-slide'>
  <div class='hero-image center'>
      <a  href="{:U('Part/index')}" target='_blank' title=''>
    <picture>
      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
      <source media='(min-width: 990px)' srcset="{{ asset('Home/images/20160226060234yB1Jcggb6RHR1uvc.jpg')}}" />
      <source media='(min-width: 750px)' srcset="{{ asset('Home/images/20160226060237ZcVhi2wEVO6DP5rl.jpg')}}" />
      <source media='(min-width: 300px)' srcset="{{ asset('Home/images/20160226060240kEpnke6OyOUEJtgE.jpg')}}" />
      <!--[if IE 9]> </video> <![endif]-->
      <img alt='' title='' src="{{ asset('Home/images/20160226060240kEpnke6OyOUEJtgE.jpg')}}" srcset="{{ asset('Home/images/20160226060234yB1Jcggb6RHR1uvc.jpg')}}">
    </picture>
    </a>
  </div>
</div>
  <div class='hero slick-slide'>
  <div class='hero-image center'>
      <a  href="{:U('Goods/index')}" target='_blank' title='元宵大促'>
    <picture>
      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
      <source media='(min-width: 990px)' srcset="{{ asset('Home/images/20160224090231ZefE9z9TYSQsHjis.jpg')}}" />
      <source media='(min-width: 750px)' srcset="{{ asset('Home/images/20160224090234gXuDjzaQGUO0w42w.jpg')}}" />
      <source media='(min-width: 300px)' srcset="{{ asset('Home/images/20160224110224RJOYlFJ7KTaFubu5.jpg')}}" />
      <!--[if IE 9]> </video> <![endif]-->
      <img alt='元宵大促' title='元宵大促' src="{{ asset('Home/images/20160224110224RJOYlFJ7KTaFubu5.jpg')}}" srcset="{{ asset('Home/images/20160224090231ZefE9z9TYSQsHjis.jpg')}}">
    </picture>
    </a>
  </div>
</div>
    </section>
    <section class="brick">
      <div class="wrapper">
  <div class="g g-wrapper-l">
          <div class="gi lap-one-half">
        <div class='feature-product'>
  <a href='http://www.opposhop.cn/products/330.html' target='_blank'>
    <img alt='OPPO R7s' title="OPPO R7s" class='feature-product-image' src="{{ asset('Home/images/20151208121205QWDGhKYJylYK4LE4.jpg')}}">
    <div class='feature-product-content'>
      <h2 class='feature-product-heading'></h2>
      <p class='feature-product-description'>
        <strong></strong>
      </p>
    </div>
  </a>
</div>
      </div>
          <div class="gi lap-one-half">
        <div class='feature-product'>
  <a href='http://www.opposhop.cn/products/343.html' target='_blank'>
    <img alt='OPPO R7 Plus' title="OPPO R7 Plus" class='feature-product-image' src="{{ asset('Home/images/20160203090253fBIiVbMbOzSsB8Xr.jpg')}}">
    <div class='feature-product-content'>
      <h2 class='feature-product-heading'></h2>
      <p class='feature-product-description'>
        <strong></strong>
      </p>
    </div>
  </a>
</div>
      </div>
      </div>
</div>    
</section>
<aside class='brick-m related-content'>
  <div class='wrapper'>
    <div class='g g-wrapper-l'>
      <section class='gi one-whole lap-one-third'>
        <h2 class='h-delta'>
          <srtrong class='highlight'>探秘OPPO</srtrong>
        </h2>
        <h3 class='h-epsilon'><a href="http://www.oppo.com/cn/blogs" target="_blank">了解OPPO品牌故事</a></h3>
        <div class='video home-media-image'>
          <a href="http://www.oppo.com/cn/blogs" target="_blank"><img src="{{ asset('Home/images/exploration.jpg')}}" class="video-bg" alt=""></a>
        </div>
      </section>
      <section class='gi one-whole lap-one-third'>
        <h2 class='h-delta'>
          <srtrong class='highlight'>OPPO最新新闻</srtrong>
        </h2>
        <h3 class='h-epsilon'><a href="{:U('News/index')}" target="_blank">了解OPPO最新市场动态</a></h3>
        <foreach name='res' item='vo'>
        <article class='news'>
          <a href="{:U('News/index')}" target="_blank"><img class='news-photo' src=""></a>
          <div class='news-text'>
            <p><a href="{:U('News/index')}">{$vo.title}</a></p>
          </div>
        </article>
        </foreach>
      </section>
    <section class='gi one-whole lap-one-third home-media-weibo'><img src="{{ asset('Home/images/weibo.png')}}" alt=""></section>
  </div>
</div>
    </aside>
    <section class="brick-m slab-light">
      <div class='list-access-icon'>
  <div class='wrapper g'>
          <div class='access-icon gi lap-one-quarter one-half'>
        <a href='http://points.oppo.com/' target="_blank">
          <img alt='OPPO会员' title='OPPO会员' src="{{ asset('Home/images/20150424100432DUzqqHBZFJg0niWe.jpg')}}">

          <div class='content'>
            <h3 class='heading'>会员好礼</h3>

            <div class='badge-icon xl'>
              <span class='icon icon-letter'></span>
            </div>
                      </div>
        </a>
      </div>
          <div class='access-icon gi lap-one-quarter one-half'>
        <a href='http://www.oppo.com/cn/service' target="_blank">
          <img alt='OPPO帮助中心' title='OPPO帮助中心' src="{{ asset('Home/images/201507100707184DcFZTRj2gmBq8jn.jpg')}}">

          <div class='content'>
            <h3 class='heading'>需要帮助？</h3>

            <div class='badge-icon xl'>
              <span class='icon icon-headsets'></span>
            </div>
                      </div>
        </a>
      </div>
          <div class='access-icon gi lap-one-quarter one-half'>
        <a href='http://www.oppo.com/cn/shops' target="_blank">
          <img alt='OPPO体验店' title='OPPO体验店' src="{{ asset('Home/images/20150424100444ruMPRGfyZKZiSxE7.jpg')}}">

          <div class='content'>
            <h3 class='heading'>附近的体验店</h3>

            <div class='badge-icon xl'>
              <span class='icon icon-kiosk'></span>
            </div>
                      </div>
        </a>
      </div>
          <div class='access-icon gi lap-one-quarter one-half'>
        <a href='http://www.oppo.com/cn/blogs' target="_blank">
          <img alt='OPPO品牌' title='OPPO品牌' src="{{ asset('Home/images/20150424100426Gyn8aFG8UuFLsUzr.jpg')}}">

          <div class='content'>
            <h3 class='heading'>OPPO品牌</h3>

            <div class='badge-icon xl'>
              <span class='icon icon-radio'></span>
            </div>
                      </div>
        </a>
      </div>
      </div>
</div>
    </section>
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
        ' href="{:U('App/index')}" title="软件商店" target='_blank'><span class='img'><img alt='OPPO软件商店' title="软件商店" src="{{ asset('Home/images/20150314030306RfYFRTucS1nB3wtQ.png')}}"></span><span class='text'>软件商店</span></a>
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
          <a href="{:U('Goods/index')}" target='_blank'>手机</a>
        </li>
                <li>
          <a href="{:U('Part/index')}" target='_blank'>配件</a>
        </li>
          
                <li>
          <a href="{:U('ScoreShop/index')}" target='_blank'>积分商城</a>
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
          <a href="{:U('ScoreShop/index')}" target='_blank'>积分兑换</a>
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
	          <span class="icon icon-chat"></span>
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
      <!-- <div class='footer-subscribe lap-one-half desk-lap-one-third align-right'>
        <a href='#' id="btn-kf"><img alt='' src='/cn/media/images/zxkf.jpg' /></a>
      </div> -->
      <!-- <div class='footer-subscribe lap-one-half desk-lap-one-third'>
        <form action='#' class='main-form'>
          <div class='input-button-item'><input placeholder='输入Email订阅我们的最新动态' type='text'>
          <button class='button button-primary' type='submit'>订 阅</button>
          </div>
        </form>
      </div> -->
    </div>
  </div>
  <div style="width=100%;min-height=100px;margin-top:30px;">
    <strong style="width=100px;height:30px;position:relative:absolute;margin-left:35px;font-size:18px;color:#4F8657;">友情链接</strong>
    <div style="width=100px;min-height:100px;position:relative;left:45px;top:10px;margin:0 auto;">
     
        <foreach name='data' item='vo'>
        
        <span style="font-size:14px;color:#7B7B7B;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://{$vo.url}/">{$vo.webname}</a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
       
        <span>|</span>
        </foreach>
      
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
    <a href="{:U('FeedBack/index')}" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="http://www.wenjuan.com/s/V7bume6/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

<!-- <script src="http://www.oppo.com/cn/lib/jquery-1.9.1.min.js"></script>

<script src="http://www.oppo.com/cn/lib/underscore-min.js"></script>

<script src="http://www.oppo.com/cn/lib/slick.min.js"></script>

<script src="http://www.oppo.com/cn/lib/responsive.js"></script>

<script src="http://www.oppo.com/cn/lib/picturefill.min.js"></script>
 -->
<script src="{{asset('Home/js/lib.min.js')}}"></script>

<script src="{{ asset('Home/js/custom_form.js-v=20150914144728')}}"></script>

<script src="{{ asset('Home/js/scripts.js-v=201506151120596')}}"></script>

<script src="{{ asset('Home/js/oppo.min.js-v=20160121142624')}}"></script>


</body>

</html>
