$(function(){

//点击兑换
$('#exchange').click(function(){

	//获取实际兑换分
	var score = $('#result-points').html();
	var result = confirm('您确定要花费'+score+'积分兑换吗？');

	//判断用户是否兑换
    if(result){
	        $.post('../../exchange',{score:score},function(msg){
				if (msg == 1) {
					alert('兑换成功,已扣除您'+score+'积分。');//订单未做
				} else {
					alert('兑换失败,您的积分不够,继续努力哦。');
				}
			},'json')
    }else{
    }
    return false;
});
})