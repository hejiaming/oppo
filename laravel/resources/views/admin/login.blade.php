<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>会员登陆</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('myadmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{asset('myadmin/bootstrap/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" /> 
    <!-- Theme style -->
    <link href="{{asset('myadmin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('myadmin/plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="bootstrap/js/html5shiv.min.js"></script>
        <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page" style="background:url({{asset('myadmin/image/111.jpg')}});"/>
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>管理员登陆页</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      @if(session("msg"))
        <p class="login-box-msg" style="color:red;">{{session("msg")}}</p>
        @else
        <p class="login-box-msg" style="font-size:24px;">OPPO后台登录</p>
        @endif

        <form action="{{url('admin/doLogin')}}" method="post">
          <div class="form-group has-feedback">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="text" name="name" class="form-control" placeholder="name"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col-xs-6"> 
              <div class="form-group has-feedback" style="width:140px;">
                <input type="text" class="form-control" name="mycode" placeholder="code"/>
                <span class="glyphicon glyphicon-th form-control-feedback"></span>
              </div>
          </div>
          <div class="col-xs-6">
              <img src="{{url('admin/getCode/time()')}}" onclick="this.src='{{ URL('admin/getCode') }}/'+Math.random()" width="145" height="35" />
          </div>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" >&nbsp;&nbsp; <span style="font-size:12px; color:#3C8DBC;" >记住我</span>
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">登 陆</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#" style="font-size:12px;">忘记密码</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="register.html" class="text-center" style="font-size:12px;">注册会员</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('myadmin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('myadmin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>  
    <!-- iCheck -->
    <script src="{{asset('myadmin/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
