<html>
<head>
</head>
<body bgcolor="pink">
<center>
<h1>Producto</h1>
<table border="1">
<tr>
<td>CODIGO</td>
<td>PRODUCTO</td>
<td>DESCRIPCION</td>
<td>PRECIO</td>
<td>STOCK</td>
</tr>
<form  method="POST" action="compra.php">
<br>
Indique  el codigo del producto:
<br>
<input type="text" name="codigo" size =20>
<br> 

Indique la cantidad que desea comprar:
<br>
<input type="text" name="nuevo" size="10" col="10">
<br>
<input type="submit" name="enviar">
<br>

<?php
$codigo=$_POST["codigo"];
$dp=mysql_connect("localhost","root","");
mysql_select_db("registro",$dp);
$sql="select *from producto where codigo='$codigo'";
$resultado=mysql_query($sql,$dp);
$n=mysql_num_rows($resultado);

for($i=0;$i<$n;$i++)
{
	echo "<tr>";
	echo "<td>".mysql_result($resultado,$i,'codigo')."</td>";
	echo "<td>".mysql_result($resultado,$i,'producto')."</td>";
	echo "<td>".mysql_result($resultado,$i,'descripcion')."</td>";
	echo "<td>".mysql_result($resultado,$i,'precio')."</td>";
	echo "<td>".mysql_result($resultado,$i,'stock')."</td>";
	
	echo "</tr>";
}
mysql_close($dp);
?>
echo "El precio a gastar es '$precio'*$nuevo";
</form>
</table>

</center>
</body>
</html>
