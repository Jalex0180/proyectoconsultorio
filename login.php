<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio</title>
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">
    <!-- Incluir Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #eaf5f5; 
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .main-container {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
        }

        .image-container {
            margin-right: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            border-radius: 10px;
        }

        .form-container {
            flex-grow: 1;
            text-align: center;
        }

        header h1 {
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        header h2 {
            font-size: 1.5em;
            font-weight: 500;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .form-control {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1em;
            color: #333;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007BFF;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            border-radius: 50px;
            padding: 10px 30px;
            font-size: 1.1em;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .link-primary {
            color: #007BFF;
            text-decoration: none;
            font-weight: 500;
        }

        .link-primary:hover {
            text-decoration: underline;
        }

        .logo {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="image-container">
            <img src="./images/imagen png 2.PNG" width="350" height="350" alt="Imagen de consultorio">
        </div>
        <div class="form-container">
            <img src="./images/logo.jpg.jpg" width="100" class="logo" alt="Logo Consultorio">
            <header>
                <h1>Consultorio Médico Alexander Roncancio</h1>
                <h2>Iniciar Sesión</h2>
            </header>
            <form class="d-flex flex-column align-items-center">
                <div class="mb-3 w-75 position-relative">
                    <label for="exampleInputEmail1" class="form-label visually-hidden">Usuario</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de usuario">
                </div>
                <div class="mb-3 w-75 position-relative">
                    <label for="exampleInputPassword1" class="form-label visually-hidden">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <!-- Botón de "Recuperar contraseña" -->
                <div class="mb-3 w-75 text-end">
                    <a href="./index.php" class="link-primary">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="mb-3 w-75 text-end">
                    <a href="./formulario.php" class="link-primary">¿Registrarte?</a>
                </div>
                <div class="mt-3 w-75">
                    <a href="./citas.php" class="btn btn-primary w-100">Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </div>

<script>

function myfuncion(){
    window.location.href="http://localhost/proyectoconsultorio"
}
</script>

</body>

</html>