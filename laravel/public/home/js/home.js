$(function () {

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        if (elemTop + 50 < docViewBottom) {
            return true
        } else {
            return false
        }
    }

    function animateTop(item, time,callback) {
        if ($(item).attr('init') == 'false'&& isScrolledIntoView($(item).parent()) ){
            $(item).attr('init', 'true');
            setTimeout(function(){
                $(item).animate({'bottom': '0'}, 800, 'easeOutCubic');
                callback;
            },time)
        }
    }

    function ftAnimate(item, time) {
        if ($(item).attr('init') == 'false'&& isScrolledIntoView($(item))) {
            $(item).attr('init', 'true');
            setTimeout(function(){
                $(item).animate({'bottom': '0'}, 800, 'easeOutCubic');
            },time)
        }
    }


    function animateBot(item, time, callback) {
        $(item).delay(time).animate({'top': '650px'}, 1200, 'easeOutCubic', callback)
    }


    var floor1Init = false,
        boxElemets = $('.J_Box'),
        box2Elemets = $('.J_Box2'),
        tileA = $('.tileA .tile'),
        tileB = $('.tileB .tile'),
        footTags = $('.foot-tags div'),
        fromNav3 = true;

    $.each(tileA, function () {
        $(this).attr('init', 'false');
    });

    $.each(tileB, function () {
        $(this).attr('init', 'false');
    });

    $.each(boxElemets, function () {
        $(this).attr('init', 'false');
    });
    $.each(box2Elemets, function () {
        $(this).attr('init', 'false');
    });
    $.each(footTags, function () {
        $(this).attr('init', 'false');
    });
    $.each($('.services div'), function () {
        $(this).attr('init', 'false');
    });

    function animateInit(){
        $.each(boxElemets, function () {
            if ($(this).attr('init') == 'false' && isScrolledIntoView($(this))) {
                $(this).attr('init', 'true');
                $(this).animate({'left': '50%'}, 1000, 'easeOutCubic');
            }
        });

        $.each(tileA, function () {
            if ($(this).attr('init') == 'false' && isScrolledIntoView($(this))) {
                $(this).attr('init', 'true');
                $(this).animate({'left': '50%'}, 1000, 'easeOutCubic');
            }
        });

        $.each(tileB, function () {
            if ($(this).attr('init') == 'false' && isScrolledIntoView($(this))) {
                $(this).attr('init', 'true');
                $(this).animate({'left': '50%'}, 1000, 'easeOutCubic');
            }
        });

        ftAnimate('.foot-tag1', 0);
        ftAnimate('.foot-tag2', 100);
        ftAnimate('.foot-tag3', 200);
        ftAnimate('.foot-tag4', 300);
        ftAnimate('.foot-tag5', 400);

        ftAnimate('.s1', 0);
        ftAnimate('.s2', 100);
        ftAnimate('.s3', 200);
        ftAnimate('.s4', 300);

        if (!floor1Init) {
            animateTop('.star1', 0);
            animateTop('.star2', 200);
            animateTop('.star3', 400);
            animateTop('.star4', 600,function(){
                floor1Init = true;
            });
        }

    }
    animateInit();
    $(window).scroll(function () {
        animateInit();
    });

    //微博切换
    $('#box2-t1').click(function (ev) {
        ev.preventDefault();
        $('#box2-t2').removeClass('active');
        $(this).addClass('active');
        $('.box2-bd-c2').hide();
        $('.box2-bd-c1').show();
    });
    $('#box2-t2').click(function (ev) {
        ev.preventDefault();
        $('#box2-t1').removeClass('active');
        $(this).addClass('active');
        $('.box2-bd-c1').hide();
        $('.box2-bd-c2').show();
    });



//    //页尾语言展示
//    $('#footer .lang').bind('mouseenter', function (ev) {
//        ev.preventDefault();
//        $(this).addClass('lang-hover');
//    });
//    $('#footer .lang').bind('mouseleave', function (ev) {
//        ev.preventDefault();
//        $(this).removeClass('lang-hover');
//    });


    //轮播
    var navflag=false;

    $('.banner-nav li').bind('click',function(e){
        var cur = $(e.currentTarget);
        stopFocusAm();
        if(navflag)return false;
        if(!cur.hasClass('active')){
            navflag=true;


            var i= $.trim($('.banner-nav li.active').attr('class').replace('active','').replace('banner-nav',''));

            //$('.banner'+i+' .banner-img').stop(false,true).css({'left': '-150%'});

            var bannerimg=$('.banner'+i+' .banner-img');

            bannerimg.eq(0).animate({'left':'150%'},1200,'easeOutCubic',function(){

                bannerimg.eq(0).css({'left':'-150%'});
            });
            bannerimg.eq(1).animate({'left':'150%'},1500,'easeOutCubic',function(){
                bannerimg.eq(1).css({'left':'-150%'});
            });
            bannerimg.eq(2).animate({'left':'150%'},800,'easeOutCubic',function(){
                bannerimg.eq(2).css({'left':'-150%'});
            });
            $('.banner-nav li.active').removeClass('active');
            cur.addClass('active');
            bar.stop();
            bar.css({'width': '0'});
            if(cur.hasClass('banner-nav1')){
                var bg = $('.banner1').attr('data-bg');
                changeBg(bg, function () {
                    $('.banner-nav li').removeClass('active');
                    nav1.addClass('active');
                    img1.animate({'left':'0'},800,'easeOutCubic');
                    img2.animate({'left':'0'},1000,'easeOutCubic');
                    img3.animate({'left':'0'},1200,'easeOutCubic',function(){
                        currentFocusI = 1;
                        changeingFocus = false;
                        navflag=false;
                        starFocustAm();
                    });
                });
            }else if(cur.hasClass('banner-nav2')){
                var bg = $('.banner2').attr('data-bg');
                changeBg(bg, function () {
                    $('.banner-nav li').removeClass('active');
                    nav2.addClass('active');
                    img4.animate({'left':'0'},800,'easeOutCubic');
                    img5.animate({'left':'0'},1000,'easeOutCubic');
                    img6.animate({'left':'0'},1200,'easeOutCubic',function(){
                        currentFocusI = 2;
                        changeingFocus = false;
                        navflag=false;
                        starFocustAm();
                    });
                });
            }else if(cur.hasClass('banner-nav3')){
                var bg = $('.banner3').attr('data-bg');
                changeBg(bg, function () {
                    $('.banner-nav li').removeClass('active');
                    nav3.addClass('active');
                    img7.animate({'left':'0'},800,'easeOutCubic');
                    img8.animate({'left':'0'},1000,'easeOutCubic');
                    img9.animate({'left':'0'},1200,'easeOutCubic',function(){
                        currentFocusI = 3;
                        changeingFocus = false;
                        navflag=false;
                        starFocustAm();
                    });
                });
            }

        }
    });

    var img1 = $('.banner1-img1'),
        img2 = $('.banner1-img2'),
        img3 = $('.banner1-img3'),
        img4 = $('.banner2-img1'),
        img5 = $('.banner2-img2'),
        img6 = $('.banner2-img3'),
        img7 = $('.banner3-img1'),
        img8 = $('.banner3-img2'),
        img9 = $('.banner3-img3'),
        bar = $('.banner-bar'),
        bannerBg = $('.banner-bg'),
        nav1 = $('.banner-nav1'),
        nav2 = $('.banner-nav2'),
        nav3 = $('.banner-nav3'),
        index = '',
        st = null,
        changeEnd = false,
        timerFID = null;

    function changeBg(color, callback) {
        bannerBg.fadeOut(500, function () {
            $(this).css('background-image', 'url('+color+')').delay(50).fadeIn(500, callback);
        });
    }
    function barAnimate(callback){
        bar.animate({'width': '100%'}, 7500, 'linear',callback);
    }

    var currentFocusI = 1;
    var changeingFocus = false;

    window.changeBanner=function(){
        if(changeingFocus) return;
        changeingFocus = true;
        if(currentFocusI == 1){

            $('.banner2 .banner-img').stop(false,true);
            $('.banner2 .banner-img').css({'left': '-150%'});
            barAnimate(function(){
                bar.css({'width': '0'});
                changebg2();
            });

        }else if(currentFocusI == 2){
            $('.banner3 .banner-img').stop(false,true);
            $('.banner3 .banner-img').css({'left': '-150%'});
            barAnimate(function(){
                bar.css({'width': '0'});
                changebg3();
            });
        }else if(currentFocusI == 3){
            $('.banner1 .banner-img').stop(false,true);
            $('.banner1 .banner-img').css({'left': '-150%'});
            barAnimate(function(){
                bar.css({'width': '0'});
                changebg1();
            });
        }
    }
    function changebg2(){

        img1.animate({'left':'150%'},1200,'easeOutCubic',function(){
            img1.css({'left':'-150%'});
        });
        img2.animate({'left':'150%'},1500,'easeOutCubic',function(){
            var bg = $('.banner2').attr('data-bg');
            changeBg(bg, function () {
                $('.banner-nav li').removeClass('active');
                nav2.addClass('active');
                img4.animate({'left':'0'},800,'easeOutCubic');
                img5.animate({'left':'0'},1000,'easeOutCubic');
                img6.animate({'left':'0'},1200,'easeOutCubic',function(){
                    currentFocusI = 2;
                    changeingFocus = false;

                });
            });
            img2.css({'left':'-150%'});
        });
        img3.animate({'left':'150%'},800,'easeOutCubic',function(){
            img3.css({'left':'-150%'});
        });
    }

    function changebg1(){
        img7.animate({'left':'150%'},1500,'easeOutCubic',function(){
            var bg = $('.banner1').attr('data-bg');

            changeBg(bg, function () {
                $('.banner-nav li').removeClass('active');
                nav1.addClass('active');
                img1.animate({'left':'0'},800,'easeOutCubic');
                img2.animate({'left':'0'},1000,'easeOutCubic');
                img3.animate({'left':'0'},1200,'easeOutCubic',function(){
                    currentFocusI = 1;
                    changeingFocus = false;
                });
            });
            img4.css({'left':'-150%'});
        });
        img8.animate({'left':'150%'},800,'easeOutCubic',function(){
            img5.css({'left':'-150%'});
        });
        img9.animate({'left':'150%'},1200,'easeOutCubic',function(){
            img6.css({'left':'-150%'});
        });
    }


    function changebg3(){
        img4.animate({'left':'150%'},1500,'easeOutCubic',function(){
            var bg = $('.banner3').attr('data-bg');
            changeBg(bg, function () {
                $('.banner-nav li').removeClass('active');
                nav3.addClass('active');
                img7.animate({'left':'0'},800,'easeOutCubic');
                img8.animate({'left':'0'},1000,'easeOutCubic');
                img9.animate({'left':'0'},1200,'easeOutCubic',function(){
                    currentFocusI = 3;
                    changeingFocus = false;
                });
            });
            img7.css({'left':'-150%'});
        });
        img5.animate({'left':'150%'},800,'easeOutCubic',function(){
            img5.css({'left':'-150%'});
        });
        img6.animate({'left':'150%'},1200,'easeOutCubic',function(){
            img6.css({'left':'-150%'});
        });
    }

    function starFocustAm(){
        timerFID = setInterval(function(){
            changeBanner();
        },100);
    }
    function stopFocusAm(){
        clearInterval(timerFID);
    }
    starFocustAm();




//    function changeBg(color, callback) {
//        bannerBg.fadeOut(500, function () {
//            $(this).css('background-image', 'url('+color+')').delay(50).fadeIn(500, callback);
//        });
//    }
//    function barAnimate(){
//
//        bar.animate({'width': '100%'}, 7500, 'linear', function () {
//            bar.css({'width': '0'});
//        });
//    }
//    function changeBanner() {
//
//        if (index == 1) {
//            changeBg2();
//        }
//        else if (index == 2 || index == '') {
//            changeBg1();
//        }
//    }
//    var imgT1,imgT2,imgT3,imgT4,imgT5,imgT6;
//    function changeBg1() {
//        var bg = $('.banner1').attr('data-bg');
//        changeBg(bg, function () {
//            img1.animate({'left': '0'}, 1200, 'easeOutCubic');
//            img2.animate({'left': '0'}, 1500, 'easeOutCubic',function(){
//                barAnimate();
//            });
//            img3.animate({'left': '0'}, 800, 'easeOutCubic');
//
//            bg2out();
//
//            index = 1;
//            nav1.addClass('active');
//            nav2.removeClass('active');
//        });
//    }
//    function bg1out(){
//        imgT1=setTimeout(function(){
//            img1.animate({'left': '150%'}, 1200, 'easeOutCubic',function(){
//                img1.css({'left': '-150%'});
//            });
//        },8500);
//
//        imgT2=setTimeout(function(){
//            img2.animate({'left': '150%'}, 1200, 'easeOutCubic',function(){
//                img2.css({'left': '-150%'});
//            });
//        },8800);
//
//        imgT3=setTimeout(function(){
//            img3.animate({'left': '150%'}, 1200, 'easeOutCubic', function () {
//                img3.css({'left': '-150%'});
//            });
//        },8300);
//    }
//
//    function changeBg2() {
//        var bg = $('.banner2').attr('data-bg');
//        changeBg(bg , function () {
//            img4.animate({'left': '0'}, 1500, 'easeOutCubic',function(){
//                barAnimate();
//            });
//            img5.animate({'left': '0'}, 800, 'easeOutCubic');
//            img6.animate({'left': '0'}, 1200, 'easeOutCubic');
//
//            bg1out();
//
//            index = 2;
//            nav2.addClass('active');
//            nav1.removeClass('active');
//        });
//    }
//
//    function bg2out(){
//        imgT4=setTimeout(function(){
//            img4.animate({'left': '150%'}, 1200, 'easeOutCubic',function(){
//                img4.css({'left': '-150%'});
//            });
//        },8800);
//
//        imgT5=setTimeout(function(){
//            img5.animate({'left': '150%'}, 1200, 'easeOutCubic', function () {
//                img5.css({'left': '-150%'});
//            });
//        },8300);
//
//        imgT6=setTimeout(function(){
//            img6.animate({'left': '150%'}, 1200, 'easeOutCubic', function () {
//                img6.css({'left': '-150%'});
//            });
//        },8500);
//    }
//
//    changeBanner();
//
//    st = setInterval(function () {
//        changeBanner();
//    }, 10000);

    //配件类型选择
    var typeli=$('.jsfittingtype li');
    typeli.bind('click',function(e){
        var cur=$(e.currentTarget);
        typeli.removeClass('selected');
        cur.addClass('selected');
        if(cur.text() =='保护壳'||cur.text() =='耳机'||cur.text() =='贴膜'){
            $('.jsmian').css('display','none');
            $('.jssub').css('display','block');

        }
        if($('.fitting .home').css('display') =='block'){

            $.each(tileA, function () {
                $(this).animate({'left': '-50%'}, 1000, 'easeOutCubic');
            });

            $.each(tileB, function () {
                $(this).animate({'left': '-50%'}, 1000, 'easeOutCubic',function(){
                    $('.fitting .home').css('display','none');
                });

            });
            $('.fitting .list').css('display','block');
        }
    });

    $('.jssub .back').bind('click',function(){
        $('.jsmian').css('display','block');
        $('.jssub').css('display','none');
    });
    // 下拉
    $('body').bind('click',function(){
        $('.selectbox').removeClass('show');
        $('.lang-other').css('display','none');
    });
    $('.selectbox').bind('click',function(e){
        e.stopPropagation();
        var cur=$(e.currentTarget);
        if(cur.hasClass('show')){
            cur.removeClass('show');
        }else{
            cur.addClass('show');
        }
    });
    $('.selectbox .boxlist li').bind('click',function(e){
        var cur=$(e.currentTarget);
        $('.selectbox .name').html(cur.text());

    });

    $('.cartBtn').bind('click',function(e){
        var cur=$(e.currentTarget);
    });

    //detail

    $('.product-detail .tab li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('active')){
            $('.product-detail .tab li.active').removeClass('active');
            cur.addClass('active');
            $('.detail-item').css('display','none');
            
            switch (cur.attr('data-index')){
                case '0':
                    $('.detail-content .fns').css('display','block');
                    break;           
                case '1':
                    $('.detail-content .parameter').css('display','block');
                    break;
                case '3':
                    $('.detail-content .service').css('display','block');
                    break;
            }
            
            //这个版本在ie下因为text()匹配文本有bug，先保留。
            switch (cur.text()){
                case '功能':
                    $('.detail-content .fns').css('display','block');
                    break;
                case '设计':
                    $('.detail-content .design').css('display','block');
                    break;
                case '参数':
                    $('.detail-content .parameter').css('display','block');
                    break;
                case '评论':
                    $('.detail-content .reviews').css('display','block');
                    break;
                case '服务':
                    $('.detail-content .service').css('display','block');
                    break;
            }
        }

    });

    /* $('.btn-append').bind('click',function(e){
        $('.gotoShoppingCart').css('display','block');
        $('.premiumsBox').css('display','block');
        $('.bg').css('height',document.body.clientHeight);
        $('.bg').css('display','block');
    });  */
    $('.gotoShoppingCart .close').bind('click',function(e){
        $('.gotoShoppingCart').css('display','none');
    });
    $('.jsxl li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            cur.addClass('selected');
        }else{
            cur.removeClass('selected');
        }
        quicksand(cur.attr('_type'));
    });
    $('.jsfn li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.jsfn li.selected').removeClass('selected');
            cur.addClass('selected');
            quicksand(cur.attr('_type'));
        }else{
            cur.removeClass('selected');
        }
    });


    $('.jsnc li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.jsnc li.selected').removeClass('selected');
            cur.addClass('selected');
            quicksand(cur.attr('_type'));
        }else{
            cur.removeClass('selected');
        }

    });
    $('.jsbb li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.jsbb li.selected').removeClass('selected');
            cur.addClass('selected');
            quicksand(cur.attr('_type'));
        }else{
            cur.removeClass('selected');
        }
    });
    $('.jscolor li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.jscolor li.selected').removeClass('selected');
            cur.addClass('selected');
            quicksand(cur.attr('_type'));
        }else{
            cur.removeClass('selected');
        }
    });
    $('.jsstar li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.jsstar li.selected').removeClass('selected');
            cur.addClass('selected');
            quicksand(cur.attr('_type'));
        }else{
            cur.removeClass('selected');
        }
    });

    $('.increase').bind('click',function(){
        var limit = parseInt($("#orderlimit").val(),10);
        if (limit<=1) return false;
        var points = $("#goods_points").text();
        var _p = parseInt(points,10);
        var cur=$('#J_Stock input');
        var _v=parseInt(cur.val())+1;
        if (_v>limit) return false;
        if(_v>1){
            $('#J_Stock .reduce').removeClass('disable');
            if (_v==limit) {
                $('#J_Stock .increase').addClass('disable');
            };
        }else if(_v==1){
            $('#J_Stock .reduce').addClass('disable');
            //if (_v<limit+1) $('#J_Stock .increase').removeClass('disable');
        }

        cur.val(_v);
        $("#result-num").text(_v);
        $("#result-points").text(_v*_p);

    });
    $('.reduce').bind('click',function(e){
        var limit = parseInt($("#orderlimit").val(),10);
        if (limit<=1) return false;
        var points = $("#goods_points").text();
        var _p = parseInt(points,10);
        var cur=$('#J_Stock input');
        var _v=parseInt(cur.val())-1;
        if(_v>1){
            $('#J_Stock .reduce').removeClass('disable');
        }else if(_v == 1){
            $('#J_Stock .reduce').addClass('disable');
        }
        if (_v<limit) $('#J_Stock .increase').removeClass('disable');
        if(_v>=1){
            cur.val(_v);
            $("#result-num").text(_v);
            $("#result-points").text(_v*_p);
        }
    });

    $('.gallery .thumb li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.gallery .thumb li').removeClass('selected');
            cur.addClass('selected');
            $('.gallery .booth img').attr('src',cur.attr('data'));
        }

    });

    //随心配
    /* $('.suits .choose').bind('click',function(e){
	
        var cur=$(e.currentTarget);
        if(cur.hasClass('selected')){
            cur.removeClass('selected');
        }else{
            cur.addClass('selected');
        }
		
		var total = parseFloat($('#goods_points').text());
		var ora_total = total;
		$('.suits .choose a.current').each(function(){
			total += parseFloat($(this).attr('points'));
			ora_total += parseFloat($(this).attr('orapoints'));
		});

		//$('.res-totalpoints .saving del').text(formatPoints(ora_total));
		$('#group_total_points').text(formatPoints(total));
		return false; 
    }); */
	
	$('.infos .btns a').click(function(){
		var ids = [];
		$('.suits .choose a.current').each(function() {
			ids.push($(this).attr('goods_id'));
		});
		OPPO.cart.add($(this).attr('goods_id'), 1, ids.join(','));
		return false;
	});
		
    //
    $('.btn-fav').bind('click',function(){
        if($('.btn-fav a').text()=='收藏'){

            $('.btn-fav a').text('取消');
            $('.favBox .t1').html('收藏宝贝成功');
            $('.favBox .t2').html('您已收藏了5个商品， <a href="#">查看我的收藏>></a>');
            $('.favBox .tip').attr('class','tip s');
        }else{
            $('.favBox .t1').html('您已经收藏过该商品');
            $('.favBox .t2').html('<a href="#">查看我的收藏>></a>');
            $('.favBox .tip').attr('class','tip f');
            $('.btn-fav a').text('收藏');
        }
        $('.favBox').css('display','block');
        $('.bg').css('display','block');
        $('.bg').css('height',document.body.clientHeight);
    });
    $('.favBox .close').bind('click',function(){
        $('.favBox').css('display','none');
        $('.bg').css('display','none');
    });

    // window, "scroll"
    if($('#J_TabBarBox').length>0){
        $(window).bind('scroll',function(){
            if($(window).scrollTop()>1112){
                $('#J_TabBarBox').attr('style','position: fixed;top: 0;width:100%;z-index: 100;');
            }else{
                $('#J_TabBarBox').attr('style','');
            }
        });

    }

    $('.lang-now').bind('click',function(e){
        var cur=$(e.currentTarget);
        e.stopPropagation();
        $('.lang-other').css('display','block');
    });

    //preview
    // $('.booth').bind('click',function(){
    //     $('.preview').css('display','block');
    //     $('#content').css('display','none');

    //     $('.preview .photo img').attr('src',$('.booth img').attr('src'));
    //     //$('.bg').css('display','block');
    //     //$('.bg').css('height',document.body.clientHeight);
    // });
    $('.preview .close').bind('click',function(){
        $('.preview').css('display','none');
        $('#content').css('display','block');
        //$('.bg').css('display','none');
    });


    $('.preview .left').bind('click',function(){
        var p=$('.thumb li.selected').prev();
        if(p.length>0){
            $('.thumb li.selected').removeClass('selected');
            p.addClass('selected');
            $('.preview .photo img').attr('src', p.attr('data'));
        }
    });
    $('.preview .right').bind('click',function(){
        var n=$('.thumb li.selected').next();
        if(n.length>0){
            $('.thumb li.selected').removeClass('selected');
            n.addClass('selected');
            $('.preview .photo img').attr('src', n.attr('data'));
        }
    });


    /* $('.points').bind('click',function(e){
        e.stopPropagation();
        alert('加入购物车');
        return false;
    }); */


    $('.pifu li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('on')){
            $('.pifu li.on').removeClass('on');
            cur.addClass('on');

            $('.ahz-img-left img').attr('src',cur.find('img').attr('src').replace('gallery/s','gallery/'));
        }

    });


    //赠品选择框
    /* $('.premiums').bind('click',function(e){
        $('.premiumsBox').css('display','block');
        $('.bg').css('height',document.body.clientHeight);
        $('.bg').css('display','block');
    }); */
    $('.premiumsBox .close').bind('click',function(){
        $('.premiumsBox').css('display','none');
        $('.bg').css('display','none');
    });
    $('.premiumsBox .btnok').bind('click',function(){
        $('.premiumsBox').css('display','none');
        $('.bg').css('display','none');
    });
    $('.premiumsBox .btncancel').bind('click',function(){
        $('.premiumsBox').css('display','none');
        $('.bg').css('display','none');
    });

    $('.premiumslist li').bind('click',function(e){
        var cur=$(e.currentTarget);
        if(!cur.hasClass('selected')){
            $('.premiumslist li.selected').removeClass('selected');
            cur.addClass('selected');
        }
    });

    //sandbox 切换特效
    var $applications = $('#applications');
    var i=$applications;
    var quicksand = function (datatype) {
        var d, c = [], o = [], b = 0, e = 0;
        //q = $('.phonelist').find("ul");
        i.find('li').each(function () {
            $(this).removeClass('selected');
            $(this).removeClass('disable');
            if ($(this).attr('data-type') == datatype) {
                $(this).addClass('selected');
            } else {
                $(this).addClass('disable');
            }
        });
        d = i.clone().find('li');
        d.each(function (f, s) {
            if ($(this).hasClass("selected")) {
                c[b] = s;
                b++;
            } else {
                o[e] = s;
                e++;
            }
        });
        d = c.concat(o);

        $applications.quicksand(d, {duration: 800,easing: "easeInOutQuad",adjustHeight: "auto",useScaling: !0});
        setTimeout(function(){
            //$applications.find('li.disable').css('display','none');
        },1000)
    };
    //底部全站说明划过效果
    $(".foot-tag4,.foot-tag5").hover(function(){
        $(this).filter(':not(:animated)').animate({
            bottom:"7px"
        },'fast');
    },function(){
        $(this).animate({
            bottom:"0"
        },'fast');
    });

