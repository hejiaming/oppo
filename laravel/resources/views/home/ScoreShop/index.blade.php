<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0023)http://points.oppo.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>{$desc['title']}</title>
	<meta name="baidu-site-verification" content="GwVTTZMBUAV55I4M">
	<!-- SEO-->
	<meta name="description" content="{$desc['description']}">
	<meta name="keywords" content="{$desc['keywords']}">    
    <meta name="author" content="uimix.net">
<!-- CSS-->
<link href="{{asset('Home/css/home.css')}}" media="screen" rel="stylesheet" type="text/css"><link href="{{asset('Home/css/points.css')}}" media="screen" rel="stylesheet" type="text/css"><!-- JS-->
<script id="__clicki_js_tracker_loader__" type="text/javascript" charset="UTF-8" src="{{asset('Home/js/clicki.js')}}"></script><script src="{{asset('Home/js/hm.js')}}"></script><script type="text/javascript" async="" src="{{asset('Home/js/45193')}}"></script><script type="text/javascript" async="" src="{{asset('Home/js/ga.js')}}"></script><script language="javascript" src="{{asset('Home/js/jquery-1.7.2.min.js')}}"></script><script language="javascript" src="{{asset('Home/js/home.js')}}"></script>    <link rel="stylesheet" type="text/css" href="{{asset('Home/css/oppo.banner-2.0.css')}}">
	<script type="text/javascript" src="{{asset('Home/js/oppo.banner-2.0.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $.oppo.banner.init({
                units:$("#oppo-banner").find("div.oppo-banner-unit"),
                btns:$("#oppo-banner").find("div.oppo-banner-btns a"),
                width:830
            });
        });
    </script>
    </head>
	<body>
         <div id="header" style="height:120px;">
    
    <div id="mall-nav">
        <div class="mall-nav-content">
			            <a href="{:U('Home/Index/index')}" onclick="_gaq.push(['_trackEvent', 'PictureClick', 'JiFenShangCheng', 'OPPO']);"><img alt="" src="__PUBLIC__/{$desc['logo']}" style="width:190px;height:31px;margin-top: 25px;" alt="" /></a>
                        
            <div id="newnav" class="mall-nav-right">
                <div class="mall-nav-links">
                        <a href="{:U('Home/Index/index')}" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;ShouYe&#39;]);">首页</a>
                        <a href="{:U('Goods/index')}" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;ShouJi&#39;]);">手机</a>
                        <a href="{:U('Part/index')}" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;PeiJian&#39;]);">配件</a>
                        <a href="http://www.oppo.com/cn/service" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;FuWu&#39;]);">服务</a>
                        <a href="{:U('Store/index')}" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;ZhuanMaiDian&#39;]);">体验店</a>
                        <a href="{:U('App/index')}" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;YingYongShangDian&#39;]);">应用商店</a>
                        <a href="http://www.coloros.com/" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;ColorOS&#39;]);">ColorOS</a>
                        <a href="http://www.oppo.cn/" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;SheQu&#39;]);">社区</a>
                    </div>
                    <div class="search-form" style="display:none;">
                        <input type="text" class="mall-search" disabled="disabled" placeholder="Search">
                        <input type="submit" class="submit-search" disabled="disabled" onclick="oppo.search.action($(&#39;.mall-search&#39;).val())">
                    </div>
            </div>
        </div>
    </div>
    <div class="head-shadow"></div>
