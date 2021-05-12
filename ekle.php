<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="sitilim.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#000000">
<div class="endis">

<div class="ustbar"></div>
<div class="menu">
<table id="Table_01" width="800" height="40" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="13">
			<img src="images/menu_01.jpg" width="800" height="14" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/menu_02.jpg" width="25" height="26" alt=""></td>
		<td rowspan="2">
			<a href="index.php">
				<img src="images/menu_03.jpg" width="104" height="26" border="0" alt=""></a></td>
		<td rowspan="2">
			<img src="images/menu_04.jpg" width="42" height="26" alt=""></td>
		<td rowspan="2">
			<a href="ekle.php">
				<img src="images/menu_05.jpg" width="73" height="26" border="0" alt=""></a></td>
		<td rowspan="2">
			<img src="images/menu_06.jpg" width="51" height="26" alt=""></td>
		<td rowspan="2">
			<a href="iletisim.php">
				<img src="images/menu_07.jpg" width="73" height="26" border="0" alt=""></a></td>
		<td rowspan="2">
			<img src="images/menu_08.jpg" width="229" height="26" alt=""></td>
		<td rowspan="2">
			<a href="uyeol.php">
				<img src="images/menu_09.jpg" width="56" height="26" border="0" alt=""></a></td>
		<td colspan="5">
			<img src="images/menu_10.jpg" width="147" height="1" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/menu_11.jpg" width="19" height="25" alt=""></td>
		<td>
			<a href="giris.html">
				<img src="images/menu_12.jpg" width="50" height="25" border="0" alt=""></a></td>
		<td>
			<img src="images/menu_13.jpg" width="27" height="25" alt=""></td>
		<td>
			<a href="cikis.php">
				<img src="images/menu_14.jpg" width="29" height="25" border="0" alt=""></a></td>
		<td>
			<img src="images/menu_15.jpg" width="22" height="25" alt=""></td>
	</tr>
</table>

</div>
<div class="orta">
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["giris"]))
{
echo '<center><font color="red">Bu sayfayı görüntülemek için giriş yapmalısınız.</font></center>';
return;
}//oturum açip açmadigini kontrol ediyor.
?>
<center>
<form action="ekle.php" method="POST">
    <label for="isim">isim</label>
    <input type="text" name="isim" id="isim" />
  <p>
    <label for="metin">itiraf</label>
    <textarea name="metin" id="metin" cols="45" rows="5"></textarea>
    <input type="submit" value="EKLE">
  </p>
</form>
</center>



<?php
include 'ayar.php';

//Yukarıda veri tabanına bağlantıyı gercekleştirdik.

$risim=trim($_POST["isim"]);
$rmetin=trim($_POST["metin"]);
//Bu kısımda formdan gelen bilgileri aldık.

if (strlen($risim)==0 && strlen($rmetin)==0) {
	echo "<center>boş değer giremezsin</center>";
}
else{
$sorgu=mysql_query('insert into itiraflar(isim,itiraflar)values("'.$risim.'","'.$rmetin.'")');
if($sorgu){
	echo "Ekleme Başarılı";
	header("Refresh: 2; url=index.php");
}else{
	echo "Ekleme Başarısız".mysql_error();
}
}
?>




</div>
<div class="altbar"></div>

</div>
</body>
</html>
