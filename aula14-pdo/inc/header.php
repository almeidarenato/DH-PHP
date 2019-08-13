<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Portal DH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <?php if (isset($active) && $active == "admin") : ?>
      <li class="nav-item">
        <a class="nav-link" href="indexLogados.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastroRedator.php">Cadastro de Redator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listandoRedatores.php">Listar Redatores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listandoNoticias.php">Listar Notícias</a>
      </li>
      <?php elseif (isset($active) && $active == "redator") : ?>
      <li class="nav-item">
        <a class="nav-link" href="indexLogados.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastroNoticia.php">Cadastro de Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listandoRedatores.php">Listar Redatores</a>
      </li>
      <?php else : ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Localização</a>
      </li>
      <?php endif; ?>
    </ul>
    <?php if (isset($active)) : ?>
    <?php session_start(); ?>
    <div class="form-inline my-2 my-lg-0">
      <div class="name-user">Olá, <?= $_SESSION["nome"]; ?></div>
      <a href="../utils/logout.php">
        <button class="btn btn-outline-success my-2 my-sm-0">Sair</button>
      </a>
    </div>
    <?php else : ?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    <?php endif; ?>
  </div>
</nav>