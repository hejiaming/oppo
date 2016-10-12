window.onload=function(){

//声明全局变量检测input值 是否输入正确
		var OK = false;//声明全局变量用来检测默认行为的提交
		var CUSER = false;//用户名
		var CPWD = false;//密码
		var CREPWD = false;//确认密码
		var CCODE = false;//验证码
		var CNOTE = false;//短信验证码
		var CALLOW = false;//验证服务
		var DX = null;//接受短信验证ajax返回据
		$('#sj').hide();//验证信息初始为隐藏

	//手机号丧失焦点事件
	$('input[name=phone]').blur(function(){
			//获取用户名的值
			var username = $(this).val();
			if(username.length == 0 ){
				//修改提示信息
				$(this).next().html('请输入手机号').css('color','red');
				CUSER = false;
			}else{
				//检测用户名的格式是否ok
				var reg = /^1\d{10}$/;//
				//检测   exec
				var res = reg.test(username);
				//用户名的格式i错误
				if(!res){
					$(this).next().html('格式错误').css('color','red');
					CUSER = false;
					return false;
				}else{
					$(this).next().html("输入正确 √").css('color','green');
					CUSER = true;
				}
			}
			if(CUSER != true){
				$('#sj').hide();
			}else{
				$('#sj').show();
			}
	})

	//检测密码
	$('input[name=password]').blur(function(){
		
		//获取当前密码值
		var pwd = $(this).val();
		if(pwd.length == 0 ){
				//修改提示信息
				$(this).siblings().next().html('请输入密码').css('color','red');
				CPWD = false;
			}else{
				//匹配正则
				var reg = /^\S{5,16}$/;
				//反向判断
				if(!reg.test(pwd)){
					$(this).siblings().next().html('密码格式错误').css('color','red');
					 CPWD = false;
				}else{
					$(this).siblings().next().html("输入正确 √").css('color','green');
					 CPWD = true;
				}
		}
	});

	//检测确认密码	
	$('input[name=repassword]').blur(function(){
		//获取当前密码值
		var pwd = $('input[name=password]').val();

		//获取当前确认密码的值
		var repwd = $(this).val();
		if(repwd.length == 0 ){
				//修改提示信息
				$(this).next().html('请填写确认密码').css('color','red');
				CREPWD = false;
			}else{
				if(pwd != repwd ){
					//修改提示信息
					$(this).next().html('两次密码不一致').css('color','red');
					CREPWD = false;
				}else{
					$(this).next().html("输入正确 √").css('color','green');
					CREPWD = true;
				}
		}
	});

	//检测验证码
	$('input[name=vcode]').blur(function(){
		//获取当前验证码
		var code = $(this).val();
		//判断如果验证码为空
		if(code.length == 0){
			$(this).next().html('验证码不能为空').css('color','red');
			CCODE = false;
		}else{
			//如果不为空 发送ajax效验验证码
			var inp = $(this);
			$.ajax({
				url:'checkcode',
				data:{code:code},
				type:'post',
				async:false,//设置同步
				success:function(data){
					//如果验证码错误
					if(data==1){
						var str = "验证码错误";
						inp.next().html(str).css('color','red');
						CCODE = false;
					}else{
						inp.next().html("输入正确 √").css('color','green');
						CCODE = true;
					}
				}
			})
		}
		
	});

	//点击短信验证
	$('#but').click(function(){
			//获取用户输入的手机号
			var phone = $('input[name=phone]').val();
			//console.log(phone);
			//获取用户输入的短信验证码
			//var pvalue = $('input[name=phonecode]').val();
			
			//当获取正确的用户输入的手机号时 向用户发送验证信息
			$.ajax({
					url:'note',
					data:{phone:phone},
					type:'post',
					async:false,//设置同步
					success:function(data){
						if(data !== 'no'){
							if (data !== 0) {
								alert('发送成功');
								//检测用户输入的短信验证码
								DX = ''+data+'';
								console.log(DX);
							} else {
								alert('发送失败');
							}
						}else{
							alert('用户名已经存在');
						}
					}
				})
	});

	//失去焦点短信验证
	$('input[name=phonecode]').blur(function(){
		var pv = $(this).val();
		//console.log(pv);
		//console.log(DX);
		//alert(DX);
		if(pv != DX){
			var str = "短信码错误";
			$('#but').parents('.g').next().html(str).css('color','red');
			CNOTE = false;
		}else{
			var str = "短信码正确";
			$('#but').parents('.g').next().html(str).css('color','green');
			CNOTE = true;
		}
	});
	
	
	//在全部输入正确时 才允许提交
	$('form').submit(function(){
		($("#allow").attr("checked"))
		if($("#allow").attr("checked") == "checked"){
		CALLOW = true;
		//alert(CALLOW);
		}	
		// console.log(CNOTE);
		//判断全局变量值全相等
		if(CUSER && CPWD && CREPWD && CCODE && CNOTE && CALLOW ){
				OK = true;
			}
			//阻止默认行为
			if(!OK){
				return false;
			}else{
				OK = false;
			}	
	});

};