<?php
include "conexion.php";
$Id=$_POST["IDM"];
$sql="SELECT * FROM mascotas WHERE ID=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$datos[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "Error al ejecutar la consulta:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);

?>