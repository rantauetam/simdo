<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo"$judul"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<style type="text/css">
body{
background-color : orange;
font-family : Calibri;
}
header{
margin : 0 auto 0 auto;
padding : 20px;
width : 700px;
height : 70px;
background-color : #555;
color : orange;
}
.konten{
margin : 0 auto 0 auto;
padding : 10px;
width : 720px;
min-height : 300px;
height : auto;
background-color : #FFF;
color : #555;
}
footer{
margin : 0 auto 0 auto;
padding : 20px;
width : 700px;
height : 30px;
background-color : #555;
text-align : right;
color : #EEE;
}
</style>
</head>
<body>
<header>
<h1><?php echo"$judul";?></h1>
</header>
<div>
<h3>Add New Movie</h3>
<?php echo form_open('movie/proses_tambah') ?>
<table>
<tr>
<td width="70px">Judul</td>
<td>:</td>
<td><input type="text" name="judul" value="" size="30" /></td>
</tr>
<tr>
<td>Tahun</td>
<td>:</td>
<td><input type="text" name="tahun" value="" size="10" /></td>
</tr>
<tr>
<td valign="top">Sinopsis</td>
<td valign="top">:</td>
<td><textarea name="sinopsis" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td>Director</td>
<td>:</td>
<td><input type="text" name="director" value="" size="30" /></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="simapn" value="Simpan" /></td>
</tr>
</table>
</form>
</div>
<footer>
<p>Demo - Codeigniter | 2013</p>
</footer>
</body>
</html>
