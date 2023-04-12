<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Portal de gasfiteria.amauta.edu.pe</title>
    <link rel="stylesheet" href="estilos.css">
    <!-- <script src="backend.js"></script> -->
</head>

<body>
    <div id="general">
        <div id="header1">
            <header id="cabecera">
                <h1> Bienvenidos a gasfiteria.amauta.edu.pe </h1>
            </header>
        </div>
        
        <div id="nav1">
          <h2>Navegue por las paginas de las diversas carreras: </h2>
                <li>Carpinteria</li>
                <a href="">www.carpinteria.amauta.edu.pe</a>
                <li>Albañileria</li>
                <a href="">www.albanileria.amauta.edu.pe</a>
                <li>Gasfiteria</li>
                <a href="">www.gasfiteria.amauta.edu.pe</a>
                <li>Ebanisteria</li>
                <a href="">www.ebanisteria.amauta.edu.pe</a>
        </div>

        <div id="content1">
            <!-- Codigo para llamar a la base de datos -->
            <table id="tabla-alumnos">
                <thead>
                  <tr>
                    <th>CodAlumno</th>
                    <th>ApPaterno</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Promedio</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        // Conexión a la base de datos
                        $mysqli = new mysqli("localhost", "root", "misan", "alumnos");

                        // Verificación de errores de conexión
                        if ($mysqli->connect_errno) {
                            echo "Error de conexión: " . $mysqli->connect_error;
                            exit();
                        }

                        // Consulta SQL para obtener los datos de la tabla tAlumnos
                        $sql = "SELECT CodAlumno, ApPaterno, Nombre, Carrera, Promedio FROM tAlumnos WHERE Carrera = 'gasfiteria'";

                        // Ejecución de la consulta
                        $result = $mysqli->query($sql);

                        // Ciclo para mostrar los datos de la tabla
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["CodAlumno"] . "</td>";
                            echo "<td>" . $row["ApPaterno"] . "</td>";
                            echo "<td>" . $row["Nombre"] . "</td>";
                            echo "<td>" . $row["Carrera"] . "</td>";
                            echo "<td>" . $row["Promedio"] . "</td>";
                            echo "</tr>";
                        }

                        // Liberación de memoria y cierre de la conexión
                        $result->free();
                        $mysqli->close();
                    ?>
                </tbody>
              </table>
        </div>

        <div id="footer1">
            <footer id="pie">
                <small>amauta.edu.pe - Derechos reservados - Misan &copy; 2023</small>
            </footer>
        </div>
    </div>


</body>

</html>
