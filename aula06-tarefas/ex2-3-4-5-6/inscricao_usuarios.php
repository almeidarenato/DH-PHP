<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/foopicker.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script defer src="scripts/foopicker.js"></script>
  <title>Aula06 - Inscrição de Usuários - EX 02</title>
</head>

<body>
  <div class="jumbotron">
    <h1 class="display-3">Inscrição de Usuário</h1>
    <p class="lead">Aula06 - Ex 2</p>
    <hr class="my-2">
  </div>
  <div class="container">
    <div class="form-group">
      <form action="confirmacao.php" method="post">

        <div class="form-group">
          <label for="nomeCompleto">Nome Completo</label>
          <input class="form-control" type="text" name="nomeCompleto" id="nomeCompleto">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="dataNascimento">Data de Nascimento</label>
          <input class="form-control" type="date" name="dataNascimento" id="dataNascimento" data-provide="datepicker">
        </div>

        <div class="form-group">
          Hobbies:
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobbies[viajar]" id="viajar">
            <label class="form-check-label" for="viajar">Viajar</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobbies[programar]" id="programar">
            <label class="form-check-label" for="programar">Programar</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobbies[teatrar]" id="teatrar">
            <label class="form-check-label" for="teatrar">Teatrar</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="hobbies[cinemar]" id="cinemar">
            <label class="form-check-label" for="cinemar">Cinemar</label>
          </div>

          <div class="form-group">
            <label for="senha">Senha:</label>
            <input class="form-control" type="password" name="senha" id="senha" data-provide="datepicker">
          </div>
        </div>

        <button type="submit">Registrar</button>
      </form>
    </div>
  </div>
</body>

</html>