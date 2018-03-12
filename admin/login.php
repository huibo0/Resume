<?php

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>后台登录</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
    <form action="?act=login" method="post" name="login" onsubmit="return checkform();">
        <ul>
            <li><input type="text" name="username" value="" class="loginuser" onclick="javasrcipt:this.value=''"></li>
            <li><input type="password" name="password" value="" class="loginpwd" onclick="javasrcipt:this.value=''"></li>
            <li><input type="submit" name="submit" value="登录" class="loginbtn"></li>
        </ul>

    </form>


</body>
</html>
