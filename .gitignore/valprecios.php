<html>
<head>
<title>precios</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","autolavado") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into precios(LAVADO DE MOTOR $100,LAVADO NORMAL $50,LAVADO DE VESTIDURA $120,ENCERADO $70,) values 
                       ('$_REQUEST[LAVADO DE MOTOR $100]','$_REQUEST[LAVADO NORMAL $50]','$_REQUEST[LAVADO DE VESTIDURA $120]','$_REQUEST[ENCERADO $70]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "REGISTRO EXITOSO";
?>
</body>
</html>