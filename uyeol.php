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
<center>
<form name="form1" method="post" action="uyeol.php">
  
    <label for="isim">İsim</label>
    <input type="text" name="isim" id="isim">

  <p>
    <label for="soyisim">Soyisim</label>
    <input type="text" name="soyisim" id="soyisim">
  </p>
  <p>
    <label for="kad">Kullanıcı Adı</label>
    <input type="text" name="kad" id="kad">
  </p>
  <p>
    <label for="ksifre">Şifre</label>
    <input type="password" name="ksifre" id="ksifre">
  </p>
  <p>
    <label for="keposta">Eposta</label>
    <input type="text" name="keposta" id="keposta">
  </p>
  <p>
    <input type="submit" name="gonder" id="gonder" value="Gönder">
  </p>
</form>
</center>
<?php
include 'ayar.php';
error_reporting(0);


$r_isim=trim($_POST["isim"]);
$r_soyisim=trim($_POST["soyisim"]);
$r_kad=trim($_POST["kad"]);
$r_sifre=trim($_POST["ksifre"]);
$r_eposta=trim($_POST["keposta"]);

if (strlen($r_isim)==0 && strlen($r_soyisim)==0 && strlen($r_kad)==0 && strlen($r_sifre)==0 && strlen($r_eposta)==0) {
	echo "<center>boş değer giremezsin</center>";
}
else{
$sorgu=mysql_query('insert into uyeler(adi,soyadi,sifre,kullanici_adi,eposta)values("'.$r_isim.'","'.$r_soyisim.'","'.$r_sifre.'","'.$r_kad.'","'.$r_eposta.'")');
if($sorgu)
	echo "Ekleme Başarılı";
	else
	echo "Ekleme Başarısız".mysql_error();
}

?>

</div>
<div class="altbar"></div>

</div>
</body>
</html>
