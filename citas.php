<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Médico - Citas Médicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color:  #eaf5f5;
            color: rgb(8, 2, 2);
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .appointment-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .appointment-form h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            background-color: #2a37f0;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color:  #2a37f0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Agendar Citas Médicas</h1>
</header>

<nav>
    <a href="./index.php.">INICIO</a>
    <a href="./login.php">SALIR</a>
</nav>
<div class="container">
    <div class="appointment-form">
        <h2>Agenda tu Cita Médica</h2>
        <form action="#">
        <div class="form-group">
                <label for="Especialidad">Especialidad:</label>
                <input type="Especialidad" id="Especialidad" name="Especialidad" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <input type="documento" id="cc" name="cc" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="Ciudad">Ciudad:</label>
                <input type="ciudad" id="ciudad" name="ciudad" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha de la Cita:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Hora de la Cita:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="doctor">Selecciona el Doctor:</label>
                <select id="doctor" name="doctor" required>
                    <option value="doctor1">Dr. Juan Pérez - Cardiología</option>
                    <option value="doctor2">Dra. Ana López - Dermatología</option>
                    <option value="doctor3">Dr. Carlos García - Pediatría</option>
                    <option value="doctor4">Dra. Marta Rodríguez - Medicina General</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Notas Adicionales:</label>
                <textarea id="notes" name="notes" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Agendar Cita</button>
            </div>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 Consultorio Médico Dr Alexander Roncancio.</p>
</footer>
<script>

function myfuncion(){
    window.location.href="http://localhost/proyectoconsultorio"
}
</script>{

function myfuncion()
    window.location.href="http://localhost/proyectoconsultorio"
}
</script>

</body>
</html>