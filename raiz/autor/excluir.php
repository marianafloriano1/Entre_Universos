<?php
$codigo_autor = filter_input(INPUT_GET, 'codigo_autor');

include_once '../class/Autor.php';
$cat = new Autor();

$cat->setCodigo_autor($codigo_autor);
$cat->crud(0);
?>

<meta http-equiv="refresh" content="0.1;URL=?p=autor/listar">



