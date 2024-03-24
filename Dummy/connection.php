<?php
$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$pgg = (explode("/",$pageURL));
$pg = $pgg[2];
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
?>