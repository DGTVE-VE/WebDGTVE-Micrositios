<div style="width:100%; height:98%; border-color:#03F; overflow: auto;">	
<?php 
extract ($_REQUEST);
header('Content-Type: text/html; charset=utf-8');  
require("../connections/telesecundaria.php");
	if(isset($_GET["videos"]) or isset($_GET["formato"])){
	    $codigo1=$_GET['videos'];
		$directorio=$_GET['formato'];	
		$id=$_GET['id'];
		$cn= Conectarse();
		$resultado= mysql_query("select * from videoteca WHERE vp_id=".$id,$cn);
		if (mysql_num_rows($resultado)>0)	{
			$fila = mysql_fetch_row($resultado);
			$titulo=$fila[4];	
			$sinopsis=$fila[11];
			$areaconocimiento=$fila[13];			
			$mp4_arch=$fila[18];			
			$serie=$fila[23];	
			$grado=$fila[29];	
			$directorio=$fila[31];				
			$bloque=$fila[32];				
			$secuencia=$fila[33];										
			mysql_free_result($resultado);		
		}	
	$video="../videos/".$directorio."/vid/".$mp4_arch;		
?>

<div style="width:44%; float:left; border-color:#03F; overflow:auto; height:98%;">
  <object data="<?php echo $video; ?>"  id="NSPlay" width="520" height="430" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
    codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
    standby="Cargando los componentes del Reproductor de Windows Media de Microsoft..."             
    type="application/x-oleobject">
    <param name="FileName" value="<?php echo $video; ?>" />
    <param name="ShowStatusBar" value="true" />
    <param name="ShowControls" value="true" />
    <param name="autohref" value="true" />
    <embed type="application/x-mplayer2"  width="520" height="430" onloadedmetadata=""pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/"
    filename="<?php echo $video; ?>" 
    src="dolarsi.asx"
    showcontrols=1
    showstatusbar=1
    autohref="true"> </embed>
  </object>
</div>
<div style="float:left;width:31%; height:98%; border-color:#03F; overflow:auto;">
<table  style="font-size:12px; width:100%;  height:100%;">
  <thead>
  <tr>
  <td colspan="2" align="center" bgcolor="#BF475B" style="text-align:center;color: #FFF;font-weight:bold;"><label>DATOS DEL VIDEO</label></td>
  </tr>
  </thead>
  <tr>
    <td bgcolor="#FAB8B5"><label>Título:</label></td>
    <td bgcolor="#FAB8B5"><label><?php echo $titulo;?></label></td>
  </tr>
  <tr>
    <td bgcolor="#FCE0DF"><label>Sinopsis:  </label></td>
    <td bgcolor="#FCE0DF" align="justify"><label><?php echo $sinopsis;?></label></td>
  </tr>
<tr>
    <td bgcolor="#FAB8B5"><label>Serie:  </label></td>
    <td bgcolor="#FAB8B5"><label><?php echo $serie;?></label></td>
  </tr>  
<tr>
    <td bgcolor="#FCE0DF"><label>Grado:  </label></td>
    <td bgcolor="#FCE0DF"><label><?php echo $grado;?></label></td>
  </tr>  
<tr>
    <td bgcolor="#FAB8B5"><label>Bloque:  </label></td>
    <td bgcolor="#FAB8B5"><label><?php echo $bloque;?></label></td>
  </tr>  
<tr>
    <td bgcolor="#FCE0DF"><label>Secuencia:  </label></td>
    <td bgcolor="#FCE0DF"><label><?php echo $secuencia;?></label></td>
  </tr>  
  
</table>		
</div><!--div tabla-->	
<?php		
		}
  
?>	
	
<div style="width:23%; float: right; overflow:auto; height:98%; border-color:#03F;">
<?php
	require("/relacionados.php");
?>	
</div>
</div>
