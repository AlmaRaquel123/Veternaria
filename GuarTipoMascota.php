<?php
include "conexion.php";

//echo 'Guardando Tipo Macota';

		$tipoMas=$_POST["TipoMasc"];
		$sql="INSERT INTO tipo VALUES ('0','$tipoMas')";
		$reg=mysqli_query($conn,$sql);
		if($reg){
		echo $tipoMas;
		}else{
		echo "Error al registrar los datos:".mysqli_error();	
		}
		mysqli_close($conn);

?>