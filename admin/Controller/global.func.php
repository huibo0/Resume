<?php
error_reporting(0);


function qy_alert_back($_info){
    echo "<srcipt type='text/javascript'>alert('$_info');history.back();</srcipt>";
    exit();
}
