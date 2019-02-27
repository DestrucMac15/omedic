<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion - OMEDIC</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link href="../css/sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../imagenes/colibri.ico">
    <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body>

      <div class="card">
        <div class="head-card">
            <img src="../../imagenes/logoOmedic.png" alt="">
        </div>
        <div class="body-card">
            <form id="form_login">
                <div class="form-group">
                    <label for="">Usuario:</label>
                    <div class="input">
                        <i class="fas fa-user"></i> <input class="login-input" type="text" name="nick_usuario" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Contraseña:</label>
                    <div class="input">
                        <i class="fas fa-unlock"></i> <input class="login-input" type="password" name="pass_usuario" required>
                    </div>
                </div>
                <div class="form-button">
                    <button type="submit">Ingresar</button>
                </div>
                <div class="mensaje">
                </div>
            </form>
        </div>
      </div>

    <script src="../libs/jquery.min.js"></script>
    <script src="../libs/sweetalert.min.js"></script>
    <script src="login.js"></script>
</body>
</html>