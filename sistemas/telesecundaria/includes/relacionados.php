<script type="text/javascript" language="javascript" charset="utf-8">
	function muestra(ObjetoTR){  
	  id = (ObjetoTR.cells[0].childNodes[0].nodeValue);					  	
	  idvideo = (ObjetoTR.cells[1].childNodes[0].nodeValue);/*mp4*/
	  fo = (ObjetoTR.cells[2].childNodes[0].nodeValue);/*carpeta*/					    
	}
	function enviar(){
		document.getElementById('formulario').submit();
		window.open("video1.php?videos="+videos+"&formato="+formato+"&id="+idrvideo,'Video','toolbar=no,Location=no, directories=no, status=no, menubar=no, width=1200px, height=480px, resizable=no');				

	}
	function onEnviar(){
        idrvideo= document.getElementById("variable2").value=id;		
        videos= document.getElementById("variable").value=idvideo;		
        formato= document.getElementById("variable1").value=fo;				
    }
</script>
<?php
header('Content-Type: text/html; charset=utf-8');  
-extract ($_REQUEST);
if(isset($_GET["videos"]) or isset($_GET["formato"])){
$codigo1=$_GET['videos'];
$directorio=$_GET['formato'];
$id=$_GET['id'];
$cn= Conectarse();
$resultado1= mysql_query("SELECT *
FROM  `videoteca` 
WHERE 
grado = '".$grado."'
AND vp_id <>  '".$id."'
AND areaconocimiento = '".$areaconocimiento."'
AND serie = '".$serie."'",$cn);
?>
<form action="#" method="post" id="formulario" name="formulario">
<input id="variable" name="variable" type="hidden" />
<input id="variable2" name="variable2" type="hidden" />
<input id="variable1" name="variable1" type="hidden"/>
<table style=" font-size:11px; width:100%;" border="0px">
  <tr>
    <td colspan="3" align="center" bgcolor="#F78181" style="text-align:center;color: #FFF;font-weight:bold;"><label>VIDEOS RELACIONADOS</label></td>
  </tr>
 <?php
    while($reg1= mysql_fetch_array($resultado1))
    {
	echo '<tr style="cursor: pointer" onclick="muestra(this);onEnviar();enviar();">';
	echo '<td style="display:none">'.mb_convert_encoding($reg1['vp_id'], "").'</td>';		
	echo '<td style="display:none">'.mb_convert_encoding($reg1['mp4_arch'], "").'</td>';			
	echo '<td style="display:none">'.mb_convert_encoding($reg1['directorio'], "").'</td>';				
	echo "<td bgcolor='#F5BCA9'><img src='../videos/".$reg1['directorio']."/thumb/".$reg1['i_thumb']."' width='95' height='70'></td>";			
	echo '<td bgcolor="#F5BCA9" style="color: bgcolor="#000";"><H5>'.mb_convert_encoding($reg1['titulo'], "").'</H5><h5>Grado: '.mb_convert_encoding($reg1['grado'], "").'</H5></td>';								
 	echo'<tr>';	
	}
	

  ?>
  
</table>
</form>
<?php
}
?>