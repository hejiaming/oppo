if(typeof oppo=="undefined"){var oppo={}}var accountHost="http://my.oppo.com";var staticHost="http://my.oppo.com";oppo.win={isScroll:false,init:function(){oppo.win.isTest();oppo.win.createLink();var body=document.body||document.getElementsByTagName("body")[0];var account_bg=oppo.win.createDiv("account_bg","account_bg");var width=document.documentElement.clientWidth||window.innerWidth;var height=document.documentElement.clientHeight||window.innerHeight;var account_contain=oppo.win.createDiv("account_contain","account_contain");body.appendChild(account_bg);body.appendChild(account_contain);var obj=document.getElementById("account_bg");if(obj.attachEvent){obj.attachEvent("onclick",function(){document.getElementById("account_contain").innerHTML="";oppo.win.closeWindow()})}else if(obj.addEventListener){obj.addEventListener("click",function(){document.getElementById("account_contain").innerHTML="";oppo.win.closeWindow()})}},closeWindow:function(){oppo.win.isScroll=true;document.getElementById("account_bg").style.display="none";document.getElementById("account_contain").className="account_contain";document.getElementById("account_contain").style.display="none";oppo.win.removeClass(document.getElementsByTagName("body")[0],"account_overflow_hide")},createIframe:function(url,isHTML5){var url=url,isHTML5=isHTML5||false;if(typeof url==="boolean"){isHTML5=url;url=false}var iframe=document.createElement("iframe");iframe.id="oppo_iframe";iframe.scrolling="no";iframe.frameBorder=0;iframe.noresize="noresize";if(url){iframe.src=accountHost+"/auth/login?is_dialog=1&callback="+encodeURIComponent(url)}else{if(isHTML5){iframe.src=accountHost+"/auth/login?is_dialog=1&type=html5"}else{iframe.src=accountHost+"/auth/login?is_dialog=1&callback="+encodeURIComponent(location.href)}}iframe.style.border=0;iframe.style.width="100%";iframe.style.height="100%";iframe.style.marginwidth=0;iframe.style.marginheight=0;iframe.style.background="#ededed";iframe.allowtransparency="true";return iframe},createLink:function(){var head=document.head||document.getElementsByTagName("head")[0];var link=document.createElement("link");link.type="text/css";link.rel="stylesheet";link.href=staticHost+"/assets/stylesheets/oppo.login.css";head.appendChild(link)},createDiv:function(id,className){var div=document.createElement("div");div.className=className;div.id=id;return div},createCloseDiv:function(){var a=document.createElement("a");a.className="account_close";a.id="account_close";a.href="javascript:;";var createText=document.createTextNode("×");a.appendChild(createText);return a},open:function(url,happened){document.getElementById("account_bg").style.display="block";document.getElementById("account_contain").style.display="block";document.getElementById("account_contain").innerHTML="";if(oppo.win.isIOS()){document.getElementById("account_bg").style.position="absolute";document.getElementById("account_contain").style.display="absolute";document.body.scrollTop=0;oppo.win.addClass(document.getElementsByTagName("body")[0],"account_overflow_hide");oppo.win.isScroll=false;window.onscroll=function(){if(!oppo.win.isScroll&&document.body&&document.body.scrollTop){document.body.scrollTop=0}}}var iframe=oppo.win.createIframe(url,happened);document.getElementById("account_contain").appendChild(iframe);setTimeout(function(){document.getElementById("account_contain").className="account_contain active"},50)},isIOS:function(){if(/webOS|iPhone|iPod/i.test(navigator.userAgent)){return true}else{return false}},hasClass:function(obj,cls){return obj.className.match(new RegExp("(\\s|^)"+cls+"(\\s|$)"))},addClass:function(obj,cls){if(!this.hasClass(obj,cls))obj.className+=" "+cls},removeClass:function(obj,cls){if(oppo.win.hasClass(obj,cls)){var reg=new RegExp("(\\s|^)"+cls+"(\\s|$)");obj.className=obj.className.replace(reg," ")}},isTest:function(){var currentUrl=encodeURI(window.location.href);if(currentUrl.indexOf("test.")>-1){accountHost="http://test.my.oppo.com";staticHost="http://test.my.oppo.com/"}else if(currentUrl.indexOf("test1.")>-1){accountHost="http://test1.my.oppo.com";staticHost="http://test1.my.oppo.com/"}else if(currentUrl.indexOf("test2.")>-1){accountHost="http://test2.my.oppo.com";staticHost="http://test2.my.oppo.com/"}else if(currentUrl.indexOf("dev.")>-1){accountHost="http://dev.my.oppo.com";staticHost="http://dev.my.oppo.com/"}else if(currentUrl.indexOf("pre.")>-1){accountHost="http://pre.my.oppo.com";staticHost="http://pre.my.oppo.com/"}}};oppo.win.init();