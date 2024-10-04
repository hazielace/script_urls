<?php

function procesarUrls($archivo) {
    $urls_validate = [];
    $patron = "/shop/";
    if (($handle = fopen($archivo, "r")) !== false) {
        while (($linea = fgets($handle)) !== false) {
            $url = trim($linea);
            if (preg_match($patron, $url) && substr($url, -5) === ".html") {
                $urls_validate[$url] = true;
            }
        }
        fclose($handle);
    }

    echo "Total de URLS válidas son: " . count($urls_validate) . PHP_EOL;

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
