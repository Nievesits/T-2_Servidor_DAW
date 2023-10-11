<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 

    //Crear e imprimir variables y tipos de datos

    $varEntero = 3;
    $varDecimal = 7.2;
    $varTexto = "Nieves";
    $varVerdadero = false;
    $varArray = array("true", "false");

    echo "Variable de tipo integer:  ".$varEntero."<br/>";
    echo "Variable de tipo float:  ".$varDecimal."<br/>";
    echo "Variable de tipo String:  ".$varTexto."<br/>";
    echo "Variable de tipo Booleano:  ".$varVerdadero."<br/>";
    echo "Variable de tipo Array:  ";
    print_r($varArray);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    //Tipos de datos con especificaciones

    echo "IMPRIMIR LAS VARIABLES CON ALGUNA ESPECIFICACIÓN";
    
    echo "<br/>";
    echo "<br/>";
 
    echo "La variable de tipo Booleano no imprime ningún valor:  ".$varVerdadero."<br/>";
    echo "La variable cadena de texto y la de tipo entero se concatenan en una sola línea: ".$varTexto.$varEntero."<br/>";
    echo " Los números decimales se muestran como enteros: ".intval($varDecimal)."<br/>";
    echo "El array contiene los valores booleanos: ";
    print_r($varArray);
    







    
    ?>
    
</body>
</html>