<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php
// Array multidimensional
$miArrayMultidimensional = array(
    // Elemento 0
    array(
        "clave1" => "valor1",
        "clave2" => "valor2",
        "clave3" => "valor3"
    ),

    // Elemento 1
    array(
        "clave1" => "valor4",
        "clave2" => "valor5",
        "clave3" => "valor6"
    ),

    // Elemento 2
    array(
        "clave1" => "valor7",
        "clave2" => "valor8",
        "clave3" => "valor9"
    )
);

// Acceder a elementos
echo $miArrayMultidimensional[0]["clave1"];  // Imprime "valor1"
echo $miArrayMultidimensional[1]["clave2"];  // Imprime "valor5"
echo $miArrayMultidimensional[2]["clave3"];  // Imprime "valor9"
?>
</div>
    
</body>
</html>