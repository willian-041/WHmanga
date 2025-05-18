<?php
include '../includes/functions.php';
include '../data/mangas.php';

// Configuração da paginação
$itensPorPagina = 5;
$totalMangas = count($mangas);
$totalPaginas = ceil($totalMangas / $itensPorPagina);
// Página atual (via GET), valor mínimo = 1
$paginaAtual = isset($_GET['pagina']) ? max(1, intval($_GET["pagina"])) :1;
$offset = ($paginaAtual - 1) * $itensPorPagina;
// Slice do array
$mangasPagina = array_slice($manga,$offset,$itensPorPagina);
?>

<?php include '../includes/header.php'; ?>

<?php include '../includes/footer.php'; ?>