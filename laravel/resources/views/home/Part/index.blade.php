<!DOCTYPE html>
<!-- saved from url=(0057)http://www.opposhop.cn/products?is_promotion=0&category=2 -->
<html class=" js no-touch backgroundsize cssanimations csstransforms svg inlinesvg"><!-- Added by HTTrack --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE">
    <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
    <title>{$desc['title']}</title>
    <meta name="keywords" content="{$desc['keywords']} ">
    <meta name="description" content="{$desc['description']}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('Home/css/stylles.css')}}">


    <script type="text/javascript" defer="" async="" src="{{asset('Home/js/uta.js')}}"></script><script src="{{asset('Home/js/optj-1.0.4.min.js')}}"></script><script async="" src="{{asset('Home/js/analytics.js')}}"></script><script src="{{asset('Home/js/hm.js')}}"></script><script src="{{asset('Home/js/modernizr.custom.js')}}"></script>


    <script type="text/javascript">
		function checkBrowser(){
			var browser = {};
			var div = document.createElement( "div" );
			div.innerHTML = "<link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
			var a = div.getElementsByTagName( "a" )[0];
			style = a && a.style;
			if (!style) {
				return;
			}
			style.cssText = "float:left;opacity:.5";
			// Support: IE<9
			// Make sure that element opacity exists (as opposed to filter)
			browser.opacity = style.opacity === "0.5";

			// Verify style float existence
			// (IE uses styleFloat instead of cssFloat)
			browser.cssFloat = !!style.cssFloat;
			if(browser.opacity && browser.cssFloat){
				return true;
			}else{
                //IE 8测试
                var userAgent = navigator.userAgent.toLocaleUpperCase();
                var msie = /MSIE [\d\.]+/;
                var version = msie.exec(userAgent);
                if (version<"MSIE 8") return false;
                else return true;
			}
		}
        var v = checkBrowser();
		if (!v) {
			window.location.href = "http://www.opposhop.cn/ltie9_message.html";
		}
    </script>


    <!--[if lt IE 9]>
      <script src="__PUBLIC__/Home/js/html5shiv.js')}}"></script>

      <script src="__PUBLIC__/Home/js/respond.min.js')}}"></script>

      <script src="__PUBLIC__/Home/js/selectivizr-min.js')}}"></script>

      <link media="all" type="text/css" rel="stylesheet" href="__PUBLIC__/Home/css/ie.css">

    <![endif]-->

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
    <a href='#' class='m-item'><img src="/cn/media/images/icon-menu-search.png')}}" /></a>
  </li> -->
</ul>      <div class='search gi'>
  <a class='js-toggle-close' href='#'>
    <span class='icon icon-search'></span>
  </a>
  <div class='search-form js-content'>
    <div class='wrapper'>
      <form action='#' class='main-form' data-desktop='.search-form .wrapper' data-mobile='.main-menu .search'>
        <div class='input-button-item'><input placeholder='搜索OPPO商品' type='text' name="q"><button class='button button-primary' type='submit'>搜索</button>
        </div>
      </form>
    </div>
  </div>
