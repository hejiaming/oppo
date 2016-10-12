$(function(){
	//订单详情
	$('.oppo-tj').click(function(){
		$('.opr-order-details').css('display','block');
	});
	//确认支付
	$('#pay_action').click(function(){
		var code = $('.ordercode').text();
		var money = $('#money').val();
		console.log(money);
		$.post('../../Home/Order/dopay',{code:code,money:money},function(msg){
			// console.log(msg);
			if(msg == 'yes'){
				alert('购买成功,相应积分已添加到您的账户');
				location.href = '../../Home/Order/centerindex';
			}else{
				alert('支付失败');
				return false;
			}
		})
	});
})