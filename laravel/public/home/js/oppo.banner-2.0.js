/*
*
*
*/

(function($){
	if(!$.oppo) $.oppo={};
	$.extend($.oppo,{
		banner:{
			index:0,
			timerid:false,
			opts:{
				units:false,
				btns:false,
				length:0,
				width:0,
				height:0,
				speed:700,
				timer:2500,
				direction:false,
				slide:false,
				fade:false
			},
			init:function(opts){
				if (!(opts.units && opts.units.length>0)) {
					//alert("banner参数不对");
					return false;
				}
				$.extend(this.opts,opts);
				this.opts.length = opts.units.length;
				this.opts.units.eq(this.index).show();
				this.opts.btns.eq(this.index).addClass("active");
				if (this.opts.length>1) {
					this.timerid = setTimeout('$.oppo.banner.slide(1)',this.opts.timer);
					this.event();
				}
			},
			slide:function(index,auto){
				var cindex = this.index;
				var width = this.opts.width;
				var speed = this.opts.speed;
				var timer = this.opts.timer;
				this.opts.units.eq(index).css({left:width+"px",display:'block'});
				this.opts.units.eq(cindex).animate({left:"-"+width+"px"},speed);
				this.opts.units.eq(index).animate({left:'0'},speed);
				this.opts.btns.eq(cindex).removeClass("active");
				this.opts.btns.eq(index).addClass("active");
				this.index = index;
				nindex = index+1;
				if (nindex>this.opts.length-1) nindex=0;
				this.timerid = setTimeout('$.oppo.banner.slide('+nindex+')',timer);
				return false;
			},
			event:function(){
				var parent = this;
				var units = this.opts.units;
				var btns = this.opts.btns;
				var timer = this.opts.timer;
				$.each(btns,function(i,btn){
					$(btn).live("click",function(){
						var timerid = parent.timerid;
						var cindex = parent.index;
						var nindex = parent.index+1;
						if (nindex>parent.opts.length-1) nindex=0;
						if ($(this).hasClass("active")) {
							clearTimeout(timerid);
							parent.timerid = setTimeout('$.oppo.banner.slide('+nindex+')',timer);
							return false;
						}
						units.eq(cindex).stop(false,true);
						units.eq(nindex).stop(false,true);
						clearTimeout(timerid);
						$.oppo.banner.slide(i);
						return false;
					});
				});
			}
		}
	});
}(jQuery));