</div>      
<ul class='gi log-area'>
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
        <a href='http://www.oppo.com/cn/'>
          <img src="__PUBLIC__/{$desc['logo']}" style="width:190px;height:31px" alt="">
        </a>
        <!-- <a class="logo-special oppo-tj" data-tj="www|img|revision|special-logo">
          <img src="/cn/media/images/revision/qixi/qixi-logo.gif" />
        </a> -->
        <!-- <a class="logo-special oppo-tj" data-tj="www|img|revision|special-logo">
          <img src="/cn/media/images/revision/newyear/monkey-logo.gif" />
        </a> -->
      </div>
      <a class='js-open-user' href='#'>
        <img src="{{asset('Home/images/icon-menu-user.png')}}" alt="">
      </a>
      <div class='main-menu'>
        <!-- <div class='mobile-tools'>
          <a class='js-close-menu' href='#'>
            <img alt='' src='/cn/media/images/icon-menu-close.png')}}' />
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
      <a class='m-item' href="{:U('Goods/index')}">
        <span>产品</span>
      </a>
    </li>
    <li class='gi
        '>
      <a class='m-item' href="{:U('News/index')}">
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
          <a href="{:U('Part/index')}">配件</a>
        </li>
        
        <li>
          <a href="{:U('ScoreShop/index')}" target='_blank'>积分商城</a>
        </li>
      </ul>
    </li>
    <li class='gi
        '>
      <a class='m-item' href='http://www.oppo.com/cn/shops'>
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

      <main class="main-content slab-light">
    <div class="slab-white">
        <div class="wrapper">
            <ul class="breadcrumb">
                <li>
                    <a href="__PUBLIC__/Home/Index/">
                          首页
                          <span>/</span>
                    </a>
                </li>
                <li>
                                        配件列表
                                    </li>
            </ul>
        </div>
    </div>
    <div class="selectors-wrapper slab-white">
        <div class="wrapper">
            <div class="category-selectors">
                                <!--<div class="s-module" id="accessory-category">
                    <div class="s-attributes">
                         <ul class="clearfix">
                            <li class="active">
                                                            <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=2">全部配件</a>
                                                                                            <em>|</em>
                                                           </li>
                                                                                    <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=7">
                                                        保护套</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=8">
                                                        贴膜</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=15">
                                                        适配器</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=5">
                                                        数据线</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=19">
                                                        蓝牙耳机</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=4">
                                                        有线耳机</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=18">
                                                        蓝牙音箱</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=9">
                                                        移动电源</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=11">
                                                        VOOC闪充</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=10">
                                                        智能配件</a>
                                                        <em>|</em>
                                                        </li>
                                                        <li>
                                                          <a href="http://www.opposhop.cn/products?is_promotion=0&amp;sort=sequence-desc&amp;category=16">
                                                        其它</a>
                                                        </li>
                                                                                </ul> -->
                    <!-- </div>
                </div> -->
                                                                <div class="s-module">
                    <!-- <div class="s-label">适用机型：</div> -->
                    <!-- <div class="s-attributes">
                        <ul class="clearfix" id="type-models">
                                                        <li class="active">
                              <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc">全部</a>
                            </li>

                                                                                    <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=52">1100</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=53">1105</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=67">R3</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=68">R5</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=69">R830</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=70">R830S</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=71">R2010</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=72">R2017</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=73">R6007</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=121">A31</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=123">U3</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=131">N1</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=54">1107</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=56">3000</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=57">3005</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=59">3007</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=60">Find7</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=62">N1mini</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=65">R1C</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=64">N3</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=66">R1S</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=152">R7</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=160">R7特别版 喋喋phone</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=168">A11</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=170">R7Plus</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=179">A33</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=180">R7s</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=181">A53</a></li>
                                                        <li><a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;phone_spu=182">R7Plus高配版</a></li>
                                                        
                                                    </ul>
                    </div>
                </div> -->
                                                <!-- <div class="s-module"> -->
                    <!-- <div class="s-label">价格：</div> -->
                    <!-- <div class="s-attributes">
                        <ul class="clearfix" id="type-price">
                            <li class="active">
                              <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc">全部</a>
                            </li>
                                                        <li>
                                <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;price_range=0-99">¥0-¥99</a>
                            </li>
                                                        <li>
                                <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;price_range=100-199">¥100-¥199</a>
                            </li>
                                                        <li>
                                <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;price_range=200-299">¥200-¥299</a>
                            </li>
                                                        <li>
                                <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc&amp;price_range=300-0">¥300以上</a>
                            </li>
                                                    </ul> -->
                    <!-- </div>
                </div>  -->
                                            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="col-main one-whole">
            <div class="category-filters clearfix">

   <!--  <div class="sort-filter">
        <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=sequence-desc" class="active">
            <em>默认</em>
        </a>

        <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=price-asc">
            <em>价格</em>
                                        
                                                </a>

        <a href="http://www.opposhop.cn/products?is_promotion=0&amp;category=2&amp;sort=time-desc">
        <em>最新</em>
        </a>
        <a href="javascript:;" class="filter-select" id="select-products"><em>筛选</em></a>
    </div> -->
