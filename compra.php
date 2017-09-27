<?php
$id=$_POST["codigo"];
$nuevo=$_POST["nuevo"];


$c= mysql_connect("localhost","root","");
mysql_select_db("registro",$c);
$sql="SELECT stock FROM producto WHERE codigo='$id'";
$resultado=mysql_query($sql,$c);
$res1=mysql_result($resultado,0,0);
$dif=$res1-$nuevo;
if($dif>0){
$sql="UPDATE producto SET stock=$dif WHERE codigo='$id'";
$result=mysql_query($sql);
echo "la base de datos fue modificada";
mysql_close($c);
}
else{
echo "El pedido supero el stock";
echo "<br>";
echo "Disponible:   ".$res1."      unidades";
mysql_close($c);
}

?>