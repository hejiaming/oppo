$(function(){
	//编辑地址
	$('.edit').click(function(){
		$('.address-edit').css('display','block');
		var people=$(this).attr('people');
		var phone=$(this).attr('phone');
		var address=$(this).attr('address');
		var id=$(this).attr('id');
		
		$('input[name=id]').val(id);
		$('input[name=people]').val(people);
		$('input[name=phone]').val(phone);
		$('input[name=address]').val(address);

		return false;
	});
	//取消修改
	$('.quit').click(function(){
		$('.address-edit').css('display','none');
	});
	//取消修改
	$('.qx').click(function(){
		$('.address-form').css('display','none');
	});
	//添加地址
	$('.addressAdd').click(function(){
		var people=$('input[name=people1]').val();
		var phone=$('input[name=phone1]').val();
		var address=$('input[name=address1]').val();
		$.post('../../Home/Address/add',{people:people,phone:phone,address:address},function(msg){
			if(msg == 'yes'){
				alert('成功');
				$('.address-form').css('display','none');
				location.reload(true);
			}else{
				alert('为保证您能顺利收货,请完整填写信息');
			}
		})

		return false;

	});
	//修改地址
	$('.addressEdit').click(function(){
		var people=$('input[name=people]').val();
		var phone=$('input[name=phone]').val();
		var address=$('input[name=address]').val();
		var id=$('input[name=id]').val();
		$.post('../../Home/Address/edit',{people:people,phone:phone,address:address,id:id},function(msg){
			if(msg == 'yes'){
				alert('成功');
				$('.address-edit').css('display','none');
				location.reload(true);
			}else{
				alert('修改失败,请完整填写信息');
			}
		})

		return false;

	});
	//删除地址
	$('.removeaddress').click(function(){
		var id=$(this).attr('id');
		$.post('../../Home/Address/del',{id:id},function(msg){
			if(msg == 'yes'){
				alert('删除成功');
				location.reload(true);
			}else{
				alert('删除失败');
			}
		})
	});
	//添加地址按钮
	$('#address_new').click(function(){
		$('.address-form').css('display','block');
		$('input[name=people]').val('');
		$('input[name=phone]').val('');
		$('input[name=address]').val('');

		return false;
	});
	//切换地址
	$('.address_list_0').toggle(function(){
		$(this).find('.radio').addClass('checked_radio');
		$(this).find('input[name=cheakadd]').attr('checked','true');
		$(this).siblings().find('.radio').removeClass('checked_radio');
		$(this).siblings().find('input[name=address]').removeAttr('checked');

		},
		function(){
			$(this).find('.radio').removeClass('checked_radio');
			$(this).find('input[name=cheakadd]').removeAttr('checked');
			$(this).siblings().find('input[name=cheakadd]').removeAttr('checked');

			$(this).siblings().find('.radio').removeClass('checked_radio');

		}

	);
	//发票按钮
	$('#update-invoice-btn').click(function(){
		$('#invoice-new').css('display','block');
	});
	// //修改发票
	// $('#save-invoice-title').click(function(){
	// 	var fapiao = $('.fapiao').val();
	// 	$.post('../../Home/Order/dopay',{fapiao:fapiao},function(msg){
	// 		$('.fapiao').css('display','none');
	// 	}
	// });
	//提交订单按钮
	$('.cart-button').click(function(){
		$('.check-ok').each(function(){
			if($('.check-ok:checked').val()>0){
				var addid = $('.check-ok:checked').val();
				// console.log(addid);
				$.post('../../Home/Order/insert',{addid:addid},function(msg){
					console.log(msg);
					if(msg == 'yes'){
						location.href = '../../Home/Order/pay';
					}else{
						alert('提交失败');
					}
			});				
			}else{
				alert('您没选地址,寄到东土大唐?');
				return false;																											
			}
		});
	});

	
})
	
