<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    @section('left');
    <div class="duya-header" id="duya-header">

        <div class="duya-header-wrap clearfix">

            <div class="duya-header-bd clearfix">

                <h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">

                    <a href="http://www.huya.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img src="images/logo.png" alt="虎牙直播" width="120" height="36"></a>

                </h1>

                <div class="duya-header-nav">

                    <span class="hy-nav-link"><a href="http://www.live.com/" class="hy-nav-title clickstat" eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>

                    <span class="hy-nav-link"><a href="http://www.live.com/live" class="hy-nav-title hiido_stat clickstat"  hiido_code="10004221" eid="click/navi/zhibo" eid_desc="点击/导航/直播">直播</a></span>

                    <div class="hy-nav-expand">

                        <div class="hy-nav-title nav-main" id="nav-main"><a href="http://www.huya.com/g">分类</a><i class="icon-arrow"></i></div>

                        <div class="nav-expand-list nav-expand-game">

                            <i class="arrow"></i>

                        </div>

                    </div>

                    <!-- <span class="hy-nav-link"><a href="http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->

                </div>

                <div class="duya-header-search clearfix" >

                    <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.huya.com/search.php" target="_blank">

                        <input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">

                        <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton" eid_desc="点击/搜索/搜索按钮"></button>

                    </form>

                </div>

                <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic" eid_desc="点击/推荐/顶部导航图片"></div>

                <div class="duya-header-control clearfix">

                    <div class="hy-nav-right hy-nav-kaibo">

                        <a class="hy-nav-title clickstat" href="http://www.huya.com/e/zhubo" eid="click/navi/kaibo" eid_desc="点击/导航/开播" target="_blank">

                            <i class="hy-nav-icon hy-nav-video-icon"></i>

                            <span class="title">开播</span>

                        </a>

                        <div class="nav-expand-list nav-expand-kaibo">

                            <i class="arrow"></i>

                            <div class="kaibo-nav">

                                <a target="_blank" href="http://www.huya.com/e/zhubo"><i class="hy-nav-video-icon"></i><span>我要开播</span></a>

                                <a target="_blank" href="#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>

                            </div>

                        </div>

                    </div>

                    <div class="hy-nav-right">

                        <a class="hy-nav-title clickstat" href="http://www.huya.com/download/" eid="click/navi/download" eid_desc="点击/导航/下载" target="_blank">

                            <i class="hy-nav-icon hy-nav-download-icon"></i>

                            <span class="title">下载</span>

                        </a>

                        <div class="nav-expand-list nav-expand-download">

                            <i class="arrow"></i>

                            <div class="download-nav">

                                <a target="_blank" href="http://www.huya.com/download/"><i class="hy-nav-app-icon"></i><span>移动APP</span></a>

                                <a target="_blank" href="http://www.huya.com/download/#players_pc"><i class="hy-nav-play-icon"></i><span>主播工具</span></a>

                                <!-- <a target="_blank" href="http://www.huya.com/download/#tv"><i class="hy-nav-tv-icon"></i><span>虎牙TV版</span></a> -->

                            </div>

                        </div>

                    </div>

                    <div class="hy-nav-right nav-subscribe success-login">

                        <a class="hy-nav-title new-clickstat" href="http://i.huya.com/index.php?m=Subscribe" target="_blank" report='{"eid":"click/position","position":"click/navi/dingyue"}'>

                            <i class="hy-nav-icon hy-nav-subscribe-icon"></i>

                            <span class="title">订阅</span>

                        </a>

                        <div class="nav-expand-list">

                            <i class="arrow"></i>

                            <div class="subscribe-hd clearfix" style="display:none;">

                                <h5>我订阅的有<em class="subscribe-key">0</em>个正在直播</h5>

                            </div>

                            <div class="subscribe-bd" style="display:none;">

                                <ul class="subscribe-list"></ul>

                                <a class="subscribe-all" href="http://i.huya.com/index.php?m=Subscribe" target="_blank">全部订阅</a>

                            </div>

                            <div class="mod-list-more">

                                <div class="more-loading">

                                    <i class="icon-loading"></i>

                                    <em>正在加载您的订阅...</em>

                                </div>

                                <div class="more-empty">

                                    <i class="icon-empty"></i>

                                    <p>暂无订阅的直播。<br/><em>你可以在主播的播放页进行订阅喔！</em></p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="hy-nav-right hy-nav-history">

                        <a class="hy-nav-title nav-history new-clickstat" id="nav-history" href="http://i.huya.com/index.php?m=Subscribe&watch=1" target="_blank" report='{"eid":"click/position","position":"click/navi/lishi"}'>

                            <i class="hy-nav-icon hy-nav-history-icon"></i>

                            <span class="title">历史</span>

                        </a>

                        <div class="nav-expand-list nav-expand-history">

                            <i class="arrow"></i>

                            <div class="load-history">

                                <div class="mod-list-more">

                                    <div class="more-loading">

                                        <i class="icon-loading"></i>

                                        <em>正在加载您的历史...</em>

                                    </div>

                                </div>

                            </div>

                            <a href="http://i.huya.com/index.php?m=Subscribe&watch=1" class="nav-expand-history-more J_gNavLogin" style="display:none" target="_blank">更多&gt;</a>

                        </div>

                    </div>

                    <div class="hy-nav-right un-login">

                        <div class="hy-nav-title">

                            <i class="hy-nav-icon hy-nav-login-icon"></i>

                            <div class="un-login-btn">

                                <a class="clickstat" id="nav-login" href="#" eid="click/navi/sign" eid_desc="点击/导航/登录">登录</a>

                                <i>|</i>

                                <a class="clickstat" id="nav-regiest" href="#" eid="click/navi/login" eid_desc="点击/导航/注册">注册</a>

                            </div>

                        </div>

                    </div>

                    <div class="hy-nav-right nav-user success-login">

                        <a class="nav-user-title" href="http://i.huya.com/" target="_blank">

                            <img id="login-userAvatar" src="images/10001.jpg" alt="头像" />

                            <span id="login-username"></span>

                            <i></i>

                        </a>

                        <div class="nav-expand-list">

                            <i class="arrow"></i>

                            <div class="tt-user-card">

                                <a class="btn-exit" id="nav-loggout" href="#"><i class="hy-nav-exit-icon"></i><span>退出</span></a>

                                <div class="u-info">

                                    <a class="avatar" id="J_huyaNavUserCardAvatar" href="http://i.huya.com/" target="_blank">

                                        <img src="images/10001.jpg" id="J_huyaNavUserCardAvatarImg" />

                                    </a>

                                    <p class="nick" id="J_huyaNavUserCardNick">...</p>

                                    <p class="user-sign" id="J_huyaNavUserCardSign">...</p>

                                    <div class="exp clearfix">

                                        <div class="between">

                                            <span class="from" id="J_huyaNavUserCardExpFrom">LV-</span>

                                            <div class="bar-cnt">

                                                <p id="J_huyaNavUserCardBarInfo"></p>

                                                <p class="bar">

                                                    <i id="J_huyaNavUserCardExpBar"></i>

                                                    <span id="J_huyaNavUserCardExpText"></span>

                                                </p>

                                            </div>

                                            <span class="to" id="J_huyaNavUserCardExpTo">LV-</span>

                                        </div>

                                        <a class="help new-clickstat" id="J_huyaUserLvIntro" href="#" report='{"eid":"click/position","position":"header/usercard/help"}'><i></i>升级加速</a>

                                    </div>

                                </div>

                                <div class="u-assets">

                                    <div class="bd">

                                        <span class="type-name">资产</span>

                                        <ul class="type">

                                            <li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">...</em></li>

                                            <li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk">...</em></li>

                                            <li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb">...</em></li>

                                        </ul>

                                        <a class="topup new-clickstat" target="_blank" href="http://i.huya.com/?evt=recharge" report='{"eid":"click/position","position":"header/usercard/recharge"}'>充值</a>

                                    </div>

                                </div>

                                <div class="u-task loading" id="J_huyaNavUserCardTask">

                                </div>

                                <div class="u-links">

                                    <ul>

                                        <li class="links-i">

                                            <a href="http://i.huya.com/" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"header/usercard/entrance1"}'>

                                                <i></i>

                                                <p>个人中心</p>

                                            </a>

                                        </li>

                                        <li class="links-noble">

                                            <a href="http://i.huya.com/index.php?m=NobleSys" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance2"}'>

                                                <i></i>

                                                <p>我的贵族</p>

                                            </a>

                                        </li>

                                        <li class="links-msg" id="J_huyaNavUserMsg">

                                            <a href="http://i.huya.com/index.php?m=Msg&do=listMsg" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance3"}'>

                                                <i></i>

                                                <p>我的消息</p>

                                            </a>

                                            <b class="dot" id="J_huyaNavUserMsgDot"></b>

                                        </li>

                                        <li class="links-play">

                                            <a href="http://www.huya.com/e/zhubo" target="_blank" report='{"eid":"click/position","position":"header/usercard/entrance4"}'>

                                                <i></i>

                                                <p>我要直播</p>

                                            </a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="duya-header-tips">

                    <em class="close-tips">&times;</em>

                    <p class="tips-top">有新的直播内容，<span class="refresh-current">刷新看看</span></p>

                    <div id="refresh-wrap">

                        <h5>你订阅的主播信息</h5>

                        <div class="refresh-tips"></div>

                        <h6><input type="checkbox" id="checkTips"><label for="checkTips">今天内不提醒</label></h6>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="mod-sidebar">

        <div class="sidebar-hide">

            <ul class="sidebar-icon-list">

                <li class="sidebar-icon-item">

                    <a class="sidebar-icon-link clickstat js-sub" href="http://i.huya.com/index.php?m=Subscribe" title="订阅" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅">

                        <i class="sidebar-icon-sub"></i>

                        <span class="sidebar-title">订阅</span>

                    </a>

                </li>

                <li class="sidebar-icon-item">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/l" title="直播" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播">

                        <i class="sidebar-icon-live"></i>

                        <span class="sidebar-title">直播</span>

                    </a>

                </li>

                <li class="sidebar-icon-item">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g" title="分类" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏">

                        <i class="sidebar-icon-type"></i>

                        <span class="sidebar-title">分类</span>

                    </a>

                </li>

                <li class="sidebar-icon-item ">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100023" title="网游" eid="click/navi/zuoce/classify1" eid_desc="点击/导航/左侧导航/classify1">

                        <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>

                        <span class="sidebar-title">网游</span>

                    </a>

                </li>

                <li class="sidebar-icon-item ">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100002" title="单机" eid="click/navi/zuoce/classify2" eid_desc="点击/导航/左侧导航/classify2">

                        <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>

                        <span class="sidebar-title">单机</span>

                    </a>

                </li>

                <li class="sidebar-icon-item ">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100022" title="娱乐" eid="click/navi/zuoce/classify3" eid_desc="点击/导航/左侧导航/classify3">

                        <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>

                        <span class="sidebar-title">娱乐</span>

                    </a>

                </li>

                <li class="sidebar-icon-item ">

                    <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100004" title="手游" eid="click/navi/zuoce/classify4" eid_desc="点击/导航/左侧导航/classify4">

                        <i style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>

                        <span class="sidebar-title">手游</span>

                    </a>

                </li>

            </ul>

            <span id="sidebar-show-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/open"  eid_desc="点击/导航/左侧导航/展开"></span>

            <a target="_blank" class="sidebar-icon-author" href="http://www.huya.com/e/zhubo">

                <i></i>

                <span>开直播</span>

            </a>

            <a href="http://jb.ccm.gov.cn/" target="_blank" style=" position: absolute;bottom: 70px;width: 100%;text-align: center;" class="gov-jb sq-gov-jb">举报</a>

        </div>

        <div class="sidebar-show">

            <div id="sidebar-scroll">

                <div class="sidebar-show-nav">

                    <a href="http://i.huya.com/index.php?m=Subscribe" class="clickstat sidebar-show-line js-sub" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅"><i class="sidebar-icon-sub"></i>我的订阅<span class="subscribe-text"> (请登录)</span></a>

                    <a href="http://www.huya.com/l" class="clickstat sidebar-show-line" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播"><i class="sidebar-icon-live"></i> 全部直播</a>

                    <a href="http://www.huya.com/g" class="clickstat sidebar-show-line" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏"><i class="sidebar-icon-type"></i>全部分类</a>

                </div>



                <div class="sidebar-recom">

                    <div class="m sidebar-show-line ">

                        <a class="m-title clickstat" href="http://www.huya.com/g/100023" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1">

                            <i class="m-title-type" style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>

                            <span class="m-title-span">网游竞技</span>

                        </a>

                        <div class="m-bd">

                            <div class="recomend-list clearfix">



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/lol" title="英雄联盟">英雄联盟</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/4" title="穿越火线">穿越火线</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/2" title="DNF">DNF</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/6" title="魔兽DOTA">魔兽DOTA</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/393" title="炉石传说">炉石传说</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/9" title="QQ飞车">QQ飞车</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/135" title="逆战">逆战</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/2174" title="守望先锋">守望先锋</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/802" title="坦克世界">坦克世界</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/107" title="问道">问道</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/1612" title="起凡">起凡</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/2602" title="枪火游侠">枪火游侠</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/897" title="剑灵">剑灵</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/100035" title="最新网游">最新网游</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g_ol" title="全部">全部</a>

                            </div>

                        </div>

                    </div>

                    <div class="m sidebar-show-line ">

                        <a class="m-title clickstat" href="http://www.huya.com/g/100002" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2">

                            <i class="m-title-type" style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>

                            <span class="m-title-span">单机热游</span>

                        </a>

                        <div class="m-bd">

                            <div class="recomend-list clearfix">



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/1964" title="主机游戏">主机游戏</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/1732" title="我的世界">我的世界</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/1902" title="跳伞之王">跳伞之王</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/1997" title="方舟">方舟</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/1060" title="七日杀">七日杀</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/2793" title="绝地求生">绝地求生</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/74" title="饥荒">饥荒</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/411" title="经典怀旧">经典怀旧</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g_pc" title="全部">全部</a>

                            </div>

                        </div>

                    </div>

                    <div class="m sidebar-show-line ">

                        <a class="m-title clickstat" href="http://www.huya.com/g/100022" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3">

                            <i class="m-title-type" style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>

                            <span class="m-title-span">娱乐天地</span>

                        </a>

                        <div class="m-bd">

                            <div class="recomend-list clearfix">



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/1663" title="星秀">星秀</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2165" title="酷玩">酷玩</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2836" title="乡野">乡野</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2168" title="颜值">颜值</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2752" title="美食">美食</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2633" title="御宅">御宅</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/2876" title="奇谈">奇谈</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/100044" title="吃喝玩乐">吃喝玩乐</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g_yl" title="全部">全部</a>

                            </div>

                        </div>

                    </div>

                    <div class="m sidebar-show-line ">

                        <a class="m-title clickstat" href="http://www.huya.com/g/100004" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4">

                            <i class="m-title-type" style="background-image: url('http://huyaimg.dwstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>

                            <span class="m-title-span">手游休闲</span>

                        </a>

                        <div class="m-bd">

                            <div class="recomend-list clearfix">



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2336" title="王者荣耀">王者荣耀</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2411" title="球球大作战">球球大作战</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2413" title="CF枪战王者">CF枪战王者</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/100049" title="狼人杀专区">狼人杀专区</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/100036" title="棋牌休闲">棋牌休闲</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2852" title="天龙八部">天龙八部</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2824" title=" 魂斗罗"> 魂斗罗</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2751" title="欢乐球吃球">欢乐球吃球</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/100048" title="卡牌手游">卡牌手游</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2760" title="英魂之刃">英魂之刃</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/100029" title="热门手游">热门手游</a>



                                <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g_sy" title="全部">全部</a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="sidebar-banner" style="display:none">

                    <a target="_blank" class="sidebar-banner-link clickstat" id="sidebarBanner" eid="click/push/leftnaviad" eid_desc="点击/推荐/左侧导航推荐图">

                    </a>

                </div>

            </div>

            <div class="sidebar-tool">

                <a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>

                <a target="_blank" class="toAnchor clickstat" eid="click/navi/zuoce/zhubo" eid_desc="点击/导航/左侧导航/我要做主播" href="http://www.huya.com//e/zhubo" title="我要直播"></a>

            </div>

            <a target="_blank" class="gov-jb clickstat" eid="click/navi/zuoce/jubao" eid_desc="点击/导航/左侧导航/举报" href="http://jb.ccm.gov.cn/" style="position: absolute;left: 14px;bottom: 80px; left: 80px; bottom: 55px; color: #666;">12318举报</a>

            <span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>

        </div>





    </div>
        @show
</div>
<div>
    @yield('right')
</div>
</body>
</html>