</div> 
<div class="category-products">

  <div class="products-grid grid-box slab-white equalize">
  <foreach name='data' item='vo'>
    <div class="box " style="height: 418px;">
      <a target="_blank" href="{:U('Part/detail',array('id'=>$vo['id']))}" title="">
        <div class="box-photo">
          <img alt="" title="" src="__PUBLIC__/{$vo.pic}">
        </div>
      </a>
      <h2 class="box-heading">
        <a target="_blank" href="http://www.opposhop.cn/products/328.html" title=""></a>
        <a target="_blank" href="http://www.opposhop.cn/products/328" title="时尚单品OPPO自拍杆  樱花粉">{$vo.pname}&nbsp;&nbsp;{$vo.color}</a>
      </h2>
      <div class="box-details">
        <p class="box-price">
          <span class="normal">&nbsp;</span>
          <strong>￥{$vo.price}</strong>
        </p>
      </div>
      <i class="ribbon    ribbon-cheap "></i> 
    </div>  
    </foreach> 
  </div>

</div>
            </div>
                    </div>
                
            </div>
            <section class="wrapper brick" id="goods_view_history" style="display:none">
            <h1 class="h-gamma center-text">您最近浏览过的产品</h1>
            <div class="g grid-box slab-white equalize" id="goods_view_history_list">
                                                                                                                                  </div>
        </section>
      </main>
    <div class="selector-menu" id="selector-filter">
        <div class="navigation-bar">
            <div class="navigation-left"><a href="javascript:;" id="filter-cancel">取消</a></div>
            <div class="navigation-center">筛选</div>
            <div class="navigation-right"><a href="javascript:;" id="filter-confirm">确定</a></div>
        </div>
        <ul class="selector-list">
                                    <li class="list-item" data-selector-bind="category">
                <a href="javascript:;" class="list-label">选择分类<em>全部配件</em></a>
                <div class="list-select">
                    <ul class="attributes">
                        <li class="checked"><a href="javascript:;" data-selector-value="2">全部配件</a></li>
                                                <li><a href="javascript:;" data-selector-value="7">保护套</a></li>
                                                <li><a href="javascript:;" data-selector-value="8">贴膜</a></li>
                                                <li><a href="javascript:;" data-selector-value="15">适配器</a></li>
                                                <li><a href="javascript:;" data-selector-value="5">数据线</a></li>
                                                <li><a href="javascript:;" data-selector-value="19">蓝牙耳机</a></li>
                                                <li><a href="javascript:;" data-selector-value="4">有线耳机</a></li>
                                                <li><a href="javascript:;" data-selector-value="18">蓝牙音箱</a></li>
                                                <li><a href="javascript:;" data-selector-value="9">移动电源</a></li>
                                                <li><a href="javascript:;" data-selector-value="11">VOOC闪充</a></li>
                                                <li><a href="javascript:;" data-selector-value="10">智能配件</a></li>
                                                <li><a href="javascript:;" data-selector-value="16">其它</a></li>
                                            </ul>
                </div>
            </li>
                                                            <li class="list-item" data-selector-bind="phone_spu">
                                <a href="javascript:;" class="list-label">适用机型<em>全部</em></a>
                
                                <div class="list-select">
                    <ul class="attributes">
                        <li class="checked"><a href="javascript:;">全部</a></li>
                                                                        <li><a href="javascript:;" data-selector-value="52">1100</a></li>
                                                <li><a href="javascript:;" data-selector-value="53">1105</a></li>
                                                <li><a href="javascript:;" data-selector-value="67">R3</a></li>
                                                <li><a href="javascript:;" data-selector-value="68">R5</a></li>
                                                <li><a href="javascript:;" data-selector-value="69">R830</a></li>
                                                <li><a href="javascript:;" data-selector-value="70">R830S</a></li>
                                                <li><a href="javascript:;" data-selector-value="71">R2010</a></li>
                                                <li><a href="javascript:;" data-selector-value="72">R2017</a></li>
                                                <li><a href="javascript:;" data-selector-value="73">R6007</a></li>
                                                <li><a href="javascript:;" data-selector-value="121">A31</a></li>
                                                <li><a href="javascript:;" data-selector-value="123">U3</a></li>
                                                <li><a href="javascript:;" data-selector-value="131">N1</a></li>
                                                <li><a href="javascript:;" data-selector-value="54">1107</a></li>
                                                <li><a href="javascript:;" data-selector-value="56">3000</a></li>
                                                <li><a href="javascript:;" data-selector-value="57">3005</a></li>
                                                <li><a href="javascript:;" data-selector-value="59">3007</a></li>
                                                <li><a href="javascript:;" data-selector-value="60">Find7</a></li>
                                                <li><a href="javascript:;" data-selector-value="62">N1mini</a></li>
                                                <li><a href="javascript:;" data-selector-value="65">R1C</a></li>
                                                <li><a href="javascript:;" data-selector-value="64">N3</a></li>
                                                <li><a href="javascript:;" data-selector-value="66">R1S</a></li>
                                                <li><a href="javascript:;" data-selector-value="152">R7</a></li>
                                                <li><a href="javascript:;" data-selector-value="160">R7特别版 喋喋phone</a></li>
                                                <li><a href="javascript:;" data-selector-value="168">A11</a></li>
                                                <li><a href="javascript:;" data-selector-value="170">R7Plus</a></li>
                                                <li><a href="javascript:;" data-selector-value="179">A33</a></li>
                                                <li><a href="javascript:;" data-selector-value="180">R7s</a></li>
                                                <li><a href="javascript:;" data-selector-value="181">A53</a></li>
                                                <li><a href="javascript:;" data-selector-value="182">R7Plus高配版</a></li>
                                                                    </ul>
                </div>
                            </li>
                                    <li class="list-item" data-selector-bind="price_range">
                <a href="javascript:;" class="list-label">价格<em>全部</em></a>
                <div class="list-select">
                    <ul class="attributes">
                        <li class="checked"><a href="javascript:;">全部</a></li>
                                                <li><a href="javascript:;" data-selector-value="0-99">¥0-¥99</a></li>
                                                <li><a href="javascript:;" data-selector-value="100-199">¥100-¥199</a></li>
                                                <li><a href="javascript:;" data-selector-value="200-299">¥200-¥299</a></li>
                                                <li><a href="javascript:;" data-selector-value="300">¥300以上</a></li>
                                            </ul>
                </div>
            </li>
                                </ul>
        <div class="action-bar">
            <a href="javascript:;" id="filter-clean">清除选项</a>
        </div>
    </div>
  <div class="selector-overlay" id="selector-overlay"></div>

       <footer class='main-footer'>
  <div class='footer-prominent-area'>
    <div class='wrapper g'>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          primary
        ' href='http://www.oppo.cn/' title="OPPO社区" target='_blank'><span class='img'><img alt='OPPO社区' title="OPPO社区" src="{{asset('Home/images/201502270202233FZ8VzjUJgb2YsLn.png')}}"></span><span class='text'>OPPO社区</span></a>
  </div>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          secondary
        ' href='http://www.coloros.com/' title="ColorOS" target='_blank'><span class='img'><img alt='OPPO ColorOS' title="ColorOS" src="{{asset('Home/images/20150227020237clUXgMcj3UhukiC0.png')}}"></span><span class='text'>ColorOS</span></a>
  </div>
    <div class='gi lap-one-third'>
    <a class='footer-prominent-button
          primary
        ' href="{:U('App/index')}" title="软件商店" target='_blank'><span class='img'><img alt='OPPO软件商店' title="软件商店" src="{{asset('Home/images/20150314030306RfYFRTucS1nB3wtQ.png')}}"></span><span class='text'>软件商店</span></a>
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
            <img src="{{asset('Home/images/wx.png')}}" class="wx-float" alt=""> 
          </a>
                    <a href='http://career.oppo.com' target='_blank' class='text text-link'>加入我们</a>
          <a href='http://www.oppo.com/cn/service/help?name=sourcing' target='_blank' class='text text-link'>采购相关</a>
        </p>
      </div>
      <div class='footer-subscribe lap-one-half desk-lap-one-third align-right'>
        <!-- <div class='g'>
          <div class='gi lap-one-whole one-whole'>
            <a href='#' id="btn-kf"><img src='__PUBLIC__/Home/images/zxkf.png')}}' /></a>
          </div>
          <div class='gi footer-lap-hide one-third'><img alt='' src='__PUBLIC__/Home/images/m.jpg' /></div>
        </div> -->
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

  <div class='footer-info'>
    <div class='wrapper'>
      <p class='copy'>{$desc['copyright']}</p>
      <a href="http://wljg.gdgs.gov.cn/corpsrch.aspx?key=441900000436441" target="_blank" title="企业名称：广东欧珀电子工业有限公司
