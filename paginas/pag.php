<?php include('../includes/header.php'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <?php
      include('../includes/functions.php');
      $mangas = obterMangas();

      $itensPorPagina = 9;
      $totalMangas = count($mangas);
      $totalPaginas = ceil($totalMangas / $itensPorPagina);
      $paginaAtual = isset($_GET['pagina']) ? max(1, intval($_GET['pagina'])) : 1;
      $offset = ($paginaAtual - 1) * $itensPorPagina;
      $mangasPagina = array_slice($mangas, $offset, $itensPorPagina);
      ?>

      <h2 class="text-white"></h2>

      <?php for ($i = 0; $i < count($mangasPagina); $i += 3): ?>
        <div class="row justify-content-start mb-4">
          <?php for ($j = $i; $j < $i + 3 && $j < count($mangasPagina); $j++): ?>
            <?php $manga = $mangasPagina[$j]; ?>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="manga-card">
                <img src="<?= $manga['capa'] ?>" class="manga-cover" alt="<?= $manga['titulo'] ?>">
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

      <!-- Paginação -->
      <div class="flex items-center justify-center space-x-2 bg-transparente py-4">
        <?php if ($paginaAtual > 1): ?>
          <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="../index.php">Primeira</a>
          <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="?pagina=<?= $paginaAtual - 1 ?>">Anterior</a>
        <?php else: ?>
          <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Primeira</button>
          <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Anterior</button>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
          <?php if ($i == $paginaAtual): ?>
            <button class="bg-green-600 text-white px-4 py-1 rounded"><?= $i ?></button>
          <?php else: ?>
            <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="?pagina=<?= $i ?>"><?= $i ?></a>
          <?php endif; ?>
        <?php endfor; ?>

        <?php if ($paginaAtual < $totalPaginas): ?>
          <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="?pagina=<?= $paginaAtual + 1 ?>">Próxima</a>
          <a class="border border-green-600 text-green-600 px-4 py-1 rounded hover:bg-green-800/20" href="?pagina=<?= $totalPaginas ?>">Última</a>
        <?php else: ?>
          <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Próxima</button>
          <button class="border border-green-600 text-green-600 px-4 py-1 rounded opacity-50" disabled>Última</button>
        <?php endif; ?>

        <span class="text-gray-400 ml-4"><?= $totalMangas ?> itens</span>
      </div>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>
