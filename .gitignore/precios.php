<html>
	<head>
		<title>PRECIOS</title>
		<meta charset="utf-8" />
		<script type="text/javascript" src="livevalidation_standalone.compressed.js"></script>
	</head>
	<body>
<table width="220" border="0" cellspaciong="0" cellpadigding="1">
<tr bgcolor="#990033" align="center">

    	<td><b><font color="blue"> <h1>PRECIOS</h1></font></b></td>
</tr>
		<form action="validar.php" method = "post">
     
<tr bgcolor="#990033">
<td>
<center>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
<tr bgcolor="#FFFFFF">
<td>
   	
LAVADO DE MOTOR  $100: <input id="f1" type="text" name="LAVADO DE MOTOR" /><br />
			<script type="text/javascript">
  				var f1 = new LiveValidation('f1');
  				f1.add(Validate.Presence, {failureMessage: "Escribir por favor tu Login!!!"});
			</script>             		
    		LAVADO NORMAL  $50: <input id="f2" type="LAVADO NORMAL" name="apellido" /><br />
			<script type="text/javascript">
  				var f2 = new LiveValidation('f2');
  				f2.add(Validate.Presence, {failureMessage: "Escribir por favor tu Password!!!"});
			</script>             		
    		LAVADO DE VESTIDURA  $120: <input id="f3" type="text" name="LAVADO DE VESTIDURA" /><br />
			<script type="text/javascript">
  				var f3 = new LiveValidation('f3');
  				f3.add(Validate.Presence, {failureMessage: "Escribir por favor tu Nombre!!!"});
			</script> 
    	    ENCERADO $70 <input id="f4" type="text" name="ENCERADO" />
			<script type="text/javascript">
				var f4 = new LiveValidation('f4');
				f4.add(Validate.Presence, {failureMessage: "Escribir por favor edad"});
				f4.add(Validate.Numericality, {minimum:1, maximum:100, onlyInteger: true});
			</script> 
			<br /><input type="submit" value="Enviar"/>
</td>
</tr>
</center>
</table>
</td>
</tr>
</table>
    	</form>
	</body>
</html>