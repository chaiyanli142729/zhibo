<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>用户登录</title>
    <link rel="stylesheet" href="/home/log/css/base.css" />
    <link rel="stylesheet" href="/home/log/css/global.css" />
    <link rel="stylesheet" href="/home/log/css/login-register.css" />

</head>
<body>

<!--顶部信息end-->

<div class="header wrap1000">
    <a href=""><img src="/home/log/images/logo.png" alt="" /></a>
</div>

<div class="main">
    <div class="login-form fr">
        <div class="form-hd">
            <h3>用户登录</h3>
        </div>
        <div class="form-bd">
            <form action="/wer_add" method="get">

                <dl>
                    <dt>用户名</dt>
                    <dd><input type="text" name="username" class="text" /></dd>
                </dl>
                <dl>
                    <dt>密&nbsp;&nbsp;&nbsp;&nbsp;码</dt>
                    <dd><input type="password" name="password" class="text"/></dd>
                </dl>
                <dl>
                    <dt>验证码</dt>
                    <dd><input type="text" name="captcha"  style="width: 100px; height:20px "></br>
                        <a onclick="javascript:re_captcha();" >
                            <img src="{{ URL('log/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
                        </a></dd>
                </dl>
                <dl>
                    <dt>&nbsp;</dt>
                    <dd><input type="submit" value="登  录" class="#"/> <a href="" class="forget">忘记密码?</a></dd>
                </dl>
            </form>
            <dl>
                <dt>&nbsp;</dt>
                <dd> 还不是本站会员？立即 <a href="/reg" class="#">注册</a></dd>
            </dl>
            <dl class="other">
                <dt>&nbsp;</dt>
                <dd>
                    <p>您可以用合作伙伴账号登录：</p>
                    <a href="" class="qq"></a>
                    <a href="" class="sina"></a>
                </dd>
            </dl>
        </div>
        <div class="form-ft">

        </div>
    </div>

    <div class="login-form-left fl">
        <img src="/home/log/images/left.jpg" alt="" />
    </div>
</div>

<div class="footer clear wrap1000">
    <p> <a href="">首页</a> | <a href="">招聘英才</a> | <a href="">广告合作</a> | <a href="">关于ShopCZ</a> | <a href="">联系我们</a></p>
    <p>Copyright 2004-2013 itcast Inc.,All rights reserved.</p>
</div>


</body>
<script>
    function re_captcha() {
        $url = "{{ URL('log/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>
</html>
