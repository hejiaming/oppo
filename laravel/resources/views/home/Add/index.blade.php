<extend name="Public:head-footer" /> 
<block name="header-link">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/Css/zhuce.css')}}" media="all">
<script type="text/javascript" src="{{ asset('Home/js/qtyz.js')}}"></script>
<script type="text/javascript" src="{{ asset('Home/js/jquery-1.8.3.min.js')}}"></script>

</block>  
<block name="body-header">
  <header class="main-header login-header">
	<style>
		#checkeda{
			width:20px;
		}
		#checkedaa{
			width:300px;
			margin-top:-26px;
			margin-left:25px;
		}
		
	</style>
	 <div class="upper-area">
    	<div class="wrapper g">
        </div>
 	 </div>
	 <div class="bottom-area">
    <div class="wrapper">
      <a class="js-open-menu oppo-tj" data-tj="account|link|auth|openmenu" href="#">
        <i class="js-open-menu-bar"></i>
      </a>
      <div class="login-home">
        <a href="{:U('Index/index')}" class="oppo-tj" data-tj="account|link|auth|home"><span class="icons-plus icons-plus-home"></span><span>回到首页</span></a>
        <a href="{:U('Login/index')}" class=" oppo-tj" data-tj="account|link|auth|login"><span class="icons-plus icons-plus-user"></span><span>登录</span></a>
        <a href="" class="hidden oppo-tj" data-tj="account|link|auth|register"><span class="icons-plus icons-plus-user"></span><span>注册</span></a>
      </div>
      <div class="logo">
        <a href="{:U('Home/Index/index')}">
          <img alt="" src="__PUBLIC__/{$data['logo']}" style="width:190px;height:31px"/>
        </a>
      </div>
      <a class="js-open-user oppo-tj" data-tj="account|link|auth|openusermenu" href="#">
        <img alt="" src="{{ asset('Home/Images/icon-menu-user.png')}}">
      </a>
            <div class="login-breadcrumb">注册OPPO帐号</div>
            <div class="main-menu">
        <div class="search"></div>
        </div>
       </div>
       </div>
  </header>
</block>  
<block name="main-content">
	      <main class="main-content slab-light">
    <div class="wrapper login register">
      <div class="brick-bottom">
        <ul class="steps"><li class="one active">
            <div class="step-content">
                            <h5 class="step-heading">填写注册信息</h5>
              <div class="step-gradient"></div>
            </div>
          </li><li class="two">
            <div class="step-content">
                            <h5 class="step-heading">验证信息</h5>
              <div class="step-gradient"></div>
            </div>
          </li><li class="three">
            <div class="step-content">
                            <h5 class="step-heading">注册成功</h5>
              <div class="step-gradient"></div>
            </div>
          </li></ul>
          <div class="register-form">
            <form method="post" action="{:U('index2')}">
           		<style type="text/css">
					span{
                		font-family:微软雅黑;
                		font-size:16px;
           				 } 
           		</style>
              <div class="gi desk-one-quarter lap-hide">&nbsp;</div>
              <div class="gi desk-two-quarters one-whole">
                <div class="login-wrapper">
                  <div class="field">
                    <p>如已有帐号，请<a href="{:U('Home/Login/index')}">点此登录</a></p>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                        <ul class="list-unstyled">
                          <strong class="error_msg_note"></strong>
                        </ul>
                      </div>
                      </div>
                    </div>

                  <div class="field">
                    <input placeholder="手机号" name="phone" value="" type="text">
                    <span></span>
                  </div>
                  <div class="field">
                    <input placeholder="密码 (密码长度6~16位，数字、字母、字符至少包含两种)" name="password" value="" type="password">
                    <div class="g g-wrapper-s register-pass-strong">
                    </div>
                    <span id="s"></span>
                  </div>
                  <div class="field">
                    <input placeholder="确认密码(密码长度6~16位，数字、字母、字符至少包含两种)" name="repassword" value="" type="password">
                    <span></span>
                  </div>

                  <div class="field g register-vcode">
                    <div class="gi two-fifths">
                      <input value="" placeholder="验证码" name="vcode" type="text">
                      <span></span>
                    </div>

                    <div class="gi two-fifths">
                     <img src="{:U('Add/code')}" alt="" id = "img" onclick="this.src=this.src+'?a'">

                    </div>
                    <div onclick = "fun()" class="gi one-fifth"><a class="text-green oppo-tj" >点击更换</a></div>
					<script>
						function fun(){
							var img = document.getElementById('img');
							img.src = img.src+'?a';
						}
					</script>
                    <span class="icon icon-tick-green-big register-icon"></span>
                  </div>
                  <div id="sj" class="field register-mobile">
                    <div class="g">
                      <div class="gi lap-three-fifths">
                        <input value="" placeholder="手机验证码" name="phonecode" class="activation_code" type="text">
                      </div>
                      <div class="gi lap-two-fifths">
                        <button id="but" type="button" href="" class="button btn_get_activation_code oppo-tj" data-tj="account|link|register|getcode">获取验证码</button>
                      </div>
                    </div>
                    <span></span>
                  </div>
				  <div id="checkedaaa">
				  <div id = "checkeda">
						<input id ="allow" name="allowed" type="checkbox" checked="checked"/>
				  </div>
                  <div id = "checkedaa" class="field check-item">
                    <label for="allowed">我已阅读并同意<a href="{:U('Home/Add/fuwu')}" target="_top" class="text-green">《OPPO服务协议》</a></label>
                  </div>
				  </div>
                  <div class="field">
                    <button class="button login-button oppo-tj" type="submit">下一步</button>
                  </div>
                  <div class="field g">
                    <!-- <div class="gi desk-one-quarter one-whole login-ways">其他方式登录</div> -->
                    <div class="gi desk-three-quarters one-whole login-ways">
                        <a href="" class="oppo-tj" data-tj="account|link|register|weibo"><span class="icons-plus icons-plus-weibo"></span></a>
                        <a href="" class="oppo-tj" data-tj="account|link|register|qq"><span class="icons-plus icons-plus-qq"></span></a>
                        <a href="" class="oppo-tj" data-tj="account|link|register|zfb"><span class="icons-plus icons-plus-zfb"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gi desk-one-quarter lap-hide">&nbsp;</div>
            </form>
          </div>
      </div>
</div>
  </main>
</block>  