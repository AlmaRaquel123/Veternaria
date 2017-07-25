<?php
include "conexion.php";
$id=$_POST["IDMasc"];
$Nom=$_POST["NomMasc"];
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
	$sql="UPDATE `mascotas` SET Nombre='$Nom',Vive='$vive',Raza='$raza',Color='$color',Precio='$precio',FNacimineto='$fecha',Pedegre='$pedegre',Sexo='$sexo',Peso='$peso',Descripccion='$Descrip',EsAnimal='$Estado',Foto='$foto',Latitud='$latitud',Longitud='$longitud',IDTipo='$tipmasc' WHERE ID='$id'";
	$reg=mysqli_query($conn,$sql);
	if($reg){
	echo "NombreMasc: ".$Nom." Precio".$precio;
	}else{
	echo "Error al registrar los datos:".mysqli_error();	
	}
	mysqli_close($conn);

?>