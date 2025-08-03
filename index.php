<?php include('includes/header.php'); ?>
<?php
define('BASE_PATH', __DIR__);
$page = $_GET['page'] ?? 'home';
?>


<!-- Conteúdo da página -->
<div class="container mt-5">

  <!-- Primeira Linha: Top 10 + Carrossel -->
  <div class="row mb-5">

    <!-- Coluna esquerda: Lista de mangás -->
    <div class="col-md-5">
      <h2 class="mb-4 text-white">Top 5 Global</h2>

      <div class="manga-feed p-3">
        <!-- Card 0 -->
        <div class="manga-card d-flex align-items-center mb-3">
          <img src="img/dragon_ball.jpg" alt="Capa do Mangá" class="manga-cover me-3">
          <div>
            <h5 class="mb-1">Dragon Ball</h5>
            <p class="manga-description"></p>
            <a href="mangas/dragon-ball/dragon-ball.php" class="btn btn-sm btn-outline-light">Ler Agora</a>
          </div>
        </div>

        <!-- Card 1 -->
        <div class="manga-card d-flex align-items-center mb-3">
          <img src="img/one_Piece.png" alt="Capa do Mangá" class="manga-cover me-3">
          <div>
            <h5 class="mb-1">One Piece</h5>
            <p class="manga-description"></p>
            <a href="mangas/one-piece/one-piece.php" class="btn btn-sm btn-outline-light">Ler Agora</a>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="manga-card d-flex align-items-center mb-3">
          <img src="img/naruto.jpg" alt="Capa do Mangá" class="manga-cover me-3">
          <div>
            <h5 class="mb-1">Naruto</h5>
            <p class="manga-description"></p>
            <a href="#" class="btn btn-sm btn-outline-light">Ler Agora</a>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="manga-card d-flex align-items-center mb-3">
          <img src="img/attack_on_titan.png" alt="Capa do Mangá" class="manga-cover me-3">
          <div>
            <h5 class="mb-1">Attack on Titan</h5>
            <p class="manga-description"></p>
            <a href="mangas/attack-on-titan/attack-on-titan.php" class="btn btn-sm btn-outline-light">Ler Agora</a>
          </div>
        </div>

        <div class="manga-card d-flex align-items-center mb-3">
          <img src="img/fate_1.jpg" alt="Capa do Mangá" class="manga-cover me-3">
          <div>
            <h5 class="mb-1">Fate Stay-Night</h5>
            <p class="manga-description"></p>
            <a href="mangas/fate/fate.php" class="btn btn-sm btn-outline-light">Ler Agora</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Coluna direita: Carrossel -->
    <div class="col-md-6 col-lg-6">
      <h2 class="mb-4 text-white">Novidades</h2>
      <div class="manga-carousel-container">
        <div id="mangaCarousel" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="carousel-bg" style="background-image: url('img/tokyo_revengers.webp');"></div>
              <div class="carousel-overlay text-white p-4 rounded">
                <div class="cover-img">
                  <img src="img/tokyo_revengers.webp" alt="capa do mangá" class="img-fluid rounded" style="max-width: 150px;">
                </div>
                <div class="text-content">
                  <h2>Tokyo Revengers #27</h2>
                  <div class="genre-container mb-2">
                    <span class="badge bg-light text-dark">Ação</span>
                    <span class="badge bg-light text-dark">Drama</span>
                    <span class="badge bg-light text-dark">Viagem no tempo</span>
                  </div>
                  <p>Takemichi luta para salvar aqueles que ama viajando entre passado e presente em gangues perigosas.</p>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="carousel-bg" style="background-image: url('img/soul_eater.webp');"></div>
              <div class="carousel-overlay text-white p-4 rounded">
                <div class="cover-img">
                  <img src="img/soul_eater.webp" alt="capa do mangá" class="img-fluid rounded" style="max-width: 150px;">
                </div>
                <div class="text-content">
                  <h2>Soul Eater #12</h2>
                  <div class="genre-container mb-2">
                    <span class="badge bg-light text-dark">Ação</span>
                  </div>
                  <p>O Livro de Eibon, um artefato poderoso capaz de afetar as pessoas com Insanidade...</p>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
              <div class="carousel-bg" style="background-image: url('img/blue_exorcist1.webp');"></div>
              <div class="carousel-overlay text-white p-4 rounded">
                <div class="cover-img">
                  <img src="img/blue_exorcist1.webp" alt="capa do mangá" class="img-fluid rounded" style="max-width: 150px;">
                </div>
                <div class="text-content">
                  <h2>Blue Exorcist #31</h2>
                  <div class="genre-container mb-2">
                    <span class="badge bg-light text-dark">Aventura</span>
                    <span class="badge bg-light text-dark">Sobrenatural</span>
                  </div>
                  <p>Os Cavaleiros da Verdadeira Cruz iniciam seu ataque à fortaleza de Satã...</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Controles -->
          <button class="carousel-control-prev" type="button" data-bs-target="#mangaCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#mangaCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>

          <!-- Indicadores -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#mangaCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mangaCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mangaCarousel" data-bs-slide-to="2"></button>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Fim da primeira linha -->

  <!-- Segunda Linha: Mangá em Geral -->
  <div class="row">
    <div class="col-12">
      <?php
      include('includes/functions.php');
      $mangas = obterMangas();

      $itensPorPagina = 9;
      $totalMangas = count($mangas);
      $totalPaginas = ceil($totalMangas / $itensPorPagina);
      $paginaAtual = isset($_GET['pagina']) ? max(1, intval($_GET['pagina'])) : 1;
      $offset = ($paginaAtual - 1) * $itensPorPagina;
      $mangasPagina = array_slice($mangas, $offset, $itensPorPagina);
      ?>

      <h2 class="text-white">Mangá em Geral</h2>

      <?php for ($i = 0; $i < count($mangasPagina); $i += 3): ?>
        <div class="row justify-content-start mb-4">
          <?php for ($j = $i; $j < $i + 3 && $j < count($mangasPagina); $j++): ?>
            <?php $manga = $mangasPagina[$j]; ?>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="manga-card w-100" onclick="window.location.href='<?= $manga['link'] ?>'" style="cursor: pointer;">
                <img src="<?= $manga['capa'] ?>" class="manga-cover" alt="<?= $manga['titulo'] ?>">
                <span class="manga-title"><?= $manga['titulo'] ?></span>
                <?php foreach ($manga['Volumes'] as $Volumes): ?>
                  <div class="manga-chapter">
                    <span class="chapter-number">Volumes <?= $Volumes['numero'] ?></span>
                    <span class="chapter-time"><?= $Volumes['tempo'] ?? '' ?></span>
                    <span class="chapter-icon">🔘</span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      <?php endfor; ?>

      <!-- Paginação -->
      <div class="container text-center mt-5">
  <div class="flex justify-center items-center gap-2 py-2">
    <button class="px-3 py-1 bg-gray-500 text-white rounded opacity-50 cursor-not-allowed" disabled>Primeira</button>
    <button class="px-3 py-1 bg-gray-500 text-white rounded opacity-50 cursor-not-allowed" disabled>Anterior</button>
    
    <a class="px-3 py-1 bg-green-700 text-white rounded hover:bg-green-600" href="/anime_site/paginas/pag.php?pagina=2">2</a>
    <a class="px-3 py-1 bg-green-700 text-white rounded hover:bg-green-600" href="/anime_site/paginas/pag.php?pagina=2">Próxima</a>
    <a class="px-3 py-1 bg-green-700 text-white rounded hover:bg-green-600" href="/anime_site/paginas/pag.php?pagina=2">Última</a>

    <span class="text-gray-400 ml-4">13 itens</span>
  </div>
</div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>