//注释by2014-04-28
//nav_show_temp("专卖店",'nav-oppostore-new');

    /*专卖店推广*/
    function nav_show_temp(navText,cssName){
        $(".mall-nav-links a").each(function(){
            if( $(this).text() == navText ){
                $(this).append("<span class='"+cssName+"'></span>");
                $(this).css({'position':'relative'});
                return false;
            }        
        });
    }
    /*主页筛选条件*/
    var model = document.getElementsByName('mobile_type');
    var model_length = model.length;
    for(var i=0;i<model_length;i++)
    {
        model[i].onclick = function(){
            check_type();
        }
    }

    var network = document.getElementsByName('network_type');
    var network_length = network.length;
    for(var i=0;i<network_length;i++)
    {
        network[i].onclick = function(){
            check_type();
        }
    }

    var points = document.getElementsByName('points_section');
    var points_length = points.length;
    for(var i=0;i<points_length;i++)
    {
        points[i].onclick = function(){
            check_type();
        }
    }
    $('.mobile_type').click(function(){
        check_type(1);
    });
    $('.network_type').click(function(){
        check_type(2);
    });
    $('.points_section').click(function(){
        check_type(3);
    });

});
/*主页筛选条件*/
function check_type(flag){
    var mobile_item = 0;
    var network_item = 0;
    var points_item = 0;
    
    if(typeof $("input[name='mobile_type']:checked").val() != 'undefined'){
        mobile_item = $("input[name='mobile_type']:checked").val();
    }
    if(typeof $("input[name='network_type']:checked").val() != 'undefined'){
        network_item = $("input[name='network_type']:checked").val();
    }
    if(typeof $("input[name='points_section']:checked").val() != 'undefined'){
        points_item = $("input[name='points_section']:checked").val();
    }
    if(1 == flag) mobile_item = 0;
    if(2 == flag) network_item = 0;
    if(3 == flag) points_item = 0;
    
    var url = '/mobile';
    if(mobile_item !=0 || network_item != 0 || points_item != 0){
    	url += '/'+mobile_item+'-'+network_item+'-'+points_item;
    }
    
    window.location.href = url;
}
function fcpng(){
    //$('.pendant_kf').css('background','url("/static/image/deepblue/right/kf_ie6.png") no-repeat center top transparent');
    $('.pendant_wx').css('background','url("/static/image/deepblue/right/wx_ie6.png") no-repeat center top transparent');
    $('.pendant_top').css('background','url("/static/image/deepblue/right/totop_ie6.png") no-repeat center top transparent');
    // $('.kf_a').hover(function(){
    //     $('.pendant_k').show();
    //     $('.pendant_kf').css('background','url("/static/image/deepblue/right/kf_h_ie6.png") no-repeat center top transparent');
    // },function(){
    //     $('.pendant_k').hide();
    //     $('.pendant_kf').css('background','url("/static/image/deepblue/right/kf_ie6.png") no-repeat center top transparent');
    // });

    $('.wx_a').hover(function(){
        $('.pendant_w').show();
        $('.pendant_wx').css('background','url("/static/image/deepblue/right/wx_h_ie6.png") no-repeat center top transparent');
    },function(){
        $('.pendant_w').hide();
        $('.pendant_wx').css('background','url("/static/image/deepblue/right/wx_ie6.png") no-repeat center top transparent');
    }); 
    $('.top_a').hover(function(){
        $('.pendant_top').css('background','url("/static/image/deepblue/right/totop2_ie6.png") no-repeat center top transparent');
    },function(){
        $('.pendant_top').css('background','url("/static/image/deepblue/right/totop_ie6.png") no-repeat center top transparent');
    }); 
}

