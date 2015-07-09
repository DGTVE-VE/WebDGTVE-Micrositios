<?php
require("connections/telesecundaria.php");
extract ($_REQUEST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<link type="text/css" href="css/demo_table.css" rel="stylesheet" />
</head>
<body>
<div style="width:95%;><!--Div Principal-->
<div style="width:95%; height:200px;overflow:auto;" class="content"> 
<article id="contenido"></article>
</div>
<div>
</div><!--div video-->
</div>

<div style="width:95%; height:400px;overflow:auto;"><!--Div destacados-->
<?php
require("includes/destacados.php");
extract ($_REQUEST);
?>
</div><!--Div destacados-->

</div><!--div principal-->
<!--<iframe width="70%" height="300px" src="includes/videoconsulta.php"></iframe>-->
</body>
</html>