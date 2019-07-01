<?php
$usuario = [
  "nome" => "Fulano",
  "email" => "fulano@gmail.com",
  "nivel_acesso" => mt_rand(0, 1)
];
//var_dump($usuario);
//print_r($usuario);
/*
echo $usuario["nome"];
exit;
*/
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Landseeker Completo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
</head>

<body>
  <header>
    <div class="logo-content">
      <img src="img/logo.png" alt="logo do site">
      <span>Landseeker</span>
    </div>
    <nav class="container">
      <?php
      if ($usuario["nivel_acesso"] === 1) {
        ?>
        <ul>
          <li class="toggle-menu"><a href="#">&#9776;</a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">Edit Products</a></li>
          <li><a href="contact.html">List Users</a></li>
        </ul>
      <?php
    } else {
      ?>
        <ul>
          <li class="toggle-menu"><a href="#">&#9776;</a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      <?php } ?>

    </nav>
  </header>

  <section class="home-content">
    <div class="image-banner">
      <h1>The most beautifuls landscapes</h1>
      <p>New Orleans Forest</p>
      <button>Check it out</button>
    </div>
  </section>

  <section class="products-content">
    <div>
      <img src="img/product-1.png" alt="produto">
      <button>See More</button>
    </div>
    <div>
      <img src="img/product-2.jpg" alt="produto">
      <button>See More</button>
    </div>
    <div>
      <img src="img/product-3.jpg" alt="produto">
      <button>See More</button>
    </div>
    <div>
      <img src="img/product-4.jpg" alt="produto">
      <button>See More</button>
    </div>
    <div>
      <img src="img/product-5.jpg" alt="produto">
      <button>See More</button>
    </div>
    <div>
      <img src="img/product-6.jpg" alt="produto">
      <button>See More</button>
    </div>
  </section>

  <footer>
    <p>Copyright &copy; Digital House</p>
  </footer>
</body>

</html>