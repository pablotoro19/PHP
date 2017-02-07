<?php
//comentario de una sola linea

/*
comentario de 
mas de una linea
*/

//imprimir en pantalla
echo "Hola mundo";
echo "<br>Estoy aprendiendo<br> <h1>PHP</h1>";

//variables
$nombre = "Juan";
$apellido = "Perez";
//concatenación es con "."
echo "Hola"." ".$nombre." ".$apellido."</br>";

//sumas
$num1 = 5;
$num2 = 4;
$suma = $num1 + $num2;
echo "La suma es: ".$suma."</br>";
echo "La variable \$suma tiene el valor de $suma </br>";

//condicionantes
$modulo = $num2 % 2;
if($modulo == 0){
echo "El n&uacute;mero es Par </br>";
}
else{
     echo "l n&uacute;mero es Impar </br>";
}

//ciclo for
for ($i=0; $i <=10 ; $i++) { 
	echo $i."</br>";
}

?>