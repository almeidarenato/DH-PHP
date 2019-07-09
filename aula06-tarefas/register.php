<?PHP

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Fale conosco</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
</head>

<body>

  <div id='fg_membersite'>
    <form id='register' action='' method='post'>
      <fieldset>
        <legend>Inscreva-se</legend>

        <input type='hidden' name='submitted' id='submitted' value='1' />

        <div class='short_explanation'>* campos obrigatórios</div>
        <input type='text' class='spmhidip' name='' />

        <div><span class='error'></span></div>
        <div class='container'>
          <label for='name'>Nome completo: </label><br />
          <input type='text' name='name' id='name' value='' maxlength="50" /><br />
          <span id='register_name_errorloc' class='error'></span>
        </div>
        <div class='container'>
          <label for='email'>E-mail:</label><br />
          <input type='text' name='email' id='email' value='' maxlength="50" /><br />
          <span id='register_email_errorloc' class='error'></span>
        </div>
        <div class='container'>
          <label for='username'>Nome de usuário*:</label><br />
          <input type='text' name='username' id='username' value='' maxlength="50" /><br />
          <span id='register_username_errorloc' class='error'></span>
        </div>
        <div class='container' style='height:80px;'>
          <label for='password'>Senha*:</label><br />
          <div class='pwdwidgetdiv' id='thepwddiv'></div>
          <input type='password' name='password' id='password' maxlength="50" />
          <div id='register_password_errorloc' class='error' style='clear:both'></div>
        </div>
        <!--Ex.1- Caso tenha parametro versaoCurta esconde -->
        <?php if ($_GET['versaoCurta'] === null) : ?>
          <div class='container' style='height:80px;'>
            <label for='password'>Confirme sua Senha*:</label><br />
            <div class='pwdwidgetdiv' id='thepwddiv'></div>
            <input type='password' name='confirmpassword' id='confirmpassword' maxlength="50" />
            <div id='register_password_errorloc2' class='error' style='clear:both'></div>
          </div>
        <?php endif ?>
        <!-- ex. 2 - Array com países e campo select -->
        <div class="container">
          <label for="paises">País: </label>
          <select name="paises" id="paises">
            <?php
            include "paises.php";
            foreach ($paises as $pais) :
              ?>
              <option value='<?= $pais ?>'><?= $pais ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class='container'>
          <input type='submit' name='Submit' value='Enviar' />
        </div>

      </fieldset>
    </form>

</body>

</html>