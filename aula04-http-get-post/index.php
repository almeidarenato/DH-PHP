<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>

<body>

  <!-- variaveis de conteudo -->
  <?php
  $cursos = [
    "Full Stack" => ["full.jpeg", "Curso de desenvolvimento web", 41.99, "full-stack"],
    "Marketing Digital" => ["marketing.jpg", "Curso de marketing", 51.99, "marketing"],
    "User Experience" => ["ux.png", "Curso de Experiência de Usuário", 71.99, "ux"],
    "Mobile Android" => ["android.png", "Curso de desenvolvimento android", 0.99, "android"]
  ];

  $usuario = [
    "nome" => "Fulano",
    "email" => "fulano@digitalhouse.com",
    "senha" => "1234",
    "nivel_acesso" => mt_rand(0, 1)
  ];
  ?>

  <main>
    <!-- navBar -->
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
    <!-- produtos -->
    <div class="container">
      <div class="row">
        <!-- cursos -->
        <?php foreach ($cursos as $nome => $infos) { ?>
          <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
            <div class="thumbnail">
              <img src="<?php echo 'assets/img/' . $infos[0]; ?>" alt="Full Stack">
              <div class="caption">
                <h3><?php echo $nome; ?></h3>
                <p><?php echo $infos[1]; ?></p>
                <p><strong><?php echo $infos[2]; ?></strong></p>
                <a href="#" class="btn btn-primary" role="button" data-toggle='modal' data-target="<?php echo '#' . $infos[3]; ?>">Comprar</a>
              </div>
            </div>
          </div>
        <?php } ?>
        <!-- área de compra  -->
        <?php foreach ($cursos as $nome => $infos) : ?>
          <div class=" modal fade" id="<?php echo $infos[3] ?>" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Digite seus dados para efetuar a compra</h4>
                </div>
                <div class="modal-body">
                  <h4>Curso de
                    <?php echo $nome ?>.</h4>
                  <h4>Valor: R$
                    <?php echo $infos[2] ?>
                  </h4>
                  <form class="" action="validarCompra.php" method="POST">
                    <input type="text" name="nomeCurso" value="<?php echo "$nome"; ?>" hidden>
                    <input type="text" name="precoCurso" value="<?php echo "$infos[2]"; ?>" hidden>

                    <div class="input-group col-md-5">
                      <label for="labelNome">Nome Completo</label>
                      <input id="labelNome" type="text" name='nomeCompleto' class="form-control" placeholder="Digite Aqui...">
                    </div>

                    <div class="input-group col-md-5">
                      <label for="labelCpf">CPF</label>
                      <input id="labelCpf" type="number" name='cpf' class="form-control" placeholder="Digite Aqui...">
                    </div>

                    <div class="input-group col-md-5">
                      <label for="labelNroCartao">Número do Cartão</label>
                      <input id="labelNroCartao" type="number" name='numCartao' class="form-control" placeholder="Digite Aqui...">
                    </div>

                    <div class="input-group col-md-5">
                      <label for="labelValidade">Validade</label>
                      <input id="labelValidade" type="month" name='validade' class="form-control" placeholder="Digite Aqui...">
                    </div>

                    <div class="input-group col-md-5">
                      <label for="labelCvv">CVV</label>
                      <input id="labelCvv" type="number" name='cvv' class="form-control" placeholder="Digite Aqui...">
                    </div>
                    <button type="submit" name="button" class="btn btn-info">Comprar</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <p align="center">Copyright &copy; Cursos 2019</p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- fim área da compra -->
      </div>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>