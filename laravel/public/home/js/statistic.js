/**
 * web页面相关统计js调用方式接口
 * 
 * @author simonx sanwkj@163.com
 */
var nmWebStatistic = function(channel) {
	this.img = null;
	this._init();
	this.params.CHANNEL_ID=channel;
};

nmWebStatistic.prototype = {
	HOST : 'http://i.stat.nearme.com.cn/',
	API_VIEW : 'statistics/ClientBrowseByUrl',
	API_DOWN : 'statistics/ClientDownloadByUrl',
	API_VISIT : 'statistics/WebPageVisit',
	params:{
		SYSTEM_ID:2,
		CHANNEL_ID:0,
		SOURCE_CODE:0,
		PRODUCT_ID:0,
		SSOID:0,
		WUID:'',
		MODEL:'',
		PLATFORM_ID:0,
		NETWORK_ID:'',
		SOURCE_VERSION:'',
		CATEGORY_ID:'',
		CHARGE_TYPE:'',
		CLICK_INDEX:'',
		REFER:'',
		BROWSER:'',
		PAGE_NAME:''
	},
	_init : function() {
		this.img = document.createElement('img');
		this.img.setAttribute('style','display:none');
		this.img.src='about:blank';
		document.body.appendChild(this.img);
		this._initBrowseFeature();
		this._initWuid();
	},
	view : function(source,pid,position) {
		this._resetReq();
		source && (this.params.SOURCE_CODE=source);
		position && (this.params.CLICK_INDEX=position);
		pid && (this.params.PRODUCT_ID=pid);
		
		var _this=this;
		setTimeout(function(){_this.img.src=_this.HOST+_this.API_DOWN+'?'+_this._calcQueryString();},500);
	},
	download : function(source,pid,position) {
		this._resetReq();
		source && (this.params.SOURCE_CODE=source);
		position && (this.params.CLICK_INDEX=position);
		pid && (this.params.PRODUCT_ID=pid);
		
		var _this=this;
		setTimeout(function(){_this.img.src=_this.HOST+_this.API_DOWN+'?'+_this._calcQueryString();},500);
	},
	visit : function(source,pid) {
		this._resetReq();
		this.params.PAGE_NAME=source+'_'+pid;
		var _this=this;
		setTimeout(function(){_this.img.src=_this.HOST+_this.API_VISIT+'?'+_this._calcQueryString();},500);
	},
	_resetReq:function(){
		this.params.SOURCE_CODE='';
		this.params.CLICK_INDEX='';
		this.params.PRODUCT_ID='';
	},
	_initWuid:function() {
		var wuid=this.Cookie('_nm_web_wuid');
		if( wuid ){
			this.params.WUID=wuid;
		}else{
			this.params.WUID='WEB'+this.uiniqid(12);
			this.setCookie('_nm_web_wuid',this.params.WUID,365);
		}
	},
	_initBrowseFeature:function() {
		this.params.REFER=document.referrer;
		this.params.BROWSER=navigator.userAgent;
		/oppo(\w+)/gi.test(this.params.BROWSER);
		if( RegExp.$1=='' ){
			/;([\w\s]+) Build/gi.test(this.params.BROWSER);
		}
		this.params.MODEL=RegExp.$1.replace(/^\s+|\s+$/,'');
	},
	_calcQueryString:function() {
		var q='';
		for( v in this.params ){
			if(this.params[v]!=''){
				if(q==''){
					q+=v+'='+encodeURIComponent(this.params[v]);
				}else{
					q+='&'+v+'='+encodeURIComponent(this.params[v]);
				}
			}
		}
		return q;
	},
	getCookieVal:function(B) {
		var A = document.cookie.indexOf(";", B);
		if (A == -1) {
			A = document.cookie.length;
		}
		return unescape(document.cookie.substring(B, A));
	},
	Cookie:function(D) {
		var B = D + "=";
		var F = B.length;
		var A = document.cookie.length;
		var E = 0;
		while (E < A) {
			var C = E + F;
			if (document.cookie.substring(E, C) == B) {
				return this.getCookieVal(C);
			}
			E = document.cookie.indexOf(" ", E) + 1;
			if (E == 0) {
				break;
			}
		}
		return null;
	},
	setCookie:function (key, val, expire, path, domain, issecure) {
		if (expire) {
			var A = new Date();
			A.setTime(A.getTime() + (24 * 60 * 60 * 1000 * expire));
		} else {
			A = false;
		}
		document.cookie = key + "=" + escape(val)
				+ ((A) ? "; expires=" + A.toGMTString() : "")
				+ ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "")
				+ ((issecure) ? "; secure" : "");
	},
	deleteCookie:function (A) {
		expdate = new Date();
		expdate.setTime(expdate.getTime() - (86400 * 1000 * 1));
		this.setCookie(A, "", expdate);
	},
	uiniqid:function (bit){
		var str='';
		for( var i=0;i<Math.ceil(bit/2);i++ ){
			s=Math.round( 255*Math.random() );
			if(s<16){
				str+='0'+s.toString(16);
			} else {
				str+=s.toString(16);
			}
		}
		if(str.length>bit){
			str=str.substring(0, bit);
		}
		return str;
	}
};