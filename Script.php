<?php

function procesarUrls($archivo) {
    $urls_validate = []; // Array para eliminar duplicados
    $patron = "/shop/"; // Expresión regular para dominios con "shop"
    // Abrir el archivo
    if (($handle = fopen($archivo, "r")) !== false) {
        while (($linea = fgets($handle)) !== false) {
            $url = trim($linea); // Limpiar los espacios o saltos de línea
            // Valida si la URL contiene "shop" en el dominio y si termina en ".html"
            if (preg_match($patron, $url) && substr($url, -5) === ".html") {
                $urls_validate[$url] = true; // Se almacena las URLS duplicadas para eliminarlas
            }
        }
        fclose($handle);
    }
    // Muestra la cantidad de URLS válidas con "count"
    echo "Total de URLS válidas son: " . count($urls_validate) . PHP_EOL;
    // Lista todas las URLS válidas
    foreach ($urls_validate as $url => $value) {
        echo $url . PHP_EOL;
    }
}

if ($argc > 1) {
    $archivo = $argv[1];
    procesarUrls($archivo);
} else {
    echo "Falta nombre del archivo !" . PHP_EOL;
}
?>
