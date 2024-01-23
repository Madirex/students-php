<?php

namespace Utils;
/**
 * @param $grade float Nota del alumno
 * @return string "Aprobado" o "Suspenso"
 */
function get_result($grade)
{
    if ($grade >= 5) {
        return "Aprobado";
    } else {
        return "Suspenso";
    }
}