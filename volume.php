<?php
include('includes/header.php');

// Pega os parâmetros da URL
$manga = $_GET['manga'] ?? null;
$volume = $_GET['vol'] ?? null;

// Caminho onde estão as imagens do volume
$path = "mangas/$manga/vol$volume/";

// Verifica se existe
if (!$manga || !$volume || !is_dir($path)) {
    echo "<div class='container text-white mt-5'><h3>Mangá ou volume não encontrado.</h3></div>";
    include('includes/footer.php');
    exit;
}

// Lê os arquivos de imagem
$pages = glob($path . '*.jpg');
sort($pages); // Ordena as páginas
?>

<div class="container mt-5">
    <h2 class="text-white mb-4 text-center"><?= ucwords(str_replace('-', ' ', $manga)) ?> - Volume <?= $volume ?></h2>

    <?php if (count($pages)): ?>
        <?php foreach ($pages as $page): ?>
            <div class="mb-4 text-center">
                <img src="<?= $page ?>" class="img-fluid" alt="Página do volume">
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-white text-center">Nenhuma página encontrada neste volume.</p>
    <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>