
<?php
// datos de conexión a la base de datos
$host = "containers-us-west-114.railway.app"; // el servidor de la base de datos
$username = "root"; // tu nombre de usuario de la base de datos
$password = "XSzZc6QRlnHry9ZsPDIj"; // tu contraseña de la base de datos
$database = "railway"; // el nombre de tu base de datos

// intenta conectarse a la base de datos
$conn = mysqli_connect($host, $username, $password, $database);

// verifica si la conexión fue exitosa
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
} else {
    die("La conexión a la base de datos fue exitosa ");
}

// // datos a insertar
// $nombre = $_POST['nombre'];
// $email = $_POST['email'];
// $password $_POST['password'];

// // prepara la consulta de inserción
// $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

// // ejecuta la consulta de inserción y verifica si fue exitosa
// if (mysqli_query($conn, $sql)) {
//     echo "Datos insertados exitosamente en la tabla 'usuarios'";
// } else {
//     echo "Error al insertar los datos: " . mysqli_error($conn);
// }

// cierra la conexión a la base de datos
mysqli_close($conn);
?>
