<form action="/wer_add" method="get">
    <table>
        用户名： <input type="text" name="username"><br>
        密码： <input type="text" name="password"><br>

        11: <input type="text" name="captcha"  style="width: 100px; height:20px "></br>
        <a onclick="javascript:re_captcha();" >
            <img src="{{ URL('log/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
        </a><br>
        <input type="submit" value="提交">

    </table>
</form>
<script>
    function re_captcha() {
        $url = "{{ URL('log/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>