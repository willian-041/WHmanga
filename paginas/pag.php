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
            <div class="d-flex justify-content-center mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        <!-- Primeira -->
                        <li class="page-item <?= ($paginaAtual <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="../index.php">Primeira</a>
                        </li>

                        <!-- Anterior -->
                        <li class="page-item <?= ($paginaAtual <= 1) ? 'disabled' : '' ?>">
                            <?php if ($paginaAtual == 2): ?>
                                <a class="page-link" href="../index.php">Anterior</a>
                            <?php else: ?>
                                <a class="page-link" href="?pagina=<?= $paginaAtual - 1 ?>">Anterior</a>
                            <?php endif; ?>
                        </li>

                        <!-- Números de página -->
                        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                            <li class="page-item <?= ($i == $paginaAtual) ? 'active' : '' ?>">
                                <?php if ($i == 1): ?>
                                    <a class="page-link" href="../index.php"><?= $i ?></a>
                                <?php else: ?>
                                    <a class="page-link" href="?pagina=<?= $i ?>"><?= $i ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endfor; ?>

                        <!-- Próxima -->
                        <li class="page-item <?= ($paginaAtual >= $totalPaginas) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?pagina=<?= min($totalPaginas, $paginaAtual + 1) ?>">Próxima</a>
                        </li>

                        <!-- Última -->
                        <li class="page-item <?= ($paginaAtual >= $totalPaginas) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?pagina=<?= $totalPaginas ?>">Última</a>
                        </li>
                    </ul>

                </nav>
            </div>

        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>