</div>
		<div id="content">
            <div class="points-container" id="points">
                <div class="points-unit" id="points-bread-crumb">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <a href="{:U('Index/index')}" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;PictureClick&#39;, &#39;JiFenShangCheng&#39;, &#39;ZuoCeDaoHang&#39;]);"><img src="{{asset('Home/uploads/home.png')}}"></a><span>&nbsp;&gt;&nbsp;</span><span>积分商城</span>
                        </div>
                    </div>
                </div>
                <div class="points-unit">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <if condition="$_SESSION['login'] eq null">
                            <div class="points-rowspan" id="points-user">
                                    <div class="points-user-title"><img src="{{asset('Home/uploads/user-title.png')}}"></div>
                                    <div class="points-user-intro">登录后您将获得的服务：</div>
                                    <div class="points-user-text">1.马上查看自己的积分明细。</div>
                                    <div class="points-user-text">2.立即兑换礼品。</div>
                                    <div class="points-user-login"><a href="{:U('Home/login/index')}">立即登录</a></div>
                            </div>
                            <else />
                            <style type="text/css">
                                #points-user { width: 290px; padding: 30px; color: rgb(152, 152, 152); }
                                
                                #points-user {
                                    color: rgb(152, 152, 152);
                                    padding: 30px;
                                    width: 290px;
                                }
                                .points-rowspan {
                                    float: left;
                                }
                                .points-user-name { text-align: center; font-weight: bold; font-size: 18px; line-height: 30px;}
                                .points-user-points { font-size: 12px; line-height: 35px; height: 35px; padding: 2px 0px; border-top: 1px solid rgb(230, 230, 230); border-bottom: 1px solid rgb(230, 230, 230); display: block; width: 100%; }
                                .points-user-point { float: left; width: 49%; text-indent: 20px; }
                                .points-user-point2 { border-left: 1px solid rgb(230, 230, 230); }
                                .points-user-how { margin-top: 10px; }
                                .points-user-more { text-align: center; margin-top: 5px; }

                                .points-user-more a { color: rgb(3, 183, 136) ! important; font-size: 12px; line-height: 24px; text-decoration: underline ! important; }
                                .points-user-text2 { font-size: 12px; line-height: 20px; }
                                .points-user-question { text-align: right; }

                                .points-user-avatar { text-align: center; }
                            </style>
                            <div class="points-rowspan" id="points-user">
                                    <div class="points-user-avatar"><img src="__PUBLIC__/{$userdetail['0']['photo']}" style="width:120px;border-radius:50%;"></div>
                                    <div class="points-user-name">Hi,&nbsp;<span style="color: #03B788; ">{$userdetail['0']['usernames']}</span></div>
                                    <div class="points-user-points">
                                        <div class="points-user-point">我的积分：<span>{$userdetail['0']['score']}</span></div>
                                        <div class="points-user-point points-user-point2">可用积分：<span>{$userdetail['0']['score']}</span></div>
                                    </div>
                                    <div class="points-user-more"><a href="">积分明细查询</a></div>
                                    
                                    <div class="points-user-how"><a>如何获得积分？</a></div>
                                    <div class="points-user-text2">在OPPO网站购物，订单签收后，您会收到冻结状态的积分，在没有发生退货的情况下，冻结积分将在7天之后激活。</div>
                                    <div class="points-user-question"><a href="">更多常见问题</a></div>
                            </div>
                            </if>



                                <div class="points-rowspan" id="points-banner">
                                <div class="oppo-banner" id="oppo-banner">
                                <div style="display: block;" class="oppo-banner-unit"><a href="http://store.oppo.com/goods/407" target="_blank" onclick="_gaq.push(['_trackEvent', 'PictureClick', 'JiFenShangCheng', 'LunBoTu-1']);"><img src="{{asset('Home/uploads/142353370048019.jpg')}}" height="390" width="830"> </a></div>
                                                                                                                            >
                         </div>
                        </div>
                    </div>
                </div>
                                <div class="points-unit points-list-bar">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <div class="points-list-title">   <img src="{{asset('Home/uploads/list-title.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="points-unit points-list">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <!--遍历积分商品-->
                            <foreach name="data" item="vo">
                            <div class="points-list-product  ">
                                <a href="{:U('ScoreShop/sdetail',array('id'=>$vo['id']))}" target="_blank" <if condition="$_SESSION['login'] eq null">onclick="alert('请您登录后再来兑换！');return false;"</if>><div class="points-product-image"><img src="__PUBLIC__/{$vo.sphoto}" height="146" width="140"></div>
                                <div class="points-product-name">{$vo.sname}</div>
                                <div class="points-product-point">{$vo.sscore}</div>
                                <div class="points-product-btn"><span>立即兑换</span></div></a>
                            </div>
                            </foreach>
                            <!--遍历积分商品结束-->
                        </div>
                    </div>
                </div>
                                                                                                                    
                <div class="points-unit" id="points-rule">
                    <div class="points-wrapper">
                        <div class="points-rows">
                            <div class="points-rule-title">积分兑换规则</div>
                            <div class="points-rule-subtitle">积分获得</div>
                            <div class="points-rule-text">1.用户在OPPO网站购物，按消费金额进行积分，1元=1分，如：会员消费3498元，则积3498分；如遇特殊积分活动，积分计算以活动规定为准；</div>
                            <div class="points-rule-text">2.订单签收后，用户会收到冻结状态的积分，在没有发生退货的情况下，冻结积分将在7天之后激活；如发生退换货，将从积分中扣除由于退换货部分产生的积分差额；</div>
                            <div class="points-rule-subtitle">积分兑换</div>
                            <div class="points-rule-text">1.会员积分可在OPPO官网或指定OPPO体验店兑换相应礼品或配件券，兑换成功后将从会员帐户中扣减相应积分分值；</div>
                            <div class="points-rule-text">2.积分兑换的礼品会定期更新，数量有限，先兑先得，兑完为止；</div>
                            <div class="points-rule-text">3.所有礼品兑换不提供任何发票或报销单据；所有礼品兑换均不提供更换、退货、售后等服务，请仔细看准后再进行兑换； </div>
                            <div class="points-rule-text">4.积分兑换的配件券产生的购物订单如遇退换货，配件券不予返还；</div>
                            <div class="points-rule-text">5.积分兑换的礼品（实物类）统一采用EMS发货。</div>
                            <div class="points-rule-subtitle">温馨提示</div>
                            <div class="points-rule-text">1.积分只在同一会员帐户内累计，不同帐户的积分不能合并。</div>
                            <div class="points-rule-text">2.每一笔积分从产生之日起2年内有效，过期清零。</div>
                            <div class="points-rule-text">3.积分详情可登录OPPO官网 <a href="" target="_blank" onclick="_gaq.push([&#39;_trackEvent&#39;, &#39;TextLineClick&#39;, &#39;JiFenShangCheng&#39;, &#39;GeRenZhongXin-WoDeJiFen&#39;]);">个人中心 &gt; 我的积分</a> 模块查询</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
		<div id="footer">
		<!-- <div class="foot-tags">
			<div class="foot-tag1"></div>
			<div class="foot-tag2"></div>
			<div class="foot-tag3"></div>
			<div class="foot-tag4" onclick="window.open('http://store.oppo.com/help/13')"></div>
			<div class="foot-tag5" onclick="window.open('http://www.oppo.com/?q=service/network')"></div>
		</div> -->
		<div class="foot-links">
			<ul class="foot-links-content">
				<li>
					<div class="title">关于我们</div>
					<a target="_blank" href="http://www.oppo.com/index.php?q=article/index&amp;cid=3">关于OPPO</a>
					<a target="_blank" href="http://www.oppo.com/index.php?q=article/">新闻中心</a>
                    <a target="_blank" href="http://career.oppo.com/">人才招聘</a>
				</li>
				<li>
					<div class="title">推荐机型 </div>
					<a href="http://store.oppo.com/goods/407" target="_blank">N3</a>
					<a href="http://store.oppo.com/goods/474" target="_blank">R5</a>
					<a href="http://store.oppo.com/goods/441" target="_blank">R1C</a>
					<a href="http://store.oppo.com/goods/304" target="_blank">Find 7</a>
				</li>
                                <li>
					<div class="title">购物相关</div>
                        <a target="_blank" href="http://points.oppo.com/help">帮助中心</a>
                        <a target="_blank" href="http://points.oppo.com/parts">周边产品</a>
						<a target="_blank" href="http://www.oppo.com/index.php?q=service/oppostore/">OPPO体验店</a>
						<a href="http://points.oppo.com/help/16" target="_blank">客户服务保障</a>
				</li>
				<li>
					<div class="title">会员中心</div>
					<a target="_blank" rel="nofollow" href="https://account.oppo.com/index.php?q=regproduct/register&amp;ddname=newregproducts">产品注册</a>
					<a target="_blank" rel="nofollow" href="https://account.oppo.com/index.php?q=user/register&amp;back=http%3A%2F%2Fwww.oppo.com%2F%3Fq%3Dservice%2Foppostore%2Fp%2F%25E5%25B9%25BF%25E4%25B8%259C%2Fc%2F%2Fg%2F1">会员注册</a>
					<a target="_blank" rel="nofollow" href="https://account.oppo.com/index.php?q=user/login&amp;back=http%3A%2F%2Fwww.oppo.com%2F%3Fq%3Dservice%2Foppostore%2Fp%2F%25E5%25B9%25BF%25E4%25B8%259C%2Fc%2F%2Fg%2F1">会员登录</a>
				</li>
				<li>
					<div class="title">关注我们</div>
					<a href="http://e.weibo.com/oppo" class="sina" target="_blank">新浪微博</a>
					<a href="http://e.t.qq.com/oppo_com" class="qq" target="_blank">腾讯微博</a>
					<a href="http://page.renren.com/600895922?checked=true" class="renren" target="_blank">人人网</a>
					<a href="http://user.qzone.qq.com/706290143" class="qzone" target="_blank">QQ空间</a>
				</li>
				<li>
					<div class="title">联系我们</div>
					<div class="foot-tel">
						<p class="foot-wz-01 foot-tel-01">4001-666-888</p>
						<p class="foot-wz-02">7*24小时客服电话</p>
					</div>
					<div class="foot-zxkf">
						<p class="foot-wz-01 foot-kf-01">在线客服</p>
						<p class="foot-wz-02">服务时段：8:30--22:00</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="foot-bt">
				<div class="foot-bt-content">
					<div class="left">
						<div class="ft-logo-png"><img src="{{asset('Home/uploads/i-f-logo.png')}}"></div>
                        <div class="ft-info">
                            {$desc['copyright']}
                        </div>
					</div>
					<div class="foot-bt-links">
						<a href="http://www.oppo.com/index.php?q=service/copyright">版权说明</a>
						<a href="http://www.oppo.com/index.php?q=service/agreement">使用协议</a>
						<a href="http://www.oppo.com/index.php?q=service/sitemap">网站地图</a>
						<a href="http://www.oppo.com/index.php?q=service/links">友情链接</a>
                        <a href="http://www.oppo.com/index.php?q=service/contact">联系我们</a>
					</div>
				</div>
		</div>
	</div>
	<!--客户在线咨询-->	
	<div id="customer-service" class="pendant" style="display: none;">
		<!-- <div class="kf_a">
			<div class="pendant_k" style="display:none;">
				<div class="tel">4001-666-888</div>
				<div class="online">
					<p class="online_kf">在线客服</p>
					<p>服务时段：8:30--22:00</p>
					<a class="zx" href="javascript:void(0);"></a>
				</div>
			</div>
			<div class="kefu">
				<a class="pendant_kf" href="javascript:;">客服</a>
			</div>
		</div> -->
		
		
		<div class="top_a">
			<div class="totop">
				<a class="pendant_top" id="totop" href="javascript:;">返回顶部</a>
			</div>
		</div>        
	  </div>
	  <script type="text/javascript">
(function() {
	$("#totop").click(function() {
		$('body,html').animate({
			scrollTop : 0
		}, 100);
		return false;
	});
  })();
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-43523742-1']);
	_gaq.push(['_setDomainName', 'oppo.com']);
	_gaq.push(['_addOrganic', 'soso', 'w']);
	_gaq.push(['_addOrganic', 'youdao', 'q']);
	_gaq.push(['_addOrganic', 'baidu', 'word']);
	_gaq.push(['_addOrganic', 'so', 'q']);
	_gaq.push(['_addOrganic', '360', 'q']); 
	_gaq.push(['_addOrganic', 'sogou', 'query']);
	_gaq.push(['_trackPageview']);
		
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = "{{asset('Home/js/ga.js')}}";
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript">
(function() {
      var c = document.createElement('script'); 
      c.type = 'text/javascript';
      c.async = true;
      c.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'sitemonitor.cn.miaozhen.com/boot/45193';
      var h = document.getElementsByTagName('script')[0];
      h.parentNode.insertBefore(c, h);
})();
</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "{{asset('Home/js/hm.js')}}?9cb8846b548404438c81aaa02eda4f0f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>    

</body></html>