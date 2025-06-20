<?php
include('../includes/header.php');
include('../includes/functions.php');
?>

<?php
$paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$mangasPorPagina = 9;
$todosMangas = obterMangas(); // pega todos os mangas
$totalMangas = count($todosMangas);
$totalPaginas = ceil($totalMangas / $mangasPorPagina);

$offset = ($paginaAtual - 1) * $mangasPorPagina;
$mangas = array_slice($todosMangas, $offset, $mangasPorPagina);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">

            <?php for ($i = 0; $i < count($mangas); $i += 3): ?>
                <div class="row justify-content-start mb-4">
                    <?php for ($j = $i; $j < $i + 3 && $j < count($mangas); $j++): ?>
                        <?php $manga = $mangas[$j]; ?>
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="manga-card">
                                <img src="/anime_site/<?= $manga['capa'] ?>" class="manga-cover" alt="<?= $manga['titulo'] ?>">
                                <span class="manga-title"><?= $manga['titulo'] ?></span>
                                <?php foreach ($manga['capitulos'] as $capitulo): ?>
                                    <div class="manga-chapter">
                                        <span class="chapter-number">Capítulo <?= $capitulo['numero'] ?></span>
                                        <span class="chapter-time"><?= $capitulo['tempo'] ?></span>
                                        <span class="chapter-icon">🟡</span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

            <!-- Paginação dinâmica -->
            <div class="container text-center">
                <div class="flex items-center justify-center flex-wrap space-x-2 bg-transparente py-4">
                    <!-- Botão Primeira -->
                    <?php if ($paginaAtual > 1): ?>
                        <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/index.php">Primeira</a>
                        <?php if ($paginaAtual == 2): ?>
                            <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/index.php">Anterior</a>
                        <?php else: ?>
                            <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/paginas/pag.php?pagina=<?= $paginaAtual - 1 ?>">Anterior</a>
                        <?php endif; ?>
                    <?php else: ?>
                        <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Primeira</button>
                        <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Anterior</button>
                    <?php endif; ?>

                    <!-- Números das páginas -->
                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                        <?php if ($i == $paginaAtual): ?>
                            <button class="bg-green-600 text-white px-4 py-1 rounded"><?= $i ?></button>
                        <?php elseif ($i == 1): ?>
                            <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/index.php"><?= $i ?></a>
                        <?php else: ?>
                            <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/paginas/pag.php?pagina=<?= $i ?>"><?= $i ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Botão Próxima -->
                    <?php if ($paginaAtual < $totalPaginas): ?>
                        <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/paginas/pag.php?pagina=<?= $paginaAtual + 1 ?>">Próxima</a>
                        <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="/anime_site/paginas/pag.php?pagina=<?= $totalPaginas ?>">Última</a>
                    <?php else: ?>
                        <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Próxima</button>
                        <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Última</button>
                    <?php endif; ?>

                    <!-- Total de itens -->
                    <span class="text-gray-400 ml-4"><?= $totalMangas ?> itens</span>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>