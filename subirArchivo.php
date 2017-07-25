<?php
$file = $_FILES['imagen']['name'];
move_uploaded_file($_FILES["imagen"]["tmp_name"], "images/".$file.".jpg");
echo "Archivo guardado con exito: ".$file;
/*$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
move_uploaded_file($_FILES["imagen"]["tmp_name"], "./" . $_FILES["imagen"]["name"]);
echo "http://" . $_SERVER['SERVER_NAME'] . "/" . $target_file;*/
?>
