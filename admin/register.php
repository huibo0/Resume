<?php
header('content-type:text/html;charset=utf-8');
//define('IN_QY',true);
require ("common.inc.php");
if ($_GET['act']=='add'){
    if ($_POST["pwd"] == $_POST["repwd"]){
        $pwd = $_POST['pwd'];
    }else{
        echo "两次密码不一致";
    }
    $qq = $_POST['qq'];
    $anums = $_POST['anums'];
    $username = $_POST['username'];
    $time = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tbluser(username,userpwd,qq,anums,ctime)
    VALUES ('$username','$pwd','$qq','$anums','$time')";
    $q = mysql_query($sql);
    qy_close();
    echo "<script type='text/javascript'>alert('注册成功');location.href='login.php';</script>";

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册后台登录</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>
<body>
<!--
<script type="text/javascript">
    function beforesubmit(form) {
        if(form.userid.value==''){
            alert('用户名不能为空');
            return false;
        }

    }
</script>-->
    <form action="?act=add" method="post" name="newsform" ">
        <input name="id" value="" type="hidden">
        <dl class="clerafix">
            <dd>账号：</dd>
            <dd><input type="text" id="username" value="" name="username" placeholder="建议输入姓名" datatype="m" errormsg="请输入信息"></dd>
        </dl>
        <dl class="clerafix">
            <dd>密码：</dd>
            <dd><input type="password" id="pwd" value="" name="pwd" placeholder="输入密码" datatype="*6-16" errormsg="请设置密码"></dd>
        </dl>
        <dl class="clerafix">
            <dd>重复密码：</dd>
            <dd><input type="password" id="repwd" value="" name="repwd" placeholder="请再次输入密码" datatype="*6-16" errormsg="请设置密码"></dd>
        </dl>
        <dl class="clerafix">
            <dd>QQ：</dd>
            <dd><input type="text" id="userid" value="" name="qq" placeholder="方便联系" datatype="*6-12" errormsg="请输入信息"></dd>
        </dl>

        <div class="btn_boxx">
            <input type="submit" name="signup" class="button" value="注册">
        </div>
        <input type="hidden" name="anums" value="10" class="dfinput">
    </form>



</body>

</html>