<?php

// ejercicios de edades con if
echo "<h2>Ejercicios con if </h2><br>";
echo "<h3>Ejercicio 1 </h3>";

/*
1.La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
2. Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
3. Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX".*/

//solucion con if y else
echo "Dia en Ingles: " . $dia_ingles = date('D') . "<br>";

if ( $dia_ingles == 'Mon' ) {
    echo 'Dia en Español: Lunes';
} else if ( $dia_ingles == 'Tue' ) {
   echo 'Dia en Español: Martes';
} else if ( $dia_ingles == 'Wed' ) {
   echo 'Dia en Español: Miércoles';
} else if ( $dia_ingles == 'Thu' ) {
   echo 'Dia en Español: Jueves';
} else if ( $dia_ingles == 'Fri' ) {
   echo 'Dia en Español: Viernes';
} else if ( $dia_ingles == 'Sat' ) {
   echo 'Dia en Español: Sábado';
} else { //por descarte es domingo
   echo 'Dia en Español: Domingo';
}
echo "<br>";

//solucion con la funcion o sentencia switch
//leer https://www.php.net/manual/es/control-structures.switch.php 
switch($dia_ingles){
	case $dia_ingles == 'Mon':
		echo 'Dia en Español: Lunes';
		break;
	case $dia_ingles == 'Tue':
		echo 'Dia en Español: Martes';
		break;
	case $dia_ingles == 'Wed':
		echo 'Dia en Español: Martes';
		break;
	case $dia_ingles == 'Thu':
		echo 'Dia en Español: Martes';
		break;
	case $dia_ingles == 'Fri':
		echo 'Dia en Español: Martes';
		break;
	case $dia_ingles == 'Sat':
		echo 'Dia en Español: Martes';
		break;
	default:
		echo 'Dia en Español: Domingo';
		break;
}

echo "<hr>";

echo "<h3>Ejercicio 2 </h3>";
/*
1. Se necesita clasificar la etapa de una persona solo pidiendole como dato su edad.
2. Si la edad es menor de 18 es adolente, 
si la edad esta en el rango de 18 a 28 es adulto adolecente, 
si la edad esta entre 29 a 49 es adulto.
si la edad esta entre 50 en adelante es adulto mayor
3. Mostrar en pantalla la etapa de la persona.
*/

$etapa = 33;
if ($etapa <= 17) {

	echo "la persona es adolecente.";

} else if ($etapa >= 18 && $etapa <= 28 ) {

	echo "la persona es adulto adolecente";

} else if ($etapa >= 29 && $etapa <= 49) {

	echo "la persona es adulto";
}else if ($etapa > 49){

	echo "la persona es adulto Mayor";

} 

echo "<br>";
echo "<hr>";

echo "<h3>Ejercicio 3 </h3>";
//ejercicio con if ternario

$haceFrio = 15;
$respuesta ="";
$temperatura = ($haceFrio<20) ? $respuesta = "Hace frio" : $respuesta = "No hace frio";
echo $respuesta;
echo "<br>";
echo "<hr>";

// ejercicios con arrays
echo "<h2>Ejercicios con array (vectores) </h2><br>";
echo "<br>";


$cars = array("Volvo", "BMW", "Toyota");
echo "Me gustan los carros " . $cars[0] . ", " . $cars[1] . " y " . $cars[2] . ".";
// Ejercicio array asociativo
$arreglo = [
    'keyStr1' => 'este',
	0 => 'es',
	'keyStr2' => 'un',
	1 => 'array',
	2 => 'asociativo'
];

echo "<h3>Ejercicio 1</h3>";
echo "$arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2]<br>";
echo "decirlo al revés lo dudo<br> ";
echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]<br>";
echo "¡Qué trabajo me ha costado!";
echo "<br>";
echo "<hr>";


// Ejercicio matriz asociativa
$ejercicio2 = [
    'Mexico' => [
      'Monterrey', 'Queretaro', 'Guadalajara'
    ],
    'Colombia' => [
      'Bogota', 'Cartagena', 'Medellin'
    ],
    'Peru' => [
      'Lima', 'Arequipa', 'Cuzco'
    ],
    'Argentina' => [
      'Buenos Aires', 'Rosario', 'Mar de Plata'
    ],
    'Venezuela' => [
      'Caracas', 'Valencia', 'Maracay'
    ]
  ];

echo "<h3>Ejercicio 2</h3>";  

foreach ($ejercicio2 as $pais => $ciudades) {
	echo "<br>El pais $pais de tiene como ciudades a ";
	foreach ($ciudades as $valor){
		echo "$valor ";
	}	
}
echo "<br>";
echo "<hr>";

