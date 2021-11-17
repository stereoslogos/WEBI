<?php
    /*$nombre = "Jossy";

        //arrays
    $nombres = array("Carlos", "Luis", "Julian");
    array_push($nombres,"Maria","Jose");

    $carros = array("Nissan","Chevrolet","Toyota");
    $motos = array("Kawasaki","AKT","Honda","Suzuki");
    //for
    for($i = 0; $i < count($nombres); $i++ ){
        echo $nombres[$i] . "<br>";
    }

    //while
    $x = 0;
    while($x < count($carros)){
        echo $carros[$x] . "<br>";
        $x++;
    }

    foreach( $motos as $moto  ){
        echo $moto . "<br>";
    }

  // imprimir el numero menor
  $numeros = array(4,6,7,2,9);
    $menor = 999;
    for($i = 0; $i < count($numeros); $i++ ){
        if($numeros[$i] < $menor ){
           $menor = $numeros[$i];
        }
    }
    echo " Menor " . $menor . "<br>";
*/

$motos = ['Kawazaki', '12',34];
array_push($motos, 'Yamaha', 'Honda');
//echo count($motos);

//concatenar
echo "Hay ". count($motos) . " Elemetos en el Array. <br>";
$marcas = count($motos);
echo "<h1> Hay  $marcas Elemetos en el Array. </h1>";
//ejecutar codigo js
//echo '<script> alert("Hola desde PHP")  </script>';
//arrays asociativos
$planetas = array(
        "nombre" => "Jupiter",
        2 => "Mercurio",
        "planeta"=> "saturno",
        "21"=>"Tierra"
);
//echo $planetas["2"] . "<br>";
echo $planetas[2] . "<br>";
//ciclo foreach
foreach( $planetas as $planeta){
    echo $planeta ."<br>";
}
//if
echo "con if normal <br>";
$numero = 8;
if( $numero > 7 ){
    echo " El numero $numero es mayor <br>";
}else{
    echo " El numero $numero es menor <br>";
}
//if ternario
echo "con if ternario <br>";
echo $numero > 10 ? " El numero $numero es mayor <br>" : " El numero $numero es menor <br>";

echo "<hr>";
//ejercicio
echo date('D') . "<br>";

if( date('D') == "Mon"){
    echo "es Lunes";
}else if(date('D') == "Tue"){
    echo "es Martes";
}else if(date('D') == "Wed"){
    echo "es Miercoles";
}else if(date('D') == "Thu"){
    echo "es Jueves";
}else if(date('D') == "Fri"){
    echo "es viernes";
}else{
    echo "es fin de semana";
}
echo "<hr>";

//sentecia switch
switch( date('D') ){

    case date('D') == "Mon" :  
        echo "es Lunes";
    break;
    case date('D') == "Tue" :  
        echo "es Martes";
    break;
    case date('D') == "Wed" :
        echo "es Miercoles";
    break;
    case date('D') == "Thu" :
        echo "es Jueves";
    break;
    case date('D') == "Fri" :
        echo "es viernes";
    break;
    default:
        echo "es fin de semana";
    break;
}
echo "<hr>";
echo "<p> Array Multidimencional</p>";
//array Multidimencional o Matriz
$paises = array(
    "colombia"=> array("Bogota", "Medellin", "Cali"),
    "peru"=> array("Lima", "Piura", "ica"),
    "Brazil"=> array("Brasilia", "Saopablo", "Rio")
);

echo $paises["Brazil"][2] ."<br>";

foreach( $paises as $pais => $ciudades){
    echo "Pais :" . $pais . "<br>";
        echo "ciudades:  <br>";
    foreach( $ciudades as $ciudad){
        echo "* " . $ciudad . "<br>";
    }
}
//ambitos de varibles y funciones

$nombre = "Jossy";
function dimenombre(){
    global $nombre;
    echo "el nombre es" . $nombre;
}

dimenombre();