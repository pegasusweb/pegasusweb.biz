<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.pegasusweb.biz</title>
<link rel="stylesheet" type="text/css" href="css/stil4.css"/>
	<script src="SpryAssets/renkli-linkler.js" type="text/javascript"></script>
<script src="SpryAssets/SpryEffects.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-effects.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">

function MM_effectShake(targetElement)
{
	Spry.Effect.DoShake(targetElement);
}
function MM_effectAppearFade(targetElement, duration, from, to, toggle)
{
	Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}
function MM_DW_effectShake(obj,method,effect,direction,distance,times,speed)
{
    obj[method](effect, {direction:direction,distance:distance,times:times}, speed);
}
</script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
$(window).scroll(function(){
if ($(this).scrollTop() > 100)
$(".yukaricik").fadeIn(500);
else
$(".yukaricik").fadeOut(500);
});
$(document).ready(function(){
$(".yukaricik").click(function(){
$("html, body").animate({ scrollTop: "0" }, 500);
return false;
});
});
</script>
	
</head>

<body>

<div id="baslik">
<div id="sol">
<div id="solust"></div>
<div align="right" id="solalt">
<a href="index.php"><img src="resimler/logo1.fw.png" width="304" height="84" margin-bottom:2px; /></a>
</div>
</div>
<div id="sag">
  <div align="center" id="sagust">
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
  	<td width="100px" height="40px"></td>
    <td width="10px" height="20px"></td>
    <td width="25px" height="25px"><a href="https://www.facebook.com/profile.php?id=100037059551817"><img src="resimler/facebook.png" width="100%" height="100%" /></a></td>
    <td width="10px" height="20px"></td>
    <td width="25px" height="25px"><a href="https://www.instagram.com/pegasusweb.biz/"><img src="resimler/instagram.png" width="100%" height="100%" /></a></td>
    <td width="10px" height="20px"></td>
    <td width="25px" height="25px"><a href="https://twitter.com/web_pegasus"><img src="resimler/twiter.png" width="100%" height="100%" /></a></td>
    <td width="10px" height="20px"></td>
    <td width="25px" height="20px"><a href="https://www.youtube.com/channel/UCPMrtXhC1kEZ1MiQni6ipEA?view_as=public"><img src="resimler/youtube.png" width="100%" height="100%" /></a></td>
    <td width="10px" height="20px"></td>
  </tr>
</table>

</div>
<div id="sagalt">
<ul> 
<li><a href="index.php">Anasayfa</a></li> 
<li><a href="info.php">Oyun Bilgisi</a></li> 
<li><a href="esports.php">Espor</a></li> 
<li><a href="contact.php">İletişim</a></li> 
</ul>
</div>
</div>
</div>

<div id="video"><img src="resimler/ice3.png" name="z1" width="100%" height="100%" id="z1" onclick="MM_DW_effectShake($('#video'),'effect','shake','left',20,3,1000)" onload="MM_effectAppearFade('z1', 4000, 5, 100, false)"/></div>


<div id="icerik"><form action="gonder.php" method="post"><div class="iletisim-form">
<form>
 
<label>İsim</label>
<input name="isim" placeholder="Adınız">
 
<label>E-Posta</label>
<input name="eposta" type="email" placeholder="Mail Adresiniz">
 
<label>İleti</label>
<textarea name="mesaj" placeholder="Mesajınız"></textarea>
 
<input id="kaydet" name="kaydet" type="submit" value="Kaydet">
 
</form>
</div>
	</div>
	<div id="rz2"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96442.90234980952!2d29.1217408!3d40.9411584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac4336e39827f%3A0x608e0ae971e8ddc2!2sMaltepe%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1558572280444!5m2!1str!2str" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<div align="center" id="alt">
	<div class="ortala">
            <p>Tüm Haklar Saklıdır &copy; Pegasusweb.biz</p>
  </div>
</div>
	
<div class="yukaricik">
<a href="javascript:;">
<img alt="Yukarı Çık" title="Yukarı Çık" class="yukaricik-buton" src="resimler/yukari-cik.png" />
</a>
</div>
</body>
</html>