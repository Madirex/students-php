<?php

use Student\Student;

require_once 'utils/utils.php';
require_once 'models/studentlist.php';

// Crear la lista de estudiantes
$studentList = new StudentList([
    new Student('Antonio', number_format(rand(0, 100) / 10, 2), "4.jpg"),
    new Student('Gabriela', number_format(rand(0, 100) / 10, 2), "2.jpg"),
    new Student('Susana', number_format(rand(0, 100) / 10, 2), "3.jpg"),
    new Student('María', number_format(rand(0, 100) / 10, 2), "1.jpg"),
    new Student('Ana', number_format(rand(0, 100) / 10, 2), "7.jpg"),
    new Student('Paco', number_format(rand(0, 100) / 10, 2), "6.jpg"),
    new Student('Luis', number_format(rand(0, 100) / 10, 2), "5.jpg"),
    new Student('Sara', number_format(rand(0, 100) / 10, 2), "8.jpg"),
]);

// Tabla con los datos de los alumnos
echo "<table>";
echo "<tr><th>ID</th><th>Foto</th><th>Nombre</th><th>Calificación</th><th>Resultado</th></tr>";
foreach ($studentList->getStudentList() as $student) {
    $name = $student->getName();
    $id = $student->getId();
    $grade = $student->getGrade();
    $picture = $student->getPicture();

    $result = \Utils\get_result($grade);
    $result_to_lower = strtolower($result);

    echo "<tr><td>$id</td><td>
<img src='images/$picture' alt='$name' width='50' height='50'>
</td><td>$name</td><td>$grade</td><td class='$result_to_lower'>" . $result . "</td></tr>";
}

echo "</table>";

// Calcular datos
$average_grade = $studentList -> getAverageGrade();
$num_passes = $studentList -> getNumPasses();
$num_failures = $studentList -> getNumFailures();
$percentage_passes = $studentList -> getPercentagePasses();
$percentage_failures = $studentList -> getPercentageFailures();

// Mostrar datos calculados
echo '<div class="calculated_data">';
echo "<p>\nNota media: $average_grade\n</p>";
echo "<p>Número de aprobados: $num_passes\n</p>";
echo "<p>Número de suspensos: $num_failures\n</p>";
echo "<p>Porcentaje de aprobados: $percentage_passes%\n</p>";
echo "<p>Porcentaje de suspensos: $percentage_failures%\n</p>";
echo '</div>';
