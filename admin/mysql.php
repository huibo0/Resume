<?php
error_reporting(0);
//if (!defined('IN_QY')){
  //  exit('access deniend');
//}

function qy_connect(){
    global $conn;
    if(!$conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)){
        exit('数据库连接失败'.mysql_error());
    }
}
function qy_select_db(){
    if(!mysql_select_db(DB_NAME)){
        exit('数据库不存在！');
    }

}
function qy_set_names(){
    if (!mysql_query('SET NAMES UTF8')){
        exit('字符集错误');
    }
}
function qy_close(){
    if (!mysql_close()){
        exit('数据库关闭异常');
    }
}