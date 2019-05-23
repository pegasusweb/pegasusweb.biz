<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.pegasusweb.biz</title>
<link rel="stylesheet" type="text/css" href="css/stil.css"/>
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

<div id="video"><img src="resimler/icfoto.png" name="z1" width="100%" height="100%" id="z1" onclick="MM_DW_effectShake($('#video'),'effect','shake','left',20,3,1000)" onload="MM_effectAppearFade('z1', 4000, 5, 100, false)"/></div>


<div id="icerik">
<div align="center" id="ic1"><marquee behavior=alternate>Oyundan Fazlası...</marquee></div>
<div id="ic2">
<div id="ice1"><a href="info.php"><img src="resimler/ice1.png" name="r1" width="100%" height="100%" id="r1" onmouseover="MM_effectShake('r1')" /></a></div>
<div id="ice2"><a href="esports.php"><img src="resimler/ice2.png" name="r2" width="100%" height="100%" id="r2" onmouseover="MM_effectShake('r2')" /></a></div>
<div id="ice3"><a href="contact.php"><img src="resimler/ice3.png" name="r3" width="100%" height="100%" id="r3" onmouseover="MM_effectShake('r3')" /></a></div>
</div>
<div id="ic3"><img src="resimler/icerik3.png" width="90%" height="90%"/>	
</div>
</div>

<div id="rz2"><video width="100%" height="100%" id="videox" src="resimler/cs-go tanıtım videosu..mp4" controls="controls" autoplay="autoplay" >Tarayıcınız video etiketini desteklemiyor!</video></div>

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