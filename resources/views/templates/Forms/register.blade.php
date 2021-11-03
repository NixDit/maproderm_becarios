<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/register.css">

    <title>Login</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Bienvenido</h1>
            <div class="social-login">
                <div class="social-login-element">
                    <a class="menu-link py-3" href="{{route('formulario')}}">
                    <span class="menu-title">Registrarme</span>
                    </a>
                </div>
                <div class="social-login-element">
                    <a class="menu-link py-3" href="{{route('registrado')}}">
                    <span class="menu-title">Ya estoy Registrado</span>
                    </a>
                </div>
            </div>

            <form class="inputs-container">
                <input class="input" type="text" placeholder="Correo">
                <input class="input" type="text" placeholder="Evento">
                <button class="btn">Enviar</button>
            </form>
          </div>
            <img class="image-container" src="images/login.svg" alt="">
      </div>

</body>
</html>
