$(function(){
	//点击立即购买
	$('#go-buy').click(function(){
		$('.dialog-content').css('display','block');
	})
	//取消按钮
	$('#dis-userinfo').click(function(){
		$('.dialog-content').css('display','none');
	})
	//提交按钮
	$('#submit-userinfo').click(function(){
		var gid = $('#go-buy').val();
		var money = $('#go-buy').attr('data');
		var aid = $('#ad-id').val();
		var people = $('#ad-people').val();
		var phone = $('#ad-phone').val();
		var address = $('#ad-address').val();
		
		$.post('../../../../../Order/buy',{gid:gid,money:money,aid:aid,people:people,phone:phone,address:address},function(msg){
			if(msg == 'yes'){
				// alert('ok');
				location.href = '../../../../../Order/pay';
			}else{
				alert('购买失败');
			}
		})
	})
})