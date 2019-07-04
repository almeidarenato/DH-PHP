<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <span>Cursos</span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php if ($usuario["nivel_acesso"] == 1) { ?>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Adicionar Produto</a></li>
              <li><a href="#">Editar Produto</a></li>
            </ul>
          </li>
        </ul>
      <?php } ?>
      <form action="" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar...">
        </div>
        <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
      <p class="navbar-text navbar-right">
        Logado como
        <strong>
          <a href="#" class="navbar-link"><?php echo $usuario["nome"]; ?></a>
        </strong>
      </p>
    </div>
  </div>
</nav>