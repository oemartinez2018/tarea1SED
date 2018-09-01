<?php

Include "funciones.php";


if ( isset( $_POST['submit'] ) ) {



$palabra = $_REQUEST['palabra'];
$llave = $_REQUEST['llave'];

echo   ' la palabra encriptada es :'.Encipher($palabra,$llave);


// muestra los resultados
echo ' La palabra es :' . $palabra .' ' .' la llave usada es: '. $llave;



}

if ( isset( $_POST['submit1'] ) ) {



$palabra1 = $_REQUEST['palabra1'];
$llave1 = $_REQUEST['llave1'];

echo   ' la palabra desencriptada es :'.Decipher($palabra1,$llave1);


// muestra los resultados
echo ' La palabra encriptada es :' . $palabra1 .' ' .' la llave usada es: '. $llave1;



}

if ( isset( $_POST['submit2'] ) ) {



$palabra2 = $_REQUEST['palabra2'];
$llave2 = $_REQUEST['llave2'];

echo   ' la palabra desencriptada es :'.EncipherEs($palabra2,$llave2);


//muestra los resultados
echo ' La palabra encriptada es :' . $palabra2 .' ' .' la llave usada es: '. $llave2;

}



if ( isset( $_POST['submit3'] ) ) {



$palabra3= $_REQUEST['palabra3'];
$llave3 = $_REQUEST['llave3'];

echo   ' la palabra desencriptada es :'.DescipherEs($palabra3,$llave3);


// muestra los resultados
echo ' La palabra encriptada es :' . $palabra3 .' ' .' la llave usada es: '. $llave3;



}






?>