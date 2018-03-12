<?php
//if (!defined('IN_QY')){
//   exit('access denied!');
//}


require ('mysql.php');

//数据库配置
define('DB_HOST','101.201.44.86');
define('DB_USER','bdm275979541');
define('DB_PWD','hui9426521');
define('DB_NAME','bdm275979541_db');

qy_connect();
qy_select_db();
qy_set_names();
?>