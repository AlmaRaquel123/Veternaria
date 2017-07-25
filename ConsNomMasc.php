<?php
include "conexion.php";

$Nom=$_POST["NomMas"];

	$sql="SELECT * FROM mascotas WHERE Nombre='$Nom'";
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