法定代表人：金乐亲
标识状态：已激活 粤工商备E191512001248
电子标识有效期：2015-12-14～2020-12-16" class="footer-identification"><img src="{{asset('Home/images/20141126002933.png')}}" alt="" style="border:0;"></a>
      <!-- <div class='chat-structure'>
        <div class='online-chat'>
          <a href='#' id="btn-kf">
            <div class='online-chat-info'>
              <img alt='' src='/cn/media/images/chat.png')}}' />
              <div class='info'>
                <p>在线客服</p>
                <p>工作时间：08:30 - 22:00</p>
                <p>7x24小时客服电话：4001-666-888</p>
              </div>
            </div>
          </a>
          <a href="#">
            <div class='online-chat-icon'>
              <span class='icon icon-top'></span>
            </div>
          </a>
        </div>
        <a class='qr-button' id='btn-qr'>
          <div class='picture'>
            <img alt='' src='/cn/media/images/qr.png')}}' />
          </div>
        </a>
        <div class='qr-code' id='qr-code'>
          <div class='qr-image'>
            <img alt='' src='/cn/media/images/wx.png')}}' />
          </div>
          <div class='qr-description'>
            <p>扫描二维码关注</p>
            <p>OPPO官方微信</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</footer>

<div class='navi-scroll'>
  <div class="navi-scroll-content">
    <a href="javascript:;" class="scroll-top-btn"><span>回到顶部</span><i></i></a>
    <a href="{:U('FeedBack/index',array('id'=>$_SESSION['login']))}" target="_blank" class="survey-btn survey-btn-normal"><span>意见反馈</span><i></i></a>
    <a href="http://www.wenjuan.com/s/V7bume6/" class="survey-btn survey-btn-mobile"><span>意见反馈m</span><i></i></a>
  </div>
</div>

<!-- <script src="http://www.oppo.com/cn/lib/jquery-1.9.1.min.js')}}"></script>

<script src="http://www.oppo.com/cn/lib/underscore-min.js')}}"></script>

<script src="http://www.oppo.com/cn/lib/slick.min.js')}}"></script>

<script src="http://www.oppo.com/cn/lib/responsive.js')}}"></script>

<script src="http://www.oppo.com/cn/lib/picturefill.min.js')}}"></script>
 -->
<script src="{{asset('Home/js/lib.min.js')}}"></script>

<script src="{{asset('Home/js/custom_form.js-v=20150914144728')}}"></script>

<script src="{{asset('Home/js/scripts.js-v=201506151120596')}}"></script>

<script src="{{asset('Home/js/oppo.min.js-v=20160121142624')}}"></script>


</body>

</html>