/**
 * 功能:图片惰性加载。在需要图片惰性加载的页面底部载入。再将图片加上class=“lazy”。并将图片的真实地址放置在图片的自定义属性dataimg中。
 * @author haunghm
 * @version 1.0.1
 * @author Simon 新增对webp的动态支持
 * @dependencies jquery 或者 zepto.js
 * @example <img class="lazy" dataimg="http://storefspic.nearme.com.cn/uploadFiles/phpbg/advertisement/2013/11/14d/c9ab3e37e121e8e6aef40f474ad8aee0.jpg.short.w320.jpg" hasWebp />
 */
var lazyLoad = {
	init: function() {
		var that = this;
		that.img.onerrorImgUrl = "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2LTE0OjU2OjI3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MTY2RDU0NzFFOTcxMUUzQTk5NEYwNUM4NjVFNUE5NyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MTY2RDU0ODFFOTcxMUUzQTk5NEYwNUM4NjVFNUE5NyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjgxNjZENTQ1MUU5NzExRTNBOTk0RjA1Qzg2NUU1QTk3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjgxNjZENTQ2MUU5NzExRTNBOTk0RjA1Qzg2NUU1QTk3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkEAAAAAAAsAAAAAAEAAQAAAgJEAQA7";//图片加载失败用什么图片替换
		that.img.srcStore      = "dataimg";   //图片真实地址存放的自定义属性
		that.img.hasWebp       = "hasWebp";	  //是否有webp图片
		that.img.cls         = "lazy";      //惰性加载的图片需要添加的class
		that.img.sensitivity   = 50;           //该值越小，惰性越强（加载越少）   
		//先用空图代替,免得显示红叉
		$('img.'+that.img.cls+'').attr('src',that.img.onerrorImgUrl);
		that.checkSuportWebp();
		setTimeout(function(){
			that.img.init();
		},50);
	},
	checkSuportWebp:function(){
		var that = this;
		if(that.supportWebp==null){
			var webpblank='data:image/webp;base64,UklGRjIAAABXRUJQVlA4ICYAAACyAgCdASoBAAEALmk0mk0iIiIiIgBoSygABc6zbAAA/v56QAAAAA==';
			timg=new Image();
			timg.src=webpblank;
			setTimeout(function(){
				that.supportWebp=(timg.height==1);
				delete timg;
			},30);
		}
	},
	img: {
		trigger: function() {
			var that = this;
			eventType = that.isPhone && "touchend" || "scroll";
			that.imglist = $('img.'+that.cls+'');
			$(window).trigger(eventType);
			
		},
		init: function() {
			var that = this,
			minScroll = 5,
			slowScrollTime = 200,
			ios = navigator.appVersion.match(/(iPhone\sOS)\s([\d_]+)/),
			isIos = ios && !0 || !1,
			isoVersion = isIos && ios[2].split("_");
			isoVersion = isoVersion && parseFloat(isoVersion.length > 1 ? isoVersion.splice(0, 2).join(".") : isoVersion[0], 10),
			isIos = that.isPhone = isIos && isoVersion < 6;
			
			if (isIos) {
				var startSyAndTime,
				setTimeOut;
				$(window).on("touchstart", 
				function() {
					startSyAndTime = {
						sy: window.scrollY,
						time: Date.now()
					},
					setTimeOut && clearTimeout(setTimeOut)
				}).on("touchend", 
				function(e) {
					if (e && e.changedTouches) {
						var subtractionY = Math.abs(window.scrollY - startSyAndTime.sy);
						if (subtractionY > minScroll) {
							var subtractionTime = Date.now() - startSyAndTime.time;
							setTimeOut = setTimeout(function() {
								that.changeimg(),
								startSyAndTime = {},
								clearTimeout(setTimeOut),
								setTimeOut = null
							},
							subtractionTime > slowScrollTime ? 0: 200)
						}
					} else {
						that.changeimg();
					}
				}).on("touchcancel", 
				function() {
					setTimeOut && clearTimeout(setTimeOut),
					startSyAndTime = {}
				})
			} else $(window).on("scroll", 
			function() {
				that.changeimg()
			});
			that.trigger(),
			that.isload = !0
		},
		changeimg: function() {
			function loadYesOrno(img) {
				var windowPageYOffset = window.pageYOffset|(document.body.scrollTop | document.documentElement.scrollTop),
				windowPageYOffsetAddHeight = windowPageYOffset + $(window).height(),//window.innerHeight|document.body.clientHeight,
				imgOffsetTop = img.offset().top;
				return (imgOffsetTop >= windowPageYOffset && imgOffsetTop - that.sensitivity <= windowPageYOffsetAddHeight)
			}
			function checkWebp(img){
				var hasWebp=img.attr(that.hasWebp);
				if(!(hasWebp!=null && hasWebp!==false)){
					return false;
				}
				if(lazyLoad.supportWebp){
					var imgUrl = img.attr(that.srcStore);
					var despos = imgUrl.lastIndexOf('/');
					var path=imgUrl.substring(0,despos+1);
					var filename=imgUrl.substring(despos+1);
					var filenames=filename.split('.');
					if( filename.match(/\.(jpg|png|jpeg|bmp).+/) ){
						filenames[filenames.length-1]='webp';
					}else{
						filenames[filenames.length]='webp';
					}
					filename=filenames.join('.');
					
					img.attr(that.srcStore,path+filename);
					return true;
				}else{
					return false;
				}
			}
			function loadImg(img, index) {
				var imgUrl = img.attr(that.srcStore);
				img.attr("src", imgUrl);
				img[0].onload || (img[0].onload = function() {
					$(this).removeClass(that.cls).removeAttr(that.srcStore),
					that.imglist[index] = null,
					this.onerror = this.onload = null
				},
				img[0].onerror = function() {
					this.src = that.onerrorImgUrl,
					$(this).removeClass(that.cls).removeAttr(that.srcStore),
					that.imglist[index] = null,
					this.onerror = this.onload = null
				})
			}
			var that = this;
			that.imglist.each(function(index, val) {
				if (!val) return;
				var img = $(val);
				if (!loadYesOrno(img)) return;
				if (!img.attr(that.srcStore)) return;
				checkWebp(img);
				loadImg(img, index);
			})
			//that.trigger();
		}
	}
};
lazyLoad.init();