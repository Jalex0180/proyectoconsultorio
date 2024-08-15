<?php
// Credenciales de conexión a la base de datos
$user = "root";
$pass = "";
$host = "localhost";

// Conectar a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Verificar la conexión
if (!$connection) {
    die("No se pudo conectar al servidor: " . mysqli_connect_error());
}
echo "<b><h3>Conectado al servidor exitosamente</h3></b>";

// Seleccionar la base de datos
$datab = "formulario";
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    die("No se pudo seleccionar la base de datos: " . mysqli_error($connection));
}
echo "<h3>Base de datos seleccionada exitosamente</h3>";

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// Hashear la contraseña antes de almacenarla
$hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar datos en la tabla
$stmt = $connection->prepare("INSERT INTO tabla_form (nombre, usuario, contraseña) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $usuario, $hashed_password);

if ($stmt->execute()) {
    echo "<h3>Nuevo registro creado exitosamente</h3>";
} else {
    echo "Error: " . $stmt->error;
}

// Recuperar y mostrar los registros de la tabla
$consulta = "SELECT * FROM tabla_form";
$result = mysqli_query($connection, $consulta);

if (!$result) {
    die("Consulta fallida: " . mysqli_error($connection));
}

echo "<formulario>";
echo "<tr>";
echo "<th><h1>ID</h1></th>";
echo "<th><h1>Nombre</h1></th>";
echo "<th><h1>Usuario</h1></th>";
echo "<th><h1>Contraseña</h1></th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</h2></td>";
    echo "<td><h2>" . $colum['nombre']. "</h2></td>";
    echo "<td><h2>" . $colum['usuario'] . "</h2></td>";
    echo "<td><h2>" . $colum['contraseña'] . "</h2></td>";
    echo "</tr>";
}
echo "</table>";

// Cerrar la conexión
mysqli_close($connection);

// Proveer un enlace para volver al formulario
echo '<a href="formulario.php">Volver Atrás</a>';

?>