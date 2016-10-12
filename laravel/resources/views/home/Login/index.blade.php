<extend name="Public:head-footer" />
<block name="header-link">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/login.css')}}" media="all">
<script type="text/javascript" src="{{ asset('Home/js/Login.js')}}"></script>
<script type="text/javascript" src="{{ asset('Home/js/jquery-1.8.3.min.js')}}"></script>
</block>
<block name="body-header">
<header class="main-header login-header">
  <div class="upper-area">
    <div class="wrapper g">
       </div>
  </div>
  <div class="bottom-area">
    <div class="wrapper">
      <a href="
      " data-tj="account|link|auth|openmenu" class="js-open-menu oppo-tj">
        <i class="js-open-menu-bar"></i>
      </a>
      <div class="login-home">
        <a data-tj="account|link|auth|home" class="oppo-tj" href="{:U('Home/Index/index')}"><span class="icons-plus icons-plus-home"></span><span>回到首页</span></a>
        <a data-tj="account|link|auth|register" class=" oppo-tj" href="{:U('Home/Add/index')}"><span class="icons-plus icons-plus-user"></span><span>注册</span></a>
      </div>
      <div class="logo">
        <a href="">
          <img src="tupian" style="width:190px;height:31px" alt="">
        </a>
      </div>
      <a href="" data-tj="account|link|auth|openusermenu" class="js-open-user oppo-tj">
        <img src="{{ asset('Home/Images/icon-menu-user.png')}}" alt="">
      </a>
            <div class="login-breadcrumb">登录OPPO帐号</div>
            <div class="main-menu">
            </div>
           </div>
    </div>
  
  

  <div class="languages-panel" style="display: none;"></div>
</header>	
</block>  
<block name="main-content">
 <main class="main-content slab-light">
  <div class="wrapper login">
    <div class="g">
      <div class="gi desk-two-thirds login-wrapper login-ad">
        <img src="{{ asset('Home/Images/login-product-r7s.png')}}">
      </div>
      <div class="gi desk-one-third one-whole login-wrapper login-form">
        @if(session("msg"))
        <p class="login-box-msg" style="color:red;">{{session("msg")}}</p>
        @else
        <p class="login-box-msg" style="font-size:24px;">OPPO前台登录</p>
        @endif
        <form action="{{url('/home/doLogin')}}" method="post">
          <div class="field login-title">欢迎登录OPPO帐号</div>

          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <ul class="list-unstyled">
                  <strong class="error_msg_note">
                                      </strong>
                </ul>
              </div>
            </div>
          </div>

          <div class="field">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input placeholder="手机号" name="phone" value="" type="text">
            <span></span>
          </div>

          <div class="field">
            <p class="instructions"></p>
          </div>
          <div class="field">
            <input placeholder="密码" name="password" value="" type="password">
            <span></span>
          </div>
          <div class="field">
           
            <div class="register-vcode" id="div_geetest_lib  g-hide ">
              <div id="div_id_embed"></div>
            </div>
                                </div>
          <div class="field">
           <!--  <input name="is-show-captcha" id="is-show-captcha" value="0" type="hidden">
            <input name="attack_type" value="2" type="hidden"> -->
            <input class="button login-button" value="登录" type="submit">
          </div>
        </form>
        <div class="field g">
          <div class="gi one-half">
            <a href="{:U('ForgetPassword/user')}" class="text-green oppo-tj" data-tj="account|link|login|forget">忘记密码？</a>
          </div>
          <div class="gi one-half align-right">
            <a href="{:U('Add/index')}" class="text-green oppo-tj" data-tj="account|link|login|register">注册新帐号</a>
          </div>
        </div>
        <div class="field g">
          <!-- <div class="gi desk-one-third one-whole login-ways">其他方式登录</div> -->
          <div class="gi desk-two-thirds one-whole login-ways">
              <a href="" class="oppo-tj" data-tj="account|link|login|qq"><span class="icons-plus icons-plus-qq"></span></a>
              <a href="" class="oppo-tj" data-tj="account|link|login|zfb"><span class="icons-plus icons-plus-zfb"></span></a>
              <a href="" data-tj="account|link|login|weibo"><span class="icons-plus icons-plus-weibo"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</block>
<block name="purchase-advisory"></block>
 <block name="erwai-content">
 	    <div id="account_bg" class="account_bg"></div><div id="account_contain" class="account_contain"></div>


<div class="js-sensor"></div></body>
</html>
<script>
	//声明全局变量检测input值 是否输入正确
/* 		var a = null; 

	$('form').submit(function(){
				//获取用户输入的手机号
				var phone = $('input[name=phone]').val();
				//console.log(phone);
				//获取用户输入密码
				var password = $('input[name=password]').val();
				
				//当获取正确的用户输入的手机号时 向用户发送验证信息
				$.ajax({
						url:'{{("Login/login")}}',
						data:{phone:phone,password:password},
						type:'post',
						async:false,//设置同步
						success:function(data){
							a = data;
							if(data=='no'){
							alert('请输入用户名');
							return false;
							}
						}
					});
			if(a =='no'){
			return false;
			}
		}); */
</script>
 </block> 