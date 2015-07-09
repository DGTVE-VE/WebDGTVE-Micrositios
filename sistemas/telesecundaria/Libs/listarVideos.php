
<?php 
header('Content-Type: text/html; charset=utf-8');  
require("../connections/telesecundaria.php");
$cn= Conectarse();
$listado= mysql_query("select * from videoteca",$cn);
?>
<script type="text/javascript" language="javascript" src="js/jslistadovideos.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8">
	function muestra(ObjetoTR){  
	  id = (ObjetoTR.cells[1].childNodes[0].nodeValue);					  	
	  idvideo = (ObjetoTR.cells[21].childNodes[0].nodeValue);/*mp4*/
	  fo = (ObjetoTR.cells[31].childNodes[0].nodeValue);/*carpeta*/					    
	}
	function enviar(){
		window.open("./includes/videoconsulta.php?videos="+videos+"&formato="+formato+"&id="+idrvideo,'Video','toolbar=no,Location=no, directories=no, status=no, menubar=no, width=1200px, height=480px, resizable=no');				
/*	   document.getElementById('formulario').action="./includes/videoconsulta.php?videos="+videos+"&formato="+formato+"&id="+idrvideo+"";*/
		document.getElementById('formulario').submit();
	}
	function onEnviar(){
        idrvideo= document.getElementById("variable2").value=id;		
        videos= document.getElementById("variable").value=idvideo;		
        formato= document.getElementById("variable1").value=fo;				
    }
</script>
<form action="#" method="post" id="formulario" name="formulario">
<input id="variable" name="variable" type="hidden" />
<input id="variable2" name="variable2" type="hidden" />
<input id="variable1" name="variable1" type="hidden"/>
</form>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_videos">
    <thead>
    <tr>
    <th style="display:none">Material</th>
    <th style="display:none">ID</th>    
    <th style="display:none">Código Barras</th>                
    <th style="display:none">Tipo</th>
    <th>Grado</th>  
	<th>Serie</th>     
    <th>Duracion</th>            
    <th>Bloque</th>       
    <th>Secuencia</th>    
    <th>Título</th>
    <th style="display:none">Editor</th>    
    <th style="display:none">País Origen</th> 
    <th style="display:none">Autor</th>            
    <th style="display:none">Año</th>            
    <th style="display:none">Idioma</th>            
    <th style="display:none">Tema</th>            
    <th style="display:none">Nivel Educa</th>    
    <th style="display:none">Area Cono</th>            
    <th style="display:none">Derechos</th>  
    <th style="display:none">ZIP</th>            
    <th style="display:none">WMV</th>            
    <th style="display:none">FLV</th>            
    <th style="display:none">MP4</th>                                      
    <th style="display:none">PNG</th>            
    <th style="display:none">Formato</th>            
    <th style="display:none">Orientación</th>                     
    <th style="display:none">Colaboración</th>
    <th style="display:none">Claves</th>            
    <th style="display:none">Identificador</th>            
    <th style="display:none">Público</th>
    <th style="display:none">Fecha Reg</th>    
    <th style="display:none">Visitas</th>    
    <th style="display:none">Directorio</th>       
    <th>Sinopsis</th>    
    </tr>
    </thead>
    <tbody>
    <?php
    while($reg= mysql_fetch_array($listado))
    {
  echo '<tr style="cursor: pointer" onclick="muestra(this);onEnviar();enviar();">';
    echo '<td style="display:none">'.mb_convert_encoding($reg['id_material'], "").'</td>';//0
    echo '<td style="display:none">'.mb_convert_encoding($reg['vp_id'], "").'</td>';//1
    echo '<td style="display:none">'.mb_convert_encoding($reg['video_cbarras'], "").'</td>';//2
    echo '<td style="display:none">'.mb_convert_encoding($reg['id_tipo'], "").'</td>';//3
	echo '<td>'.mb_convert_encoding($reg['grado'], "").'</td>';//4
    echo '<td>'.mb_convert_encoding($reg['serie'], "").'</td>';//5
    echo '<td>'.mb_convert_encoding($reg['duracion'], "").'</td>';//6				
    echo '<td>'.mb_convert_encoding($reg['bloque'], "").'</td>';//7																					
    echo '<td>'.mb_convert_encoding($reg['secuencia'], "").'</td>';//8																								
	echo '<td>'.mb_convert_encoding($reg['titulo'], "").'</td>';//9
    echo '<td style="display:none">'.mb_convert_encoding($reg['editor'], "").'</td>';//10
    echo '<td style="display:none">'.mb_convert_encoding($reg['pais_origen'], "").'</td>';//11
    echo '<td style="display:none">'.mb_convert_encoding($reg['autor'], "").'</td>';//12
    echo '<td style="display:none">'.mb_convert_encoding($reg['anoproduccion'], "").'</td>';//13
    echo '<td style="display:none">'.mb_convert_encoding($reg['idioma'], "").'</td>';//14	
    echo '<td style="display:none">'.mb_convert_encoding($reg['tema'], "").'</td>';//15
    echo '<td style="display:none">'.mb_convert_encoding($reg['niveleducativo'], "").'</td>';//16
    echo '<td style="display:none">'.mb_convert_encoding($reg['areaconocimiento'], "").'</td>';//17
    echo '<td style="display:none">'.mb_convert_encoding($reg['derechos'], "").'</td>';//18
    echo '<td style="display:none">'.mb_convert_encoding($reg['a_arch'], "").'</td>';//19	
    echo '<td style="display:none">'.mb_convert_encoding($reg['b_arch'], "").'</td>';//20		
    echo '<td style="display:none">'.mb_convert_encoding($reg['f_arch'], "").'</td>';//21		
    echo '<td style="display:none">'.mb_convert_encoding($reg['mp4_arch'], "").'</td>';//22		
    echo '<td style="display:none">'.mb_convert_encoding($reg['i_thumb'], "").'</td>';//23	
    echo '<td style="display:none">'.mb_convert_encoding($reg['formato'], "").'</td>';//24	
    echo '<td style="display:none">'.mb_convert_encoding($reg['orientacion'], "").'</td>';//25			
    echo '<td style="display:none">'.mb_convert_encoding($reg['colaboracion'], "").'</td>';//26	
    echo '<td style="display:none">'.mb_convert_encoding($reg['claves'], "").'</td>';//27
    echo '<td style="display:none">'.mb_convert_encoding($reg['identificador'], "").'</td>';//28
    echo '<td style="display:none">'.mb_convert_encoding($reg['publico'], "").'</td>';//29				
    echo '<td style="display:none">'.mb_convert_encoding($reg['fechareg'], "").'</td>';//30								
    echo '<td style="display:none">'.mb_convert_encoding($reg['visitas'], "").'</td>';//31	
    echo '<td style="display:none">'.mb_convert_encoding($reg['directorio'], "").'</td>';//32
    echo '<td>'.mb_convert_encoding($reg['sinopsis'], "").'</td>';																						
    echo '</tr>';
	//run-in; border: 2px dashed #C00;
}

?>
<tbody>
</table>
