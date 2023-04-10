const tablaAlumnos = document.getElementById("tabla-alumnos")

fetch("datos.php")
  .then(response => response.json())
  .then(data => {
    data.forEach(alumno => {
      let row = tablaAlumnos.insertRow();
      let codAlumnoCell = row.insertCell(0);
      let apPaternoCell = row.insertCell(1);
      let nombreCell = row.insertCell(2);
      let carreraCell = row.insertCell(3);
      let promedioCell = row.insertCell(4);

      codAlumnoCell.innerHTML = alumno.CodAlumno;
      apPaternoCell.innerHTML = alumno.ApPaterno;
      nombreCell.innerHTML = alumno.Nombre;
      carreraCell.innerHTML = alumno.Carrera;
      promedioCell.innerHTML = alumno.Promedio;
    });
  });