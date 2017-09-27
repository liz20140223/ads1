<?php
$codigo=$_POST["codigo"];
$producto=$_POST["producto"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];


$dp=mysql_connect("localhost","root","");
mysql_select_db("registro",$dp);
$sql="insert into producto values('$codigo','$producto','$descripcion','$precio','$stock')";
$resultado=mysql_query($sql,$dp);

if($resultado)
{
	echo "la conexion es exitosa";
}
else
{
	echo "La conexion no se realizo con exito";
}
mysql_close($dp);
?>