<?php
error_reporting();
//Avoiding Notice error from echoing
error_reporting( error_reporting() & ~E_NOTICE );

if (empty($_SESSION['is']['id'])) {
require('login.php');
exit;
}
$username =  $_SESSION['is']['pass'];
if (!$username) { 
require('login.php');
exit;
}
?>