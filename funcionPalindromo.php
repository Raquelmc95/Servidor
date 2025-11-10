<?php
/**
 * Destecta si es palindromo y retorna un boolenao
 * 
 * @param string $palabra: Palabra a comparar
 * @return bool: Retorna verdadero o falso
 */
function esPalindromo($palabra):bool {
    $palabraMinuscula = strtolower($palabra);
    $reverse = strrev($palabraMinuscula);
    return $palabraMinuscula == $reverse;

}
?>