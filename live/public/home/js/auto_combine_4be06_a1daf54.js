dwfis.define("widget/backtotop",function(require,exports,module){var backtotop={init:function(){this.render(),this.scrollFn()},render:function(){var _tpl=function(obj){{var __p="";Array.prototype.join}with(obj||{})__p+='<div class="hy-side" id="J_hySide">\r\n    <div class="hy-side-nav">\r\n        <div class="hy-side-nav-item hover-download">\r\n            <a class="clickstat" target="_blank" href="http://www.huya.com/download/" eid="click/navi/right/download" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u4e0b\u8f7d">\r\n                <i class="hy-side-nav-phone"></i>\r\n                <p class="hy-side-nav-txt">\u4e0b\u8f7d</p>\r\n            </a>\r\n            <div class="hy-side-nav-download">\r\n                <a class="clickstat side-nav-download1" target="_blank" href="http://www.huya.com/download/" eid="click/navi/right/download" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u4e0b\u8f7d">\u4e0b\u8f7dAPP</a>\r\n                <a class="clickstat side-nav-download2" target="_blank" href="http://www.huya.com/download/#tv" eid="click/navi/right/download" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u4e0b\u8f7d">\u4e0b\u8f7dTV\u7248</a>\r\n            </div>\r\n        </div>\r\n        <a class="hy-side-nav-item clickstat" target="_blank" href="http://www.huya.com/e/zhubo" eid="click/navi/right/shower" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u6211\u8981\u76f4\u64ad">\r\n            <i class="hy-side-nav-video"></i>\r\n            <p class="hy-side-nav-txt">\u5f00\u64ad</p>\r\n        </a>\r\n        <a class="hy-side-nav-item clickstat" target="_blank" href="http://blog.huya.com/product/81" eid="click/navi/right/kefu" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u5ba2\u670d">\r\n            <i class="hy-side-nav-qa"></i>\r\n            <p class="hy-side-nav-txt">\u53cd\u9988</p>\r\n        </a>\r\n        <a class="hy-side-nav-item clickstat" target="_blank" href="http://help.huya.com" eid="click/navi/right/help" eid_desc="\u70b9\u51fb/\u5bfc\u822a/\u53f3\u4fa7/\u5e2e\u52a9">\r\n            <i class="hy-side-nav-help"></i>\r\n            <p class="hy-side-nav-txt">\u5e2e\u52a9</p>\r\n        </a>\r\n        <a class="hy-side-nav-item" id="J_hyBackToTop" style="display:none;" href="#">\r\n            <i class="hy-side-nav-top"></i>\r\n            <p class="hy-side-nav-txt">\u9876\u90e8</p>\r\n        </a>\r\n    </div>\r\n</div>';return __p};$("body").append(_tpl())},scrollFn:function(){var a=null,i=$("#J_hyBackToTop"),n=$(".js-responded-list");0==n.length&&(n=$(window)),n.on("scroll",function(){clearTimeout(a),a=setTimeout(function(){n.scrollTop()>200?i.show():i.hide()},60)}),i.click(function(a){a.preventDefault(),n[0]===window?$("html,body").animate({scrollTop:0},500):n.animate({scrollTop:0},500)})}};backtotop.init()});
;dwfis.define("widget/list-banner/ggcomment.js",function(){function t(){this.initialize.apply(this,arguments)}var a=$("#ggcomment");t.prototype={initialize:function(t){var a=null,e=this;this.area=t.area;try{(a=window.localStorage.getItem("list/banner"))&&(a=JSON.parse(a),e.createImage(a))}catch(n){}$(window).on("load",function(){setTimeout(function(){e.ajaxGetAds()},500)})},createImage:function(t){a.attr("href",t.link).append('<img src="'+t.picUrl+'" alt="'+t.title+'" style="width:100%;height:100px;">'),a.parents(".list-notice").show(),TT_RSC_EXPS({pos:"list/simplebanner",rsc:t.id})},ajaxGetAds:function(){$.ajax({url:window.APP_URL+"cache5min.php",type:"GET",dataType:"json",data:{type:4,area:this.area,num:1,m:"Ad","do":"ajaxGetAds"}}).done(function(t){try{if("1000"==t.status){var a=t.data[0];a?window.localStorage.setItem("list/banner",JSON.stringify(a)):window.localStorage.removeItem("list/banner")}else window.localStorage.removeItem("list/banner")}catch(e){}})}},a&&new t({area:a.attr("data-area")})});
;dwfis.define("respondHeight",function(e,i,n){function h(e){function i(){e.css({height:h.height()-n.height()})}var n=$("#duya-header"),h=$(window);DUYA_SUB.subscribe("resizeWide",i),i()}n.exports=h});
;dwfis.define("respondCard",function(t,e,i){function n(){this.initialize.apply(this,arguments)}n.prototype={initialize:function(t){this.$wrapElement=$(t.wrapElement),this.$itemElement=this.$wrapElement.find(t.itemElement),this.itemWidth=this.$itemElement.outerWidth(),this.createCsstext=t.createCsstext,this.iMargin=this.$itemElement.outerWidth(!0)-this.itemWidth,this.scale=t.scale,this.calculation(),this.bindEvent()},_importStyle:function(t,e){if(!document.getElementById(e)){var i=document.createElement("style");if(e&&(i.id=e),document.getElementsByTagName("head")[0].appendChild(i),i.styleSheet){if(document.getElementsByTagName("style").length>31)throw new Error("Exceed the maximal count of style tags in IE");i.styleSheet.cssText=t}else i.innerHTML=t}},calculation:function(){var t=this.$wrapElement.innerWidth(),e=Math.floor(t/(this.itemWidth+this.iMargin)),i=Math.floor(t/e)-this.iMargin,n=Math.floor(i/this.scale),s=this.createCsstext(i,n),l=document.getElementById("respondStyle");l?l.styleSheet?l.styleSheet.cssText=s:l.innerHTML=s:this._importStyle(s,"respondStyle")},bindEvent:function(){var t=this;$(window).on("resize.responseCard",function(){t.calculation()})}},i.exports=n});
;dwfis.define("components/lay-page/lay-page.js",function(a,e,t){function r(a){new c(a)}function n(a,e){return e.contains?e.contains(a):e.compareDocumentPosition?!!(16&e.compareDocumentPosition(a)):void 0}function s(a,e){for(;void 0!=a&&null!=a&&"BODY"!==a.tagName.toUpperCase();){if(a.tagName.toUpperCase()==e.toUpperCase())return a;a=a.parentNode}return!1}r.v="1.3";var p=document,o="getElementById",i="getElementsByTagName",u=0,c=function(a){var e=this,t=e.config=a||{},r=e.type();t.item=u++,t.cont=2===r?t.cont:3===r?t.cont[0]:p[o](t.cont),e.render(!0),e.jump(t.cont)};c.on=function(a,e,t){return a.attachEvent?a.attachEvent("on"+e,function(){t.call(a,window.even)}):a.addEventListener(e,t,!1),c},c.prototype.type=function(){var a=this.config;return"object"==typeof a.cont?void 0===a.cont.length?2:3:void 0},c.prototype.view=function(){var a=this,e=a.config,t=[],n={};if(e.pages=0|e.pages,e.curr=0|e.curr||1,e.groups="groups"in e?0|e.groups:5,e.first="first"in e?e.first:"&#x9996;&#x9875;",e.last="last"in e?e.last:"&#x5C3E;&#x9875;",e.prev="prev"in e?e.prev:"&#x4E0A;&#x4E00;&#x9875;",e.next="next"in e?e.next:"&#x4E0B;&#x4E00;&#x9875;",e.pages<=1)return"";for(e.groups>e.pages&&(e.groups=e.pages),n.index=0===e.groups?e.curr:Math.ceil((e.curr+1)/e.groups),e.curr>1&&e.prev&&t.push('<a href="javascript:;" class="laypage_prev" data-page="'+(e.curr-1)+'">'+e.prev+"</a>"),n.index>1&&e.first&&0!==e.groups&&e.groups!==e.pages&&t.push(e.pages-1>e.groups?'<a href="javascript:;" class="laypage_first" data-page="1"  title="&#x9996;&#x9875;">'+e.first+"</a><span>&#x2026;</span>":'<a href="javascript:;" class="laypage_first" data-page="1"  title="&#x9996;&#x9875;">'+e.first+"</a>"),n.poor=Math.floor((e.groups-1)/2),n.start=n.index>1?e.curr-n.poor:1,n.end=n.index>1?function(){var a=e.curr+(e.groups-n.poor-1);return a>e.pages?e.pages:a}():e.groups,n.end-n.start<e.groups-1&&(n.start=n.end-e.groups+1);n.start<=n.end;n.start++)t.push(n.start===e.curr?'<span class="laypage_curr" '+(/^#/.test(e.skin)?'style="background-color:'+e.skin+'"':"")+">"+n.start+"</span>":'<a href="javascript:;" data-page="'+n.start+'">'+n.start+"</a>");return e.pages>e.groups&&n.end<e.pages&&e.last&&0!==e.groups&&t.push(e.pages-1>e.groups?'<span>&#x2026;</span><a href="javascript:;" class="laypage_last" title="&#x5C3E;&#x9875;"  data-page="'+e.pages+'">'+e.last+"</a>":'<a href="javascript:;" class="laypage_last" title="&#x5C3E;&#x9875;"  data-page="'+e.pages+'">'+e.last+"</a>"),n.flow=!e.prev&&0===e.groups,(e.curr!==e.pages&&e.next||n.flow)&&t.push(function(){return n.flow&&e.curr===e.pages?'<span class="page_nomore" title="&#x5DF2;&#x6CA1;&#x6709;&#x66F4;&#x591A;">'+e.next+"</span>":'<a href="javascript:;" class="laypage_next" data-page="'+(e.curr+1)+'">'+e.next+"</a>"}()),'<div name="laypage'+r.v+'" class="laypage_main laypageskin_'+(e.skin?function(a){return/^#/.test(a)?"molv":a}(e.skin):"default")+'" id="laypage_'+a.config.item+'">'+t.join("")+function(){return e.skip?'<span class="laypage_total"><label>&#x5230;&#x7B2C;</label><input type="number" min="1" onkeyup="this.value=this.value.replace(/\\D/, \'\');" class="laypage_skip"><label>&#x9875;</label><button type="button" class="laypage_btn">&#x786e;&#x5b9a;</button></span>':""}()+"</div>"},c.prototype.jump=function(a){if(a){var e=this,t=e.config;a.onclick=function(r){var r=r||event,p=r.target||r.srcElement;if(n(p,this))if(s(p,"a")){var o=0|p.getAttribute("data-page");t.curr=o,e.render()}else if(s(p,"button")){var u=a[i]("input")[0],o=0|u.value.replace(/\s|\D/g,"");o&&(t.curr=o>t.pages?t.pages:o,e.render())}},a.onkeydown=function(r){var r=r||event,p=r.target||r.srcElement;if(n(p,this)&&s(p,"input")&&13==r.keyCode){var o=a[i]("input")[0],u=0|o.value.replace(/\s|\D/g,"");u&&(t.curr=u>t.pages?t.pages:u,e.render())}}}},c.prototype.render=function(a){var e=this,t=e.config,r=e.view();t.cont.innerHTML=r,t.jump&&t.jump(t,a),t.hash&&!a&&(location.hash="!"+t.hash+"="+t.curr)},t.exports=r});
;dwfis.define("formatNumber",function(){function r(r,t){for(var e=r?r.toString().split("."):["0"],s=t?t.split("."):[""],a="",n=e[0],u=s[0],i=n.length-1,b=!1,f=u.length-1;f>=0;f--)switch(u.substr(f,1)){case"#":i>=0&&(a=n.substr(i--,1)+a);break;case"0":a=i>=0?n.substr(i--,1)+a:"0"+a;break;case",":b=!0,a=","+a}if(i>=0)if(b)for(var m=n.length;i>=0;i--)a=n.substr(i,1)+a,i>0&&(m-i)%3==0&&(a=","+a);else a=n.substr(0,i+1)+a;a+=".",n=e.length>1?e[1]:"",u=s.length>1?s[1]:"",i=0;for(var f=0;f<u.length;f++)switch(u.substr(f,1)){case"#":i<n.length&&(a+=n.substr(i++,1));break;case"0":a+=i<n.length?n.substr(i++,1):"0"}return a.replace(/^,+/,"").replace(/\.$/,"")}var t={isFormatNumber:!1,formatNumber:function(r){var t=Number(r);return t&&t>1e4?(t/1e4).toFixed(1)+"\u4e07":t},formatNumber2:r,fnFormat:function(r){if(!this.isFormatNumber){var t=r.find(".js-num"),e=this;t.each(function(r,t){var s=$.trim($(t).text());$(t).text(e.formatNumber(s))}),this.isFormatNumber=!0}}};return t});
;dwfis.define("exposureReport",function(t,i,e){function o(){this.initialize()}o.prototype={initialize:function(){{var t=this;$(window)}this.limited=20,this.aData=[],this.route="",this.onload=!1,window.TT&&TT.on("reportReady",function(){t._exposure()},!0)},reportData:function(t,i){this.route!==i?(this.aData=[].concat(t.slice(0,t.length)),this.route=i):this.aData=this.aData.concat(t.slice(0,t.length)),this._exposure()},_exposure:function(){if(!window.ya)return!1;for(;this.aData.length>0;){var t=this.aData.splice(0,this.limited),i=[],e="";$.each(t,function(t,e){i.push(e.uid||e.lUid||0)}),e="uidlist:["+i.join(",")+"]";try{ya.reportProductEvent({traceid:0,eid:"pageview/position",position:this.route,extra:e})}catch(o){}}}},e.exports=o});
;dwfis.define("widget/list-more",function(t,s,i){function e(){this.initialize.apply(this,arguments)}e.prototype={initialize:function(){this.$listMore=$(".list-more");var t="";this.$listMore.hasClass("more-status-loading")&&(t="loading"),this.$listMore.hasClass("more-status-empty")&&(t="empty"),this.$listMore.hasClass("more-status-end")&&(t="end"),this.status=t},loading:function(){this.$listMore.attr("class","list-more more-status-loading"),this.status="loading"},normal:function(){this.$listMore.attr("class","list-more"),this.status=""},empty:function(){this.$listMore.attr("class","list-more more-status-empty"),this.status="empty"},end:function(){this.$listMore.attr("class","list-more more-status-end"),this.status="end"}},i.exports=e});
;dwfis.define("listTags",function(require,exports,module){function ListTags(){this.initialize.apply(this,arguments)}var laypage=require("components/lay-page/lay-page.js"),format=require("formatNumber"),ExposureReport=require("exposureReport"),MoreStatus=require("widget/list-more"),exposureReport=new ExposureReport;ListTags.prototype={initialize:function(obj){this.$tagNav=$(obj.tagNav),this.$tagContainer=$(obj.tagContainer),this.$jsListPage=$(obj.jsListPage),this.$jsRespondedList=$(obj.jsRespondedList),this.$roleFilter=$(obj.roleFilter),this.eid=obj.eid,this.position=obj.position,this.gameType=obj.gameType,this.id=obj.id||0,this.type=obj.type||"tagAll",this.moreStatus=new MoreStatus,this.url=window.APP_URL||"http://www.huya.com/",this.liveTpl=function(obj){{var __t,__p="";Array.prototype.join}with(obj||{}){__p+="";for(var i=0,len=list.length;len>i;i++){var data=list[i];if(!window.G_AREAFIB||!_.contains(G_blackListForBoss,parseInt(data.gid,10))){__p+='\r\n<li class="game-live-item">\r\n    ';var url=APP_URL+data.privateHost,seat="";if(1==data.screenType&&2==data.liveSourceType)var screenshot=data.screenshot+"?imageview/4/0/w/190/h/338/rotate/270";else var screenshot=data.screenshot+"?imageview/4/0/w/338/h/190/blur/1";if(seat="undefined"==typeof rankStart?position+"/"+(i+1):position+"/"+(rankStart+i),__p+='\r\n    <a href="'+(null==(__t=url)?"":__t)+'" class="video-info new-clickstat" target="_blank" report=\'{"eid":"'+(null==(__t=eid)?"":__t)+'","position":"'+(null==(__t=seat)?"":__t)+'","game_id":"'+(null==(__t=data.gid)?"":__t)+'","ayyuid":"'+(null==(__t=data.uid)?"":__t)+'"}\'>\r\n        <img class="pic" data-original="'+(null==(__t=screenshot)?"":__t)+'" src="http://assets.dwstatic.com/amkit/p/duya/common/img/default_live.jpg" alt="'+(null==(__t=data.nick)?"":__t)+'\u7684\u76f4\u64ad" title="'+(null==(__t=data.nick)?"":__t)+'\u7684\u76f4\u64ad">\r\n        ',data.recommendTagName&&(__p+='<em class="tag tag-recommend">'+(null==(__t=data.recommendTagName)?"":__t)+"</em>"),__p+='\r\n        <div class="item-mask"></div>\r\n        <i class="btn-link__hover_i"></i>\r\n        ',"undefined"==typeof rankStart&&1==data.isBluRay&&(__p+='<em class="tag tag-blue">\u84dd\u5149</em>'),__p+="\r\n        ","undefined"!=typeof rankStart&&(__p+='\r\n            <em class="tag tag-rank tag-rank-'+(null==(__t=rankStart+i)?"":__t)+'">No.'+(null==(__t=rankStart+i)?"":__t)+"</em>\r\n        "),__p+='\r\n    </a>\r\n    <a href="'+(null==(__t=url)?"":__t)+'" class="title new-clickstat" target="_blank" report=\'{"eid":"'+(null==(__t=eid)?"":__t)+'","position":"'+(null==(__t=seat)?"":__t)+'","game_id":"'+(null==(__t=data.gid)?"":__t)+'","ayyuid":"'+(null==(__t=data.uid)?"":__t)+'"}\' title="'+(null==(__t=HUYA_UTIL.xssFilter(data.introduction))?"":__t)+'" target="_blank">'+(null==(__t=HUYA_UTIL.xssFilter(data.introduction))?"":__t)+'</a>\r\n    <span class="txt">\r\n        <span class="avatar fl">\r\n            <img data-original="'+(null==(__t=data.avatar180)?"":__t)+'" src="http://assets.dwstatic.com/amkit/p/duya/common/img/default_profile.jpg" alt="'+(null==(__t=data.nick)?"":__t)+'" title="'+(null==(__t=data.nick)?"":__t)+'">\r\n            <i class="nick" title="'+(null==(__t=data.nick)?"":__t)+'">'+(null==(__t=HUYA_UTIL.xssFilter(data.nick))?"":__t)+"</i>\r\n        </span>\r\n        ",gameType){if(""!=data.gameHostName)var gameTypeUrl=window.APP_URL+"g/"+data.gameHostName;else var gameTypeUrl=window.APP_URL+"g/"+data.gid;__p+='\r\n        <span class="game-type fr"><a target="_blank" href="'+(null==(__t=gameTypeUrl)?"":__t)+'" title="'+(null==(__t=data.gameFullName)?"":__t)+'">'+(null==(__t=data.gameFullName)?"":__t)+"</a></span>\r\n        "}__p+='\r\n        <span class="num"><i class="num-icon"></i><i class="js-num">'+(null==(__t=format.formatNumber(data.totalCount))?"":__t)+"</i></span>\r\n    </span>\r\n</li>\r\n"}}__p+="\r\n"}return __p},this.currPage=obj.currPage||1,this.pageSize=120,this.tagParams=obj.tagParams,this.bindEvent()},_getData:function(t,a){this.ajaxGet&&this.ajaxGet.abort(),this.ajaxGet=$.ajax({url:this.url+t.url,type:"GET",dataType:"json",data:{page:t.page}}).done(function(t){200===t.status&&a&&a(t.data)})},syncRender:function(){this.$tagContainer.css("visibility","visible"),this.createPageList(),$.isFunction($.fn.lazyload)&&this.$tagContainer.find("img").lazyload({threshold:200,container:this.$jsRespondedList}),exposureReport.reportData(LIST_DATA,this.position+"/0/1")},_navHighlight:function(t){var a=this.$tagNav.find("[data-id="+t+"]"),i=a.data("type");this.$tagNav.find(".active").removeClass("active"),a.addClass("active");var e=a.parents("dd");if(e.length){var s="\uff1a"+a.eq(0).text();e.addClass("active").find(".role").text(s)}this.id=t,this.type=i},createPageView:function(){var t=this;this._getData({url:this.tagParams[this.type]+"&"+this.type+"="+this.id,page:this.currPage},function(a){t._renderList(a)})},_renderList:function(t){if(t.datas&&t.datas.length>0){var a=this.liveTpl({list:t.datas,eid:this.eid,position:this.position+"/"+this.id+"/"+t.page,gameType:this.gameType,APP_URL:this.url});this.$tagContainer.html(a);var i=this.position+"/"+this.id+"/"+t.page;exposureReport.reportData(t.datas,i),$.isFunction($.fn.lazyload)&&this.$tagContainer.find("img").lazyload({threshold:200,container:this.$jsRespondedList}),this.moreStatus.normal()}1===t.totalPage&&0===t.totalCount?this.moreStatus.empty():1===t.totalPage?this.moreStatus.end():this.createPageList(t.totalPage)},startStatus:function(t){this.currPage=1,this.$tagContainer.html(""),this.$jsListPage.html(""),this.moreStatus.loading(),t&&t()},togglePageView:function(t,a){this._navHighlight(t),this.startStatus(a),this.createPageView()},createPageList:function(t){var a=this;laypage({cont:this.$jsListPage,pages:t||this.$jsListPage.attr("data-pages"),curr:this.currPage,skip:!0,groups:7,first:1,last:t||this.$jsListPage.attr("data-pages"),jump:function(t,i){i||(a.currPage=t.curr,a.createPageView(),a.$jsRespondedList.scrollTop(0))}})},goTo:function(t){var a=this;window.location.hash="tag"+t,a.togglePageView(t)},bindEvent:function(){var t=this;t.$tagNav.on("click","dd",function(){var a=$(this);if(!a.hasClass("role-filter")){if(a.hasClass("active"))return!1;$(".role-filter").find(".role").text(""),t.goTo(a.data("id"))}}),t.$roleFilter.on("click",".role-item > li",function(){var a=$(this);return a.hasClass("active")?!1:(a.parents(".role-filter").find(".role").text(a.text()),void t.goTo(a.data("id")))}),t.$tagNav.on("mouseenter",".role-filter",function(){var t=$(this);t.find(".js-filter-role").show()}),$(".role-filter").mouseleave(function(){t.$roleFilter.hide()})}},module.exports=ListTags});
;dwfis.define("app/all-live",function(e){e("widget/backtotop"),e("widget/list-banner/ggcomment.js");var i=e("respondHeight"),t=e("respondCard"),s=e("listTags"),a=$(".js-responded-list");i(a);var l=new t({wrapElement:"#js-live-list",itemElement:".game-live-item",scale:280/158,createCsstext:function(e,i){var t=".live-list .game-live-item {width:"+e+"px!important;}";return t+=".live-list .video-info {height:"+i+"px!important;}"}});DUYA_SUB.subscribe("sidebarShow",function(){a.addClass("narrow"),l.calculation()}),DUYA_SUB.subscribe("sidebarHide",function(){a.removeClass("narrow"),l.calculation()});var n=new s({tagNav:"#js-filter-list",jsListPage:"#js-list-page",tagContainer:"#js-live-list",jsRespondedList:".js-responded-list",roleFilter:".js-filter-role",eid:"click/position",gameType:!0,position:window.GAME_HOMENAME,tagParams:{tagAll:"cache.php?m=LiveList&do=getLiveListByPage",tmpId:"cache.php?m=LiveList&do=getTmpLiveByPage",recTag:"cache.php?m=LiveList&do=getRecTagLivePage"}}),o=location.hash.substring(4);""===o||0===o?n.syncRender():n.togglePageView(o,function(){$("#js-live-list").css("visibility","visible")})});