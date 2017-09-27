<html>
<head>
<title>
Listado de productos
</title>
</head>
<body bgcolor="lightblue">
<center>
<table border="1">
<tr>
<td>CODIGO</td>
<td>PRODUCTO</td>
<td>DESCRIPCION</td>
<td>PRECIO</td>
<td>STOCK</td>

</tr>
<?php
$dp=mysql_connect("localhost","root","");
mysql_select_db("registro",$dp);
$sql="SELECT *FROM producto";

$resultado=mysql_query($sql,$dp);
$n=mysql_num_rows($resultado);

for($i=0;$i<$n;$i++)
{
	echo "<tr>";
	echo "<td>" .mysql_result($resultado,$i,'CODIGO')."</td>";
	echo "<td>" .mysql_result($resultado,$i,'PRODUCTO')."</td>";
	echo "<td>" .mysql_result($resultado,$i,'DESCRIPCION')."</td>";
	echo "<td>" .mysql_result($resultado,$i,'PRECIO')."</td>";
	echo "<td>" .mysql_result($resultado,$i,'STOCK')."</td>";
	
	echo "</tr>";
}
mysql_close($dp);
?>


</table>
</center>
</body>
</html>