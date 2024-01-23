<?php

namespace Student;

/**
 * Clase Student
 */
class Student
{
    private $id;
    private $name;
    private $grade;
    private $picture;

    /**
     * @param $name string nombre del estudiante
     * @param $grade float nota del estudiante
     * @param $picture string foto del estudiante
     */
    public function __construct($name, $grade, $picture)
    {
        $this->id = $this->getNextID();
        $this->name = $name;
        $this->grade = $grade;
        $this->picture = $picture;
    }

    /**
     * @return int id del estudiante
     */
    function getNextID()
    {
        static $id = 1;
        $nextId = $id;
        $id++;
        return $nextId;
    }

    /**
     * @return int id del estudiante
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * @return string nombre del estudiante
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * @return float nota del estudiante
     */
    function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return string foto del estudiante
     */
    function getPicture()
    {
        return $this->picture;
    }
}