function correntPNG(){
    if($.browser.msie && $.browser.version<=6.0){
                $.each($('img'),function(i,img){
                    if(img.src.toLowerCase().indexOf('.png') > 0){
                        var imgID = (img.id) ? "id='" + img.id + "' " : "";
                        var imgClass = (img.className) ? "class='" + img.className + "' " : "";
                        var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' ";
                        var imgStyle = "display:inline-block;" + img.style.cssText;
                        if (img.align == "left") imgStyle = "float:left;" + imgStyle;
                        if (img.align == "right") imgStyle = "float:right;" + imgStyle;
                        if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle;
                        var strNewHTML = "<span " + imgID + imgClass + imgTitle
                                     + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
                                     + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
                                     + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
                                     img.outerHTML = strNewHTML;
                    };
                });
            }
}

//客服漂浮代码
window.onscroll = function(){
    var t = document.documentElement.scrollTop || document.body.scrollTop;
    if( t >= 350 ) {
        $('.pendant').css("display","inline");
    } else {
        $('.pendant').css('display', 'none');
    }
};

$(function(){
    $('.foot-zxkf').click(function(){
        var urls = ['http://oim.myoppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=884&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1'];
        var chat_url = urls[parseInt(Math.random() * 1000) % urls.length];
        window.open(chat_url,'', 'width=950, height=650, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
        return false;
    });

});

window.onload=function(){
    if($.browser.msie && $.browser.version<=6.0){
        correntPNG();
		$("h1.logo").css("background-image","url(/static/image/deepblue/common/icons_ie6.png)");
        $("div.tel").css("background-image","url(/static/image/deepblue/right/tel_ie6.png)");
        $("div.foot-tel").css("background-image","url(/static/image/deepblue/right/tel_s_ie6.png)");
        $("div.foot-zxkf").css("background-image","url(/static/image/deepblue/right/zxkf_ie6.png)");
        $("ul.foot-links-content a").css("background-image","url(/static/image/deepblue/common/icons_ie6.png)");
        $("div.foot-tags div").css("background-image","url(/static/image/deepblue/common/icons_ie6.png)");
        fcpng();
    } else{
    }
	
	$("a.weibo-sina-png").hover(function(){
		$(this).find("img").attr("src","/static/image/deepblue/home/i-h-sinawb-h.png");
		if($.browser.msie && $.browser.version<=6.0){
			$(this).html('<img src="/static/image/deepblue/home/i-h-sinawb-h.png" />');
			correntPNG();
		}
	},function(){
		$(this).find("img").attr("src","/static/image/deepblue/home/i-h-sinawb.png");
		if($.browser.msie && $.browser.version<=6.0){
			$(this).html('<img src="/static/image/deepblue/home/i-h-sinawb.png" />');
			correntPNG();
		}
	});
	
	$("a.weibo-qq-png").hover(function(){
		$(this).find("img").attr("src","/static/image/deepblue/home/i-h-qqwb-h.png");
		if($.browser.msie && $.browser.version<=6.0){
			$(this).html('<img src="/static/image/deepblue/home/i-h-qqwb-h.png" />');
			correntPNG();
		}
	},function(){
		$(this).find("img").attr("src","/static/image/deepblue/home/i-h-qqwb.png");
		if($.browser.msie && $.browser.version<=6.0){
			$(this).html('<img src="/static/image/deepblue/home/i-h-qqwb.png" />');
			correntPNG();
		}
	});
};

(function($){
    $.fn.dialog = function(params){
        var opts = {
                maskID:'mask',
                close:'a.dialogClose',
                fadeStyle:0
            };  
        $.extend(opts,params);
        $dialog=$(this);
        $mask=$("#"+opts.maskID);
        var isie6=false;
        if ($.browser.version<8.0 && $.browser.msie) {
            var isie6=true;
        };
        var h1=$(document).height();
        var h2=$(window).height();
        var h3=$dialog.height();
        //if(h3>h2){h1=h1+h2/2};
        var h4=$(document).scrollTop();
        var w1=$(window).width();
        var w2=$dialog.width();
        $mask.css("height",h1+"px");
        var pos = 'fixed';
        var top = 0.5*(h2-h3);
        var left = 0.5*(w1-w2);
        if(h3>h2){
            top = (h2-h3)*0.5+h4;
            pos = 'absolute';
        }else{
            if(isie6){
                top = (h2-h3)*0.5+h4;
                pos = 'absolute';
            }
        };
        $dialog.css({
            "position":pos,
            "top":top+"px",
            'left':left+"px"
        });
        if (!isie6 && $.browser.version!=8.0 && opts.fadeStyle==1) {
            $mask.fadeIn(100);$dialog.fadeIn(100);
        }else{
            $mask.show();$dialog.show();
        }
        $dialog.find(opts.close).one("click", function(){
            if (!isie6 && $.browser.version!=8.0 && opts.fadeStyle==1) {
                $mask.fadeOut(100);$dialog.fadeOut(100);
            }else{
                $mask.hide();$dialog.hide();
            }
            var callback = $(this).attr("callback");
            if (typeof callback != 'undefined') {
                return eval(callback+'()');
            };
            if (typeof dialogClose == 'function') {
                return dialogClose();
            };
            return false;
        });
        return false;
    };

    /*
     *城市下拉联动
     */
    $.fn.pcrselect = function(params){
        var opts = {
            pid:0,
            cid:0,
            rid:0
        };
        $.extend(opts,params);
        if (typeof arrCity == 'undefined' || arrCity.length<=0) {
            return false;
        };
        $pcrSelect = $(this);
        $pSelect = $(this).find("select.pSelect");
        $cSelect = $(this).find("select.cSelect");
        $rSelect = $(this).find("select.rSelect");
        if ($pSelect.length<=0 || $cSelect.length<=0 || $rSelect.length<=0) {
            return false;
        };
        var rselect = function(regions){
            $rSelect.html("");
            $.each(regions,function(i,region){
                var rid = parseInt(region.id,10);
                var rname = region.name;
                if(i==0 && opts.rid==0){
                    opts.rid=rid;
                };
                if (rid!=opts.rid) {
                    $rSelect.append('<option value="'+rid+'">'+rname+'</option>');
                }else{
                    $rSelect.append('<option value="'+rid+'" selected>'+rname+'</option>');
                }
            });
        };
        var cselect = function(citys){
            $cSelect.html("");
            $.each(citys,function(i,city){
                var cid = parseInt(city.id,10);
                var cname = city.name;
                var csub = city.sub;
                if(i==0 && opts.cid==0){
                    opts.cid=cid;
                };
                if (cid!=opts.cid) {
                    $cSelect.append('<option value="'+cid+'">'+cname+'</option>');
                }else{
                    $cSelect.append('<option value="'+cid+'" selected>'+cname+'</option>'); 
                    if(csub.length>0){rselect(csub);};
                }
            });
        };
        var pselect = function(){
            $pSelect.html("");
            $.each(arrCity,function(i,province){
                var pid = parseInt(province.id,10);
                var pname = province.name;
                var psub = province.sub;
                if (pid!=opts.pid) {
                    $pSelect.append('<option value="'+pid+'">'+pname+'</option>');
                }else{
                    $pSelect.append('<option value="'+pid+'" selected>'+pname+'</option>');                 
                    if(psub.length>0){cselect(psub);};
                };          
            });
        };
        pselect();
        $pSelect.live("change",function(){
            opts.pid = this.value;
            opts.cid = 0;
            opts.rid = 0;
            pselect();
        });
        $cSelect.live("change",function(){
            opts.cid = this.value;
            opts.rid = 0;
            pselect();
        });
    };
}(jQuery));
//获取指定名称的cookie的值 
function getCookie(objName){
	var arrStr = document.cookie.split("; "); 
	for(var i = 0;i < arrStr.length;i ++){ 
		var temp = arrStr[i].split("="); 
		if(temp[0] == objName) return unescape(temp[1]); 
	}
} 
/*
* 兑换逻辑
*/
var OPPO = {};
OPPO.exchange = {
    submit:function(goods_id,goods_type){
        var num = parseInt($('#goods_cnt').val(),10);
        var points = parseInt($("#goods_points").text(),10);
        var token = getCookie('OPPO_POINTS_TOKEN');
        if('undefined' == goods_id) return false;
        if(num < 0) return false;
        $.ajax({
            url:'/exchange',
            data:{goods_id:goods_id,num:num,token:token},
            dataType:'json',
            type:'POST',
            async:false,
            success:function(data){
                var status = parseInt(data.no,10);
                OPPO.exchange.status(status,data.msg);
            },
            error:function(){
                OPPO.exchange.status(999);
            }
        });
    },
    status:function(status,msg){
        switch(status){
            case 0:
                OPPO.exchange.dialogClose();
                $(".points-dialog-total").text(OPPO.exchange.num*OPPO.exchange.points);
                if (OPPO.exchange.gtype==0) {
                    $(".points-xn").hide();
                    $(".points-sw").show();
                }else{
                    $(".points-sw").hide();
                    $(".points-xn").show();
                }
                $("#jfcg").dialog();
            break;
            case 1:
                OPPO.exchange.login();
            break;
            case 2:
                OPPO.exchange.dialogClose();
                $(".points-jfbg").show();
                $("#jfbg").dialog();
            break;
            default:
                if (msg) {
                    $(".points-msg").text(msg);
                }else{
                    $(".points-msg").text("服务器繁忙");
                }
                $(".points-jfbg").hide();
                OPPO.exchange.dialogClose();
                $(".points-msg").show();
                $("#jfbg").dialog();
            break;
        };
    },
    event:function(){
        $("#addressForm").find("input").live("blur",function(){
            OPPO.exchange.checkAddress();
            return false;
        });
        $("#addressForm").find("input").live("keyup",function(){
            OPPO.exchange.checkAddress();
            return false;
        });
        $("#addressForm").find("select").live("change",function(){
            OPPO.exchange.checkAddress();
            return false;
        });
        $("#addressForm").find("input").live("keydown",function(event){
            var keycode = parseInt(event.keyCode,10);
            if (keycode==13) {
                if ($("#addressSubmit").hasClass("disabled")) {
                    OPPO.exchange.checkAddress();
                }else{
                    OPPO.exchange.submitAddress();
                }
            };
        });
        $("#addressSubmit").live("click",function(){
            if ($(this).hasClass("disabled")) {
                OPPO.exchange.checkAddress();
            }else{
                OPPO.exchange.submitAddress();
            }
            return false;
        });
    },
    alertAddress:function(address){
        var pid = 0;
        var cid = 0;
        var rid = 0;
        if (address) {
            $("#shipping_receiver").val(address.receiver);
            $("#shipping_mobile").val(address.mobile);
            $("#shipping_phone_area_code").val(address.phone_area_code);
            $("#shipping_phone").val(address.shipping_phone);
            $("#shipping_phone_ext_code").val(address.phone_ext_code);
            $("#shipping_address").val(address.address);
            pid = parseInt(address.provice_id||address.province_id,10);
            cid = parseInt(address.city_id,10);
            rid = parseInt(address.district_id,10);
        };
        $("#pcrSelect").pcrselect({
            pid:pid,
            cid:cid,
            rid:rid
        });
        OPPO.exchange.checkAddress();
        $("#shdz").dialog();
    },
    checkAddress:function(){
        $("#addressForm .error-1").hide();
        $("#addressForm .error-2").hide();
        $("#addressForm .error-3").hide();
        var name = $.trim($("#shipping_receiver").val());
        var mobile = $.trim($("#shipping_mobile").val());
        var areacode = $.trim($("#shipping_phone_area_code").val());
        var extcode = $.trim($("#shipping_phone_ext_code").val());
        var phone = $.trim($("#shipping_phone").val());
        var pid = parseInt($("#pcrSelect .pSelect").val(),10);
        var cid = parseInt($("#pcrSelect .cSelect").val(),10);
        var rid = parseInt($("#pcrSelect .rSelect").val(),10);
        var address = $.trim($("#shipping_address").val());
        var check = true;
        if (name=="") {
            $("#addressForm .error-1").show();
            check = false;
        };
        var mobileReg = /^0{0,1}(13[0-9]|147|15[0-9]|18[0-9])[0-9]{8}$/;
        var areacodeReg = /^0\d{2,3}$/;
        var phoneReg = /^\d{7,8}$/;
        var extcodeReg = /^\d{0,4}$/;
        if (mobile=="" && (areacode=="" || phone=="") ) {
            $("#addressForm .error-2").text("请输入您的手机号码或固定电话");
            $("#addressForm .error-2").show();
            check = false;
        }else{
            $("#addressForm .error-2").text("手机号码或固定电话格式不对");
            if ((mobile!="" && !mobileReg.test(mobile)) || (areacode!="" && !areacodeReg.test(areacode)) || (phone!="" && !phoneReg.test(phone)) || (extcode!="" && !extcodeReg.test(extcode)) || ((areacode=="" && phone!="") || (areacode!="" && phone=="") || (areacode=="" && phone=="" && extcode!="") )) {
                $("#addressForm .error-2").show();
                check=false;
            }
        }
        if (pid==0 || cid==0 || rid==0 || address=="") {
            $("#addressForm .error-3").show();
            check = false;
        };
        if (check) {
            $("#addressSubmit").removeClass("disabled");
        }else{
            $("#addressSubmit").addClass("disabled");
        }
        return check;
    },
    confirmAddress:function(goods_id,goods_type){
        var num = parseInt($('#goods_cnt').val(),10);
        $.ajax({
            url:'/exchange/get',
            type:'post',
            data:'goods_id='+goods_id+'&num='+num,
            dataType:'json',
            async:false,
            success:function(data){
                var status = parseInt(data.no,10);
                switch(status){
                    case 0://弹出地址框并初始化地址
                        var address = data.data;
                        OPPO.exchange.alertAddress(address);
                    break;
                    case 1://未登录
                        OPPO.exchange.login();
                    break;
                    case 2:
                        //OPPO.exchange.alertAddress(false);
                        OPPO.exchange.status(status);
                    break;
                    case 9:
                        OPPO.exchange.alertAddress(false);
                    break;
                    default:
                        OPPO.exchange.status(status,data.msg);
                    break;
                }
                return false;
            },
            error:function(){
                OPPO.exchange.status(999);
            }
        });
        return false;
    },
    submitAddress:function(){
        var data = $("#addressForm").serializeArray();
        data.push({name:'goods_id',value:OPPO.exchange.gid});
        data.push({name:'num',value:OPPO.exchange.num});
        data.push({name:'token',value:getCookie('OPPO_POINTS_TOKEN')});
        $("#addressSubmit").addClass("disabled");
        $.ajax({
            url:'/exchange',
            type:'post',
            dataType:'json',
            data:data,
            async:false,
            success:function(data){
                $("#addressSubmit").removeClass("disabled");
                var status = parseInt(data.no,10);
                OPPO.exchange.status(status,data.msg);
            },
            error:function(){
                $("#addressSubmit").removeClass("disabled");
                OPPO.exchange.status(999);
            }
        });
        return false;
    },
    beforeSubmit:function(goods_id,goods_type){
        OPPO.exchange.dialogClose();
        var num = parseInt($('#goods_cnt').val(),10);
        var points = parseInt($("#goods_points").text(),10);
        OPPO.exchange.gid = goods_id;
        OPPO.exchange.gtype = goods_type;
        OPPO.exchange.num = num;
        OPPO.exchange.points = points;
        if (goods_type==1) {    //优惠券
            this.submitConfirm(goods_id,goods_type);
        }else if(goods_type==0) { //实物
            this.confirmAddress(goods_id,goods_type);
            this.event();
        }
    },
    submitConfirm:function(goods_id,goods_type){
        var total = $("#result-points").html();
        var num = $("#result-num").html();
        $("#jfqr .points-dialog-text").find('span').eq(0).html(num);
        $("#jfqr .points-dialog-text").find('span').eq(1).html(total);
        $("#jfqr").dialog();
        $("#jfqr .dialogConfirm").live("click",function(){
            OPPO.exchange.submit(goods_id,goods_type);
            return false;
        });
    },
    login:function(){
        var onlineAccountUrl = 'https://account.oppo.com/index.php';
        var testAccountUrl = 'http://account.test.oppo.com/index.php';
        var currentUrl = encodeURI(window.location.href);
        var accountUrl = onlineAccountUrl;
        if (currentUrl.indexOf('test')>-1 || currentUrl.indexOf('devel')>-1) {
            var accountUrl = testAccountUrl;
        };
        location.href=accountUrl+'?q=user/login&back='+currentUrl;
    },
    dialogClose:function(){
        $("#mask").hide();
        $("#shdz").hide();
        $("#jfbg").hide();
        $("#jfcg").hide();
        $("#jfqr").hide();
        $(".points-msg").hide();
    }
};

function dialogClose(){
    window.location.href = window.location.href;
}