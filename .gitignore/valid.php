<html>
<head>
<title>registro</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","autolavado") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into cliente(nombre,apellido,turno,auto,telefono,direccion) values 
                       ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[turno]','$_REQUEST[auto]','$_REQUEST[telefono]','$_REQUEST[direccion]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "REGISTRO EXITOSO";
?>
</body>
</html>