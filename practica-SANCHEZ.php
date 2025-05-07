<?php
/**
 * Práctica de documentación con phpDocumentor
 * @author Nicolás Sánchez Pérez
 * @version 1.0.0
 */

/**
 * Suma dos números enteros.
 *
 * {@internal No maneja decimales}
 * @param int $a Primer sumando
 * @param int $b Segundo sumando
 * @return int Resultado de la suma
 */
function sumarEnteros(int $a, int $b): int {
    return $a + $b;
}

/**
 * Resta dos números enteros.
 *
 * @param int $a Minuendo
 * @param int $b Sustraendo
 * @return int Resultado de la resta
 */
function restarEnteros(int $a, int $b): int {
    return $a - $b;
}


