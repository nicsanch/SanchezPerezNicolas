<?php
/**
 * Práctica de documentación con phpDocumentor
 * @author Nicolás Sánchez Pérez
 * @version 2.0.0
 */

/**
 * Suma dos números enteros.
 *
 * {@internal No maneja decimales}
 * @param int $a Primer numero
 * @param int $b Segundo numero
 * @return int Resultado de la multiplicacion
 */
function multiplicarEnteros(int $a, int $b): int {
    return $a * $b;
}

/**
 * Resta dos números enteros.
 *
 * @param int $a dividendo
 * @param int $b divisor
 * @return int Resultado de la multiplicacion
 */
function restarEnteros(int $a, int $b): int {
    return $a / $b;
}


