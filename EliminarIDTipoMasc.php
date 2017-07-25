<?php
include "conexion.php";
$Id=$_POST["IDTipM"];
$sql="DELETE FROM tipo WHERE IDTipo=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
echo "Datos eliminados";

}else{
	echo "Error al ejecutar la consulta:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);

?>