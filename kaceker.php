<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KCFinder Checker!</title>

<meta name="viewport" content="width=device-width, initial-scale=0.6">
<meta name="Description" content="Priv8 KCFinder Checker Tools By Raiz3N">
<meta property="og:image" content="https://images.wallpaperscraft.com/image/anime_girl_gothic_eyes_red_15108_1024x768.jpg">
</head>
<body>
<style>
@import 'https://fonts.googleapis.com/css?family=Montserrat';

body {
background: #000000;
font-family: Montserrat;
size: 15px;
color: #FFFFFF;
}

h1 {
color: #FFFFFF;
size: 10px;
position: center;
}

</style>
<center>
<h1>Priv8 KCFinder Checker!</h1>
<form action='' method='post'>
<input type='text' name='url' style="color: white;background:transparent;border:1px solid white;width:500px;height:30px;border-radius:3px;" placeholder="admin/kcfinder/upload.php">
<p>
<textarea name='path' placeholder="https://site.com atau site.com , tergantung site nya ya mek" style="width: 500px; color: white; height: 200px; border:1px solid white; background: transparent; border-radius:3px;"></textarea>
<p>
<input type='submit' name='cih' value=">>" style="color:white;border: 1px solid white;background:transparent;width:450px;height:19px;border-radius:3px;">
<p>
</form>
</div>
</center>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if($_POST['cih']){
$url  = htmlspecialchars($_POST['url']);
$path = htmlspecialchars($_POST['path']);
$udud  = explode("\r\n", $path);

foreach($udud as $_path){
$full = "$_path$url";	
$ch = curl_init($full);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);  
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_setopt($ch, CURLOPT_TIMEOUT,10);
	curl_setopt($ch, option, value);
	$exec = curl_exec($ch);
	$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	
echo "

<style type='text/css'>

body {
background: black;
}
a{
color:white;
pading-top:50px;
text-decoration:none;
text-align:center;
}
table{
background:transparent;
border: 1px solid white;
border-radius: 3px;
color:white;
width:500px;
height:33px;	
}
td{
border:1px solid white;
border-radius: 3px;
color:white;
background:transparent;
}

.status{
text-align:center;
width:33px;
background:lime;
color:black;
}
</style>
<br>
<table width='450px' >
<tr>
<td style='width:415px;'>$full</td></tr>
<div class='status'>$info</div>
<a href='//$full'></a><a href='$full'></a>
</tr>
</table>";
}
}
?>
</center>
<p><br><br><br>
<b>Note:</b><p>
<font color="black" style="background:lime;width:35px;">200</font> = <font color="lime">LIVE</font>&emsp;<font color="black" style="background:lime;width:35px;">404</font> = <font color=red>DIE</font>&emsp;
<font color="black" style="background:lime;width:35px;">403</font> = <font color=white>MAYBE</font>
<iframe src="https://1.top4top.net/m_1458ddydf0.mp3" frameborder="0" allow="autoplay; encrypted-media" width='0' height='0'></iframe>
</body>
</html>