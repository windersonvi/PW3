<?php
$NalaSe = "nuevo.txt";
unlink($NalaSe);
$mensaje = 'Archivo Eliminado';
$cody = 'location:../index.php?msg='.$mensaje;
header($cody);
?>