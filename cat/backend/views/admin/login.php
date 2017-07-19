<?php

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>管理员登录</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="/login/css/style-f2a375a087.css"/>
<link rel="stylesheet" href="/login/css/reg-d42d6f6aa9.css"/>
</head>
<body>
<div class="reg-wrapper" >
<h2 >
<a href="/">
后台管理员登录
</a>
</h2>
<h3><a href="?r=admin/reg">注册</a></h3>
<div class="fields">
<form id="main-form">
<div class="row">
<input type="text" class="text large" name="admin_name" placeholder="手机号"/>
<div class="error"></div>
</div>
<div class="row">
<input type="password" class="text large" name="admin_pwd" placeholder="密码"/>
<div class="error"></div>
</div>
<div class="row">
<label>
<input type="checkbox" name="remember" value="true" checked/>
记住我
</label>
<a href="/login/forget" class="forget text dark" >忘记密码</a>
</div>
<div class="row">
<div class="button large dark submit" id="submit">登录</div>
</div>
<div class="row right">
<span class="text light">还没有帐号，</span>
<a href="/reg" class="text dark" >立即注册</a>
</div>
</form>
<div class="platform">
<div class="desc">
使用社交平台帐号快速登录
</div>
<div id="login-qq" class="platform-item" title="使用QQ登录">
<i class="icon icon-qq"></i>
</div>
<div id="login-wechat" class="platform-item" title="使用微信登录">
<i class="icon icon-wechat"></i>
</div>
</div>
</div>
</div>
<script>var asset_origin = '/asset'; var cdn_origin = 'https://img.mubu.com/';</script>
<script src="/login/js/base-252700944a.js"></script>
<script src="/login/js/ui-3f96ad3cb5.js"></script>
<script src="/login/js/login-3285f456ce.js"></script>
<script>
if (location.host.indexOf('mubu.io') >= 0 || location.host.indexOf('mubu.com') >= 0) {
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-77727571-1', 'auto');
ga('send', 'pageview');
}
</script>
</body>
</html>