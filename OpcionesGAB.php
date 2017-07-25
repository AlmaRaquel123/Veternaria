<?php
include "conexion.php";

$valEntrante="GuarTipoMascota";
//$valEntrante=$_POST["ValEntra"];

if (strcmp($valEntrante, 'ConMascota') !== 0) {
	echo 'Consultar BD mascotas '.$valEntrante." .";
		$sql="SELECT * FROM mascotas";
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
}elseif (strcmp($valEntrante, "ConTipMascota")) {
	echo 'Consultar BD Tipo Mascota';
}elseif (strcmp($valEntrante, "GuarMascota") !== 0) { //GuardarMascota
    echo 'Guardando por mascota';
   		$nom=$_POST["NombreMasc"];
   		$raza=$_POST["RazaMasc"];
   		$color=$_POST["ColorMasc"];
		$precio=$_POST["Precio"];
		$fnacimiento=$_POST["Edad"];
		$pedegre=$_POST["Pedegre"];
		$sexo=$_POST["Sexo"];
		$peso=$_POST["Peso"];
		$descripcion=$_POST["Descripcion"];
		$esanimal=$_POST["EsAnimal"];
		$foto=$_POST["foto"];
		$latitud=$_POST["Latitud"];
		$longitud=$_POST["Longitud"];

		$sql="INSERT INTO mascotas VALUES ('0','$nom','$raza','$color','$precio','$fnacimiento','$pedegre','$sexo','$peso','$descripcion','$esanimal','$foto','$latitud','$longitud')";
		$reg=mysqli_query($conn,$sql);
		if($reg){
		echo "NombreMasc:".$nom."Precio:".$precio."Longitud:".$longitud;
		}else{
		echo "Error al registrar los datos:".mysqli_error();	
		}
		mysqli_close($conn);
}elseif (strcmp($valEntrante, "GuarTipoMascota")!== 0 ) {
	echo 'Guardando Tipo Macota';
		$tipoMas=$_POST["TipoMasc"];
		$sql="INSERT INTO tipo VALUES ('0','$tipoMas')";
		$reg=mysqli_query($conn,$sql);
		if($reg){
		echo "NombreMasc:".$tipoMas;
		}else{
		echo "Error al registrar los datos:".mysqli_error();	
		}
		mysqli_close($conn);
}else{
	echo 'No se puede realizar la peticion';
}

?>
