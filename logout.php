<?php 
session_start();
$_SESSION['un'] = "";
$_SESSION['pw']   = "";
session_destroy();
if (($_SESSION['un'] == "") || ($_SESSION['pw'] ==""))
{
header( 'Location: http://localhost/cbs/' ) ;
}
?>