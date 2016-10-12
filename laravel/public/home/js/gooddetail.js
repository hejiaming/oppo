$(function(){
	//切换商品详情和用户评价
	$('#goodsdetail').click(function(){
		$('#goodsdetail_on').css('display','block');
		$('#assess_on').css('display','none');
		$(this).parent().attr('class','oppo-tj y-tab-active');
		$('#assess').parent().removeClass('y-tab-active');
	});
	$('#assess').click(function(){
		$('#assess_on').css('display','block');
		$('#goodsdetail_on').css('display','none');
		$(this).parent().attr('class','oppo-tj y-tab-active');
		$('#goodsdetail').parent().removeClass('y-tab-active');
	});
	//点击评价按钮
	$('#go-comment').click(function(){
		if($(this).attr('data-type') == $(this).attr('data-gid')){
			$('#click_assess').css('display','block');
			$('#comments').css('display','none');
		}else{
			alert('您还没有购买这件商品')
		}
		
	})
	//取消按钮
	$('#cancel-comment').click(function(){
		$('#click_assess').css('display','none');
			$('#comments').css('display','block');
	})
	//提交评价
	$('#submit-comment').click(function(){
		var gid = $(this).attr('data');
		var stars = $('.radio-check:checked').val();
		var acontent = $('#comment').val();
		// alert(acontent);
		$.post('../../../../../Assess/add',{gid:gid,stars:stars,acontent:acontent},function(msg){
			if(msg == 'yes'){
				$('#click_assess').css('display','none');
				$('#comments').css('display','block');
				alert('评价成功');
				location.reload(true);
			}else{
				alert('评价失败');
			}
		});
	});
})