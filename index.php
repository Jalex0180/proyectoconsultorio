<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultori Médico Dr Alexander Roncancio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:  #eaf5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #eaf5f5;
            color: black;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        .logo {
            width: 50px;
            height: auto;
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
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
            width: 100%;
            margin: 15px auto;
        }
        .section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .section h2 {
            color: #334333;
        }
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .service {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            width: 30%;
            margin-bottom: 20px;
            text-align: center;
        }
        .service h3 {
            color: #2a37f0;
            margin-bottom: 10px;
        }
        .service p {
            color: #666;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
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
            background-color: #1e2a9a;
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
        <img src="./images/logo.jpg.jpg" alt="Descripción de la imagen">
        <p>Consultorio Médico Dr Alexander Roncancio</p>
    </header>
    

<nav>
    <a href="#inicio">Inicio</a>
    <a href="#servicios">Servicios</a>
    <a href="#contacto">Contacto</a>
    <a href="./login.php">Iniciar Sesión</a>
</nav>

<div class="container">
<header>
        <img src="./images/consultorio2.png" alt="Descripción de la imagen">

    </header>

    <!-- Página de Inicio -->
    <div id="inicio" class="section">
        <h2>Bienvenido a Nuestro Consultorio Médico</h2>
        <p>Nos dedicamos a ofrecer los mejores servicios médicos para toda la familia. Con un equipo de profesionales altamente capacitados, brindamos atención personalizada para garantizar tu bienestar.</p>
        <p>En nuestro consultorio, cada paciente es tratado con respeto y dedicación, utilizando la última tecnología para diagnósticos precisos y tratamientos efectivos.</p>
        <h2>Nuestra Misión</h2>
        <p>En nuestro consultorio, nos dedicamos a ofrecerte una atención médica cálida y personalizada. Queremos que te sientas valorado y bien atendido en cada visita, con diagnósticos claros y tratamientos efectivos adaptados a tus necesidades. Nuestro equipo está aquí para escucharte y apoyarte en tu camino hacia el bienestar, utilizando lo mejor en tecnología y conocimientos médicos. Tu salud y confianza son nuestra prioridad, y trabajamos con esmero para asegurarnos de que recibas el mejor cuidado posible.</p>
        <h2>Nuestra Visión</h2>
        <p>Para el 2030 queremos ser el consultorio médico más importante del país, ofreciendo atención cálida y personalizada. Imaginamos un futuro donde cada paciente se sienta cuidado con empatía y respeto, y donde siempre estemos a la vanguardia en tecnología y conocimientos para promover su bienestar. Nuestro objetivo es construir relaciones de confianza duraderas, comprometidos con la salud y la satisfacción de cada persona que atendemos.</p>
    </div>

    <header>
        <img src="./images/imagen png 2.PNG" alt="Descripción de la imagen">
    </header>

    <!-- Sección de Servicios -->
    <div id="servicios" class="section">
        <h2>Nuestros Servicios</h2>
        <div class="services">
            <div class="service">
                <h3>Consulta General</h3>
                <p>Atención médica integral para diagnosticar y tratar diversas afecciones comunes.</p>
            </div>
            <div class="service">
                <h3>Especialidades Médicas</h3>
                <p>Consulta con especialistas en cardiología, dermatología, pediatría, y más.</p>
            </div>
            <div class="service">
                <h3>Exámenes de Laboratorio</h3>
                <p>Realización de pruebas diagnósticas para un diagnóstico rápido y preciso.</p>
            </div>
            <div class="service">
                <h3>Atención de Urgencias</h3>
                <p>Disponibilidad inmediata para emergencias médicas.</p>
            </div>
            <div class="service">
                <h3>Vacunación</h3>
                <p>Provisión de vacunas para niños, adultos, y viajeros.</p>
            </div>
            <div class="service">
                <h3>Terapias de Rehabilitación</h3>
                <p>Fisioterapia y rehabilitación para recuperación postoperatoria y de lesiones.</p>
            </div>
        </div>
    </div>

    <!-- Formulario de Contacto -->
    <div id="contacto" class="contact-form section">
        <h2>Formulario de Contacto</h2>
        <form action="#">
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact-email">Correo Electrónico:</label>
                <input type="email" id="contact-email" name="contact-email" required>
            </div>
            <div class="form-group">
                <label for="TEL ">Telefono:</label>
                <input type="Telefono" id="contact-tel" name="contact-tel" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Enviar Mensaje</button>
            </div>
        </div>
        <div class="form-group">
            <button type="submit">Enviar Mensaje</button>
        </div>
        
<footer>
<p>&copy; Consultorio Médico Dr Alexander Roncancio 2024.</p>

</footer>

<script>

function myfuncion(){
    window.location.href="http://localhost/proyectoconsultorio"
}
</script>

</body>
</html>
