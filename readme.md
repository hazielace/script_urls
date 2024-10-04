## Instrucciones para ejecutar script
1. Asegurarse que el archivo de prueba este en la misma carpeta o en todo caso proporcionar la ruta completa.
2. Desde el terminal ejecutar: php Script.php prueba.txt

## Explicación del Algoritmo:
Se abre el archivo línea por línea con fgets() para manejar archivos grandes sin cargar todo en memoria.
Se utiliza preg_match() con una expresión regular simple para verificar si el dominio contiene "shop".
Se utiliza substr() para verificar que la URL termine en .html.
Eliminación de Duplicados: Se usa un array $urls_validate.
Optimización:
El archivo se procesa línea por línea, lo que permite manejar volumenes de datos sin problemas de memoria.
Salida: El número total de URLS válidas se cuenta usando count() y luego se imprime las URL validas.
