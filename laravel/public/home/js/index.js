$(document).ready(function(){
    /******************
	*首页图片轮播start*
    *******************/       
	 var index=0;
	 var inte= null;
	function running(){
		inte= setInterval(function(){
			
			if(index>2){
				index=0;
				
			}
			doShows(index);
			index++;
			
		},2000)
	}
	running();

	function doShows(i){
		$('#img li').eq(i).fadeIn();
		$('#img li').eq(i).siblings().hide();
		$('#images_1 li').eq(i).addClass('cur');
		$('#images_1 li').eq(i).siblings().removeClass('cur');
		}
		
	$("#images_1 li").click(function(){
		index = $(this).index();
		doShows(index++);
		clearInterval(inte);
		running();
	})
	
	$("#images .left_1").click(function(){
		index=index-1;
		if(index<0){
			index=2;		
		}
		doShows(index);
		clearInterval(inte);
		running();
	});
	$("#images .right_1").click(function(){
		index=index+1;
		if(index>2){
			index=0;		
		}
		doShows(index);
		clearInterval(inte);
		running();	
	});
	/*********
	*首页图片轮播stop*
    **********/
});