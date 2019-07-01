<?php
$usuario = [
  "nome" => "Fulano",
  "email" => "fulano@gmail.com",
  "nivel_acesso" => mt_rand(0, 1)
]; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>contact page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body class="contact-body">
  <header>
    <div class="logo-content">
      <img src="img/logo.png" class="logo" alt="logo do site">
      <span>Landseeker</span>
    </div>
    <div class="container">
      <ul>
        <li class="toggle-menu"><a href="#">&#9776;</a></li>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>

    </div>
  </header>

  <div class="contact-content">
    <?php if ($usuario["nivel_acesso"] === 1) { ?>
      <div class="contact-title">
        <h1>Contact Us!</h1>
      </div>

      <form action="#">
        <label for="">Name</label>
        <input type="text">
        <label for="">E-mail</label>
        <input type="email">
        <label for="">Message</label>
        <textarea name="name" rows="8" cols="80"></textarea>
        <div class="contact-item">
          <input type="checkbox">
          <label for="">Don't post my name</label>
          <button type="submit" name="button">Send</button>
        </div>
      </form>
    <?php } else { ?>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dicta animi blanditiis enim doloremque iusto voluptatibus aliquam, odit velit nisi deserunt, est vero aperiam! Autem quaerat totam repudiandae fugit vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas facilis rem provident labore. Suscipit doloremque, nihil, voluptas neque molestias sit corrupti repellendus corporis eius provident doloribus alias in sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quam, fuga exercitationem nesciunt tempora necessitatibus doloribus aut quas corrupti minima ab quaerat explicabo quod quidem quo, nulla tenetur? Iure, sunt?</p>
    <?php } ?>
  </div>

  <footer>
    <p>Copyright &copy; Digital House</p>
  </footer>
</body>

</html>