// Ejercicio 3

echo "<h3>Ejercicio 3</h3>";

$ejercicio3 = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($ejercicio3); // Acomoda el arrego de mayor a menor
echo "<br>";
echo "Los tres valores mas altos son: ";
for ($i=0; $i < 3; $i++) { 
	echo "$ejercicio3[$i] ";
}
echo "<br>";
echo "Los tres valores mas bajos son: ";
$tam = count($ejercicio3); // Manda el tamaño del arreglo
for ($i=1; $i < 4; $i++) { 
	echo " ".$ejercicio3[($tam - $i)];
}

echo "<hr>";

$nombre;

function dimenombre($nombre){
	if (is_numeric($nombre)) {
		echo "debes escribir un nombre";
	}else{
		echo "mi nombre es: " .$nombre;
	}
	
}
dimenombre("2");

echo "<hr>";
//ejercicios taller 1.
//ejercicios 1
echo "<h2> Ejercicios taller </h2>";

$SalarioTrabajador = 1800000;
$Impuesto = 16; // Porcentaje
$SueldoReal = $SalarioTrabajador - (($SalarioTrabajador/100) * $Impuesto);
echo "Sueldo del trabajador sin impuesto:  $SalarioTrabajador <br>";
echo "Con el impuesto :$SueldoReal";

echo "<hr>";
//ejercicios 2

$Base=6;
$Altura=15;
$Area = ($Base * $Altura)/2;

echo ("El area del triangulo es: $Area");

echo "<hr>";
//ejercicios 3
$Num1=8;
$Num2=5;
echo "La suma de $Num1 y $Num2 es: " . ($Num1 + $Num2 ) . "<br>";
echo "La resta de $Num1 y $Num2 es:" . ($Num1 - $Num2 ) . "<br>";
echo "La multiplicación de $Num1 y $Num2 : " . ($Num1 * $Num2 ). "<br>";
echo "La division de $Num1 y $Num2: " . ($Num1 / $Num2 ). "<br>";
echo "El modulo de $Num1 y $Num2 es " . ($Num1 % $Num2 ). "<br>";

echo "<hr>";
//ejercicios 4
$numero = -8;
if($numero > 0){
   if($numero % 2 == 0){
       echo "El numero $numero es par";
   }else{
      echo "El numero $numero es impar";
   }
}else{
    echo "El Numero no es entero positivo";
}

echo "<hr>";
//ejercicios 5
$numero1=15; 
$numero2=30;
$mayor=0;
if ($numero1 > $numero2){
   $mayor=$numero1;
}else{
   $mayor=$numero2;
}
echo "Numero 1 es: $numero1 <br>";
echo "Numero 2 es: $numero2 <br>";
echo "El mayor es $mayor";

echo "<hr>";
//ejercicios 6
$numero=4;
if($numero>=1 && $numero<=7){
	switch($numero){
	   case 1: $dia = "Domingo"; break;
	   case 2: $dia = "Lunes"; break;
	   case 3: $dia = "Martes"; break;
	   case 4: $dia = "Miercoles"; break;
	   case 5: $dia = "Jueves"; break;
	   case 6: $dia = "Viernes"; break;
	   case 7: $dia = "Sábado"; break;
	}

	echo "El dia de la semana que le corresponde es $dia";
}else{
	echo "El Numero no está en el rango de 1 a 7";
}
echo "<hr>";
//ejercicios 7
$tabla=5;
for($x=1;$x<=12;$x++){
	echo "$tabla X $x =". $tabla * $x . "<BR>";
}

echo "<hr>";
//ejercicios 8
$tabla=5;
for($x=12;$x>=1;$x--){
	echo "$tabla X $x =". $tabla * $x . "<BR>";
}
echo "<hr>";
//ejercicios 9
$num=3;
for($i=1;$i<=30;$i+=3){
	echo "$num X $i =". $num * $i . "<BR>";
}
echo "<hr>";
//ejercicios 10
$num=3;
for($i=30;$i>=1;$i-=3){
	echo "$num X $i =". $num * $i . "<BR>";
}
echo "<hr>";
//ejercicios 11
$nombres = array("Peter", "Ben", "Joe");
array_push($nombres, "jossy", "carlos");
for($y= 0; $y < count($nombres); $y++) {
  echo "los nombres son: " . $nombres[$y];
  echo "<br>";
}

echo "<hr>";
//ejercicios 12
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}    

echo "<hr>";
//ejercicios 13
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);  
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}             

