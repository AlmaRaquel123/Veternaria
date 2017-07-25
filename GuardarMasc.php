<?php
include "conexion.php";

echo 'Guardando Tipo Macota ';

$nom=$_POST["NomMasc"];
$vive=$_POST["viveM"];
$raza=$_POST["RazM"];
$color=$_POST["ColorM"];
$precio=$_POST["PrecM"];
$fecha=$_POST["FechaM"];
$pedegre=$_POST["PedM"];
$sexo=$_POST["SexoM"];
$peso=$_POST["PesM"];
$Descrip=$_POST["DesM"];
$Estado=$_POST["EstM"];
$foto=$_POST["Foto"];
$latitud=$_POST["Latitud"];
$longitud=$_POST["Longitud"];
$tipmasc=$_POST["IDTipo"];
$sql="INSERT INTO mascotas VALUES ('0', '$nom', '$vive', '$raza', '$color', '$precio', '$fecha', '$pedegre','$sexo', '$peso', '$Descrip', '$Estado', '$foto', '$latitud', '$longitud','$tipmasc') ";
	$reg=mysqli_query($conn,$sql);
	if($reg){
	echo "La mascota: ".$nom." se guardo correctamente";
	}else{
	echo "Error al registrar los datos:".mysqli_error();	
	}
	mysqli_close($conn);
?>