
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
// Conexion a la base de datos
$servername = "localhost";
$username = "root";
$password = "misan";
$dbname = "alumnos";

// Crea una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la conexión
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

// Consulta a la base de datos
$sql = "SELECT * FROM tAlumnos WHERE Carrera = 'carpinteria'";

// Ejecuta la consulta
$result = mysqli_query($conn, $sql);

// Imprime los resultados
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Codigo: " . $row["CodAlumno"]. " - Apellido Paterno: " . $row["ApPaterno"]. " - Nombre: " . $row["Nombre"]. " - Carrera: " . $row["Carrera"]. " - Promedio: " . $row["Promedio"]. "<br>";
  }
} else {
  echo "0 resultados";
}

// Cierra la conexión
mysqli_close($conn);
?>