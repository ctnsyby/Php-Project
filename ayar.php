<?php 
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="itiraf";
$baglan=mysql_connect($host,$user,$password) or die(mysql_error("Veritabanına bağlanılamadı !"));
mysql_select_db($db,$baglan) or die(mysql_error("Veritabanı seçilemedi !"));
mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET COLLATION_CONNECTION='utf8_unicode_ci'");
?>

