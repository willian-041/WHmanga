<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Ícones do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Bootstrap via CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS personalizado -->
  <link rel="stylesheet" href="<?php echo (strpos($_SERVER['PHP_SELF'], 'mangas/') !== false) ? '../assets/style.css' : 'assets/style.css'; ?>">

  <!-- Ícone da aba -->
  <link rel="icon" href="<?php echo (strpos($_SERVER['PHP_SELF'], 'mangas/') !== false) ? '../img/wh_img.png' : 'img/wh_img.png'; ?>" type="image/x-icon">

  <title>WHmanga</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-custom px-4">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="<?php echo (strpos($_SERVER['PHP_SELF'], 'mangas/') !== false) ? '../img/logo.jpeg' : 'img/logo.jpeg'; ?>" alt="Logo WHmanga" class="logo-redonda me-2">
    </a>

    <!-- Botão colapsável mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- Barra de pesquisa -->
      <form class="d-flex me-3">
        <div class="input-group search-bar">
          <span class="input-group-text bg-white border-end-0">
            <i class="bi bi-search text-muted"></i>
          </span>
          <input type="text" class="form-control border-start-0" placeholder="Buscar..." aria-label="Buscar">
        </div>
      </form>

      <!-- Dropdown de categorias -->
      <div class="dropdown">
        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Categorias
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Ação</a></li>
          <li><a class="dropdown-item" href="#">Romance</a></li>
          <li><a class="dropdown-item" href="#">Comédia</a></li>
          <li><a class="dropdown-item" href="#">Fantasia</a></li>
        </ul>
      </div>
    </div>
  </nav>