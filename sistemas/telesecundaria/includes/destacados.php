<?php 
header('Content-Type: text/html; charset=utf-8');  
$cn= Conectarse();
$listado= mysql_query("
SELECT VISITAS, TITULO, SINOPSIS, DURACION, SERIE, GRADO, MP4_ARCH, I_THUMB, DIRECTORIO
FROM videoteca
ORDER BY VISITAS DESC 
LIMIT 5
",$cn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Videos Telesecundaria</title>
<link href="Spry-UI-1.7/css/ContentSlideShow/wanderlust/wanderlust-brown.css" rel="stylesheet" type="text/css" />
<script src="Spry-UI-1.7/includes/SpryDOMUtils.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryDOMEffects.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryWidget.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryPanelSelector.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryPanelSet.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryFadingPanels.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryContentSlideShow.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2141541" binding="#ImageSlideShow" />
</oa:widgets>
-->
</script>
</head>

<body>
<div align="center">
<h3>Videos Destacados</h3>
</div>
<div id="ImageSlideShow" align="center">
  <?php
  
  while ($row=mysql_fetch_array($listado)) {
    echo"<div class='article'>"; 
    echo " <div class='photo'> <img src='./videos/".$row['DIRECTORIO']."/thumb/".$row['I_THUMB']."' alt='Videos Telesecundaria' />";
    echo "<div class='caption'>".$row['SERIE']."</div>";
	echo "</div>";
    echo "<div class='story'>";
    echo "<div class='banner'>";
    echo "<div class='title'>".$row['TITULO']."</div>";
    echo "<div class='subTitle'>"."Grado:".$row['GRADO']."</div>";
	echo "</div>";
    echo "<div class='content'>";
    echo "<p>".$row['SINOPSIS']."</p>";
	echo "<a href='./videos/".$row['DIRECTORIO']."/vid/".$row['MP4_ARCH']."'>Ver video";
	echo "</div>";
    echo "</div>";
	echo "</div>";
 }
?>
</div>
<script type="text/javascript">
// BeginOAWidget_Instance_2141541: #ImageSlideShow

var ImageSlideShow = new Spry.Widget.ContentSlideShow("#ImageSlideShow", {
	widgetClass: "WLBSlideShow",
	displayInterval: 4000,
	transitionDuration: 2000
});

// EndOAWidget_Instance_2141541
</script>
</body>
</html>