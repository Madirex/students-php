<?php
require_once 'student.php';

/**
 * Clase StudentList
 */
class StudentList
{
    private $studentList;

    /**
     * @param $studentList array lista de estudiantes
     */
    public function __construct($studentList)
    {
        $this->studentList = $studentList;
    }

    /**
     * @return array lista de estudiantes
     */
    public function getStudentList()
    {
        return $this->studentList;
    }

    /**
     * @param $studentList array lista de estudiantes
     * @return void lista de estudiantes
     */
    public function setStudentList($studentList)
    {
        $this->studentList = $studentList;
    }

    /**
     * @return string nota media
     */
    public function getAverageGrade()
    {
        $averageGrade = 0;
        foreach ($this->studentList as $student) {
            $averageGrade += $student->getGrade();
        }
        return number_format($averageGrade / count($this->studentList), 2);
    }

    /**
     * @return int número de aprobados
     */
    public function getNumPasses()
    {
        $numPasses = 0;
        foreach ($this->studentList as $student) {
            if ($student->getGrade() >= 5) {
                $numPasses++;
            }
        }
        return $numPasses;
    }

    /**
     * @return int número de suspensos
     */
    public function getNumFailures()
    {
        $numFailures = 0;
        foreach ($this->studentList as $student) {
            if ($student->getGrade() < 5) {
                $numFailures++;
            }
        }
        return $numFailures;
    }

    /**
     * @return string porcentaje de aprobados
     */
    public function getPercentagePasses()
    {
        return number_format(($this->getNumPasses() / count($this->studentList)) * 100, 2);
    }

    /**
     * @return string porcentaje de suspensos
     */
    public function getPercentageFailures()
    {
        return number_format(($this->getNumFailures() / count($this->studentList)) * 100, 2);
    }

}