echo "<hr>";
//ejercicios 14 
$ejercicio2 = [
    'Mexico' => [
      'Monterrey', 'Queretaro', 'Guadalajara'
    ],
    'Colombia' => [
      'Bogota', 'Cartagena', 'Medellin'
    ],
    'Peru' => [
      'Lima', 'Arequipa', 'Cuzco'
    ],
    'Argentina' => [
      'Buenos Aires', 'Rosario', 'Mar de Plata'
    ],
    'Venezuela' => [
      'Caracas', 'Valencia', 'Maracay'
    ]
  ];

echo "<h3>Ejercicio 2</h3>";  

foreach ($ejercicio2 as $pais => $ciudades) {
	echo "$pais <br>";
	echo " ciudades :<br>";
	foreach ($ciudades as $valor){
		echo "* $valor <br>";
	}	
}
echo "<br>";
echo "<hr>";
//ejercicios 15  
$numeros = [3, 5, 9, 10, 35, 42, 12, 22];
$numeros_pares = [];
$numeros_imp = [];
echo "De los numeros: ";
for($it = 0; $it < count($numeros); $it++){
	echo $numeros[$it]. ", ";
	if( $numeros[$it] % 2 == 0){
		array_push($numeros_pares, $numeros[$it]);
	}else{
		array_push($numeros_imp, $numeros[$it]);
	}
}
echo "<br>";
echo "los pares son: " . count($numeros_pares)."<br>";
for($ite = 0; $ite < count($numeros_pares); $ite++){
	echo $numeros_pares[$ite] . ", ";
}
echo "<br>";
echo "los impares son: " . count($numeros_imp) ."<br>";
for($ite = 0; $ite < count($numeros_imp); $ite++){
	echo $numeros_imp[$ite] . ", ";
}
echo "<br>";
echo "<hr>";
//ejercicios 16
$mas_numeros = [3, 5, 9, 10, 35, 42, 12, 22, 25];
$mas_numeros2 = [3, 5, 9, 10, 35, 42, 12, 22];
echo "de los numeros: ";
for($ite = 0; $ite < count($mas_numeros); $ite++){
	echo $mas_numeros[$ite] . ", ";
}
echo "<br>";
echo "el primer numero es: " . reset($mas_numeros) ."<br>"; //array_key_first()
echo "el ultimo numero es: " . end($mas_numeros) ."<br>"; //array_key_first(), 
//$names[count($names)-1]
$num_centro = count($mas_numeros2) /2;
echo "numero centro :" .  $mas_numeros2[$num_centro];
echo "<br>";
echo "<hr>";

//ejercicios 17
$mas_numeros = [3, 5, 9, 10, 35, 42, 12, 22, 25];
$posiciones_pares = [];
$posiciones_imp = [];
echo "De los numeros: ";
for($it = 0; $it < count($mas_numeros); $it++){
	echo $mas_numeros[$it]. ", ";
	if( $it % 2 == 0){
		array_push($posiciones_pares, $mas_numeros[$it]);
	}else{
		array_push($posiciones_imp, $mas_numeros[$it]);
	}
}
echo "<br>";
echo "las posiciones pares son: " . count($posiciones_pares)."<br>";
for($ite = 0; $ite < count($posiciones_pares); $ite++){
	echo $posiciones_pares[$ite] . ", ";
}
echo "<br>";
echo "las posiciones impares son: " . count($posiciones_imp) ."<br>";
for($ite = 0; $ite < count($posiciones_imp); $ite++){
	echo $posiciones_imp[$ite] . ", ";
}
echo "<br>";
echo "<hr>";

//ejercicios 18
$arreglo1 = [3, 5, 9, 10, 35, 42];
$arreglo2 = [9, 15, 7, 1, 22, 2];
$suma1 = 0;
$suma2 = 0;
echo "Arreglo1 1 + Arreglo 2". "<br>";
for($itera = 0; $itera < count($arreglo1); $itera++){
 	 echo $arreglo1[$itera] ." + ". $arreglo2[$itera]. " = ".($arreglo1[$itera] + $arreglo2[$itera]) ."<br>";
}
echo "------------ <br>";
for ($iterador=0; $iterador < count($arreglo1) ; $iterador++) { 
	//$suma1 += $arreglo1[$iterador]; 
	//$suma2 += $arreglo2[$iterador]; 
	$suma1 = $suma1 + $arreglo1[$iterador];
	$suma2 = $suma2 + $arreglo2[$iterador];
}
echo $suma1 ." + " . $suma2 . " = " . ($suma1 + $suma2);

/*
function decirnombre()
{
	$nombre = $_REQUEST['nombre'];
	if (is_numeric($nombre)) {
		echo "debes escribir un nombre";
	}else{
		echo "mi nombre es: " .$nombre;
	}
	
}

decirnombre();
*/