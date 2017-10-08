<html>
<head>
<title>tipo de lavado</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","autolavado") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into tipodelavado(lavadodemotor,lavadodevestidura,lavadonormal,encerado,tipodeauto) values 
                        ('$_REQUEST[lavadodemotor]','$_REQUEST[lavadodevestidura]','$_REQUEST[lavadonormal]','$_REQUEST[encerado]','$_REQUEST[tipodeauto]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "REGISTRO EXITOSO";
?>
</body>
</html>

