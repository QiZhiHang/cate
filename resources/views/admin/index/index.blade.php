<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>jQuery背景切换注册登录模板</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{asset('/resources/views/vendor/admin/css/style.css')}}" />

<body>

<div class="login-container">
    <h1>宠物后台网站</h1>

    <div class="connect">
        <p>www.lala.com</p>
    </div>

    <form action="" method="post" id="loginForm">
        {{csrf_field()}}
        <div>
            <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <button id="submit" type="submit">登 录</button>
    </form>

   {{-- <a href="register.html">
        <button type="button" class="register-tis">还有没有账号？</button>
    </a>--}}

</div>

<script src="{{asset('/resources/views/vendor/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('/resources/views/vendor/admin/js/common.js')}}"></script>
<!--背景图片自动更换-->
<script src="{{asset('/resources/views/vendor/admin/js/supersized.3.2.7.min.js')}}"></script>
<script src="{{asset('/resources/views/vendor/admin/js/supersized-init.js')}}"></script>
<!--表单验证-->
<script src="{{asset('/resources/views/vendor/admin/js/jquery.validate.min.js?var1.14.0')}}"></script>

</body>
</html>