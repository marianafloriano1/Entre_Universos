<?php
$codigo_livro = filter_input(INPUT_GET, 'codigo_livro');

include_once '../class/Livro.php';
$cat = new Livro();

$cat->codigo_livro = $codigo_livro;
$cat->delete();
?>

<meta http-equiv="refresh" content="0.1;URL=?p=livro/listar">