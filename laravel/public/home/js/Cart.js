$(function(){
		// 删除
		$('.del').click(function(){
			var that = $(this);
			// 获取要删除购物车的id
			var id = $(this).attr('data');

			// 发送请求
			$.post('../../Home/Cart/del',{id:id},function(msg){
				// console.log(msg);
				if (msg == 'yes') {
					// 1.删除成功之后刷新当前页面
					// location.reload();
					// 2.无刷新删除数据
					that.parent().parent().remove();
				} else {
					alert('删除失败');
				}
			})
		})
		
		//获取总价格
		function getSum()
		{
			var sum = 0;

			// 遍历所有被选中的栏目的小计价格，计算总价格
			$('.every:checked').each(function(){
				// 获取到的结果是字符串，使用Number()转化为数值
				sum += Number($(this).parent().siblings('.xiaoji').text());
			})

			// 将总计价格放在span#total内
			$('#total').text(sum);
		}

		// 修改商品数量
		/*
			obj:input[class="num"]对象
			num：商品的数量
		*/
		function changeNum(obj,num)
		{
			// 1.商品的id
			var id = obj.attr('data');
			// alert(id);
			// alert(num);

			// 3.发送
			$.post('../../Home/Cart/change',{id:id,num:num},function(msg){
				// console.log(msg);
				if (msg == 'yes') {
					// 3.1 修改input框的数量
					obj.val(num);

					// 3.2 修改小计
					var price = Number(obj.parent().prev().text());
					var sum = price*num;
					// 将获取的总价格写入当前的小计
					obj.parent().next().text(sum);

					// 3.3 修改总计价格
					getSum();
				} else {
					alert('修改失败');
				}
			})
		}

		$('#all').click(function(){
			// 1.先获取自身被选中的状态
			var value = $(this).attr('checked');
			// console.log(value);

			// 2.判断
			if (value == 'checked') {
				$('.every').attr('checked',true);

				//购物车的商品重新被选中，则需要重新计算总价格
				getSum();
			} else {
				$('.every').attr('checked',false);
				getSum();
			}
		})

		// 单个.every的点击事件
		$('.every').click(function(){
			getSum();
		})

		// 当数量input失去焦点的时候，发送ajax请求，修改数据库该商品的数量
		var a = 0;
		$('.num').focus(function(){
			// 鼠标聚焦的时候，获取当前的值
			a = $(this).val();
		}).blur(function(){
			// 2.修改之后的数量
			var num = $(this).val();

			// 判断失去焦点的时候，值如果被改变则发送请求修改，如果没有被修改，则不请求
			if (num == a || num < 1) return false;

			changeNum($(this),num);
		})

		// 数量+1
		$('.jia').click(function(){
			var that = $(this).next();	// input对象
			// 获取商品的数量并且加1，当前商品在购物车的id
			// 1.商品的数量
			var num = Number(that.val());

			num++;
			// alert(num);

			changeNum(that,num);
		})

		// 数量+1
		$('.jian').click(function(){
			var that = $(this).prev();	// input对象
			// 获取商品的数量并且加1，当前商品在购物车的id
			// 1.商品的数量
			var num = Number(that.val());

			num--;

			// 数量不能小于1
			if (num<1) return false;

			changeNum(that,num);
		})

		//结算
		$('#jiesuan').click(function(){
			//判断用户是否选择商品
			var total = $('#total').text();
			//如果没选择商品则不能提交
			if(total <= 0){
				alert('请选择您要购买的商品');
				return false;
			}else{
				//获取已选择商品的id
				var id = [];
				$('.every:checked').each(function(){
					id.push($(this).attr('data'));
				})
				//获取已选择购物车的id
				var cid = [];
				$('.every:checked').each(function(){
					cid.push($(this).attr('xx'));
				})
				//获取商品数量
				var num = [];
				$('.num').each(function(){
					num.push($(this).val());
				})
				//获取商品总数
				var count = 0;
				$('.num').each(function(){
					var num = parseInt($(this).val());
					count += num;
				})
				//获取总价
				var price = $('#total').text();
				// console.log(i);
				$.post('../../Home/Cart/insert',{id:id,cid:cid,price:price,num:num,count:count},function(msg){
					// console.log(msg);
					if (msg == 'yes') {
						location.href = '../../Home/Order/index';
					} else {
						alert('结算失败');
					}
				})
			}
		});


	})