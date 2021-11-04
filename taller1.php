<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller #1</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            background-color: black;
            color: white;
            font-family: monospace;
            font-size: 15px;
            width: 90%;
        }
    </style>
</head>
<body>
    
</body>
</html>

<h1>Taller #1</h1>
<br>
<h2>1. Realiza el cálculo del salario que debe recibir un trabajador que gana 1'800.000 con un descuento del 8% por salud y 8% por pensión.</h2>

<?php
    $salario = 1800000;
    $descs = $salario * 0.08;
    $descp = $salario * 0.08;
    $neto = $salario - $descs - $descp;

    echo "Salario: $salario","<br>";
    echo "Descuento salud: $descs","<br>";
    echo "Descuento pensión: $descp","<br>";
    echo "Neto a pagar: ".neto($salario,$descp,$descs);

    function neto($salario,$descp,$descs){
        return $salario - $descs - $descp;
    }
?>

<hr>

<h2>2. Aplica la fórmula a = (b*h)/2 para calcular el área de un triángulo donde sus dimensiones son base 6 y altura 15.</h2>

<?php
   $a = 0;
   $b = 6;
   $h = 15;
   
   $a = ($b*$h)/2;
   
   echo "Base: 6 <br>";
   echo "Altura: 15 <br>";
   echo "Area: $a";
?>

<hr>

<h2>3. Realiza las operaciones de suma, resta, multiplicación, división, y módulo con solo 2 números.</h2>

<?php
    $num1 = 8;
    $num2 = 3;
    $suma=$num1+$num2;
    $resta=$num1-$num2;
    $mult=$num1*$num2;
    $div=$num1/$num2;
    $mod=$num1%$num2;

    echo "Primer numero: $num1<br>",
        "Segundo numero: $num2<br>",
        "<br>",
        "Suma: $suma<br>",
        "Resta: $resta<br>",
        "Multiplicacion: $mult<br>",
        "Division: $div<br>",
        "Modulo: $mod";
?>

<hr>

<h2>4. Determina si un número entero es par o impar y si es positivo o negativo.</h2>

<?php
    echo "Número: -1<br>";
    $num3=-1;

    if($num3 % 2 == 0){
        echo "El numero $num3 es par";
    }else{
        echo "El numero $num3 es impar";
    }

    echo "<br>";

    if($num3 > 0){
        echo "El numero $num3 es positivo";
    }else{
        echo "El numero $num3 es negativo";
    }
?>

<hr>

<h2>5. Determina si cual es el número mayor entre dos números enteros positivos.</h2>

<?php
    echo "Primer número: 9<br>";
    echo "Segundo número: 4<br>";
    $num4=9;
    $num5=4;
    
    if($num4 > $num5){
        echo "El número $num4 es el mayor<br>";
    }else{
        echo "El número $num5 es el mayor<br>";
    }
?>

<hr>
    
<h2>6. Realiza el código correspondiente para saber cual es el dia de la semana entre los número del 1 a 7</h2>

<?php
    $dias=array("","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
    
    for($i = 1; $i < count($dias); $i++){
        echo "($i) ".$dias[$i]."<br>";
    };
    ?>

<hr>
    
<h2>7. Se necesita clasificar la etapa de una persona solo pidiéndole como dato su edad. (Si la edad es menor de 18 es adolente), (si la edad está en el rango de 18 a 28 es adulto adolecente), (si la edad está entre 29 a 49 es adulto), (si la edad está entre 50 en adelante es adulto mayor). 
Mostrar en pantalla la etapa de la persona.</h2>

<?php
    echo "Edad: 17<br>";
    $edad=17;
    
    if ($edad < 18) {
        echo "Adolescente";
    } elseif($edad >= 18 && $edad <= 28){
        echo "Adulto adolescente";
    } elseif($edad >= 29 && $edad <= 49){
        echo "Adulto";
    } else{
        echo "Adulto mayor";
    }
?>

<hr>
        
<h2>8. Cree la tabla de multiplicar de cualquier número dado del 1 al 12.</h2>

<?php
    for ($c=1; $c <= 12; $c++) {
        echo "Tabla del ".$c."<br>";
        for ($i=1; $i <= 10; $i++) { 
            $mult = $i*$c;
            echo "$i"." x ".$c." = "."($mult)"."<br>";
        }
        echo "<br>";
    }
?>

<hr>
        
<h2>9. Cree la tabla de multiplicar de cualquier número dado del 1 al 12 de manera descendente.</h2>

<?php
    for ($c=12; $c <= 12 && $c > 0; $c--) {
        echo "Tabla del ".$c."<br>";
        for ($i=10; $i <= 10 && $i >0; $i--) { 
            $mult = $i*$c;
            echo "$i"." x ".$c." = "."($mult)"."<br>";
        }
        echo "<br>";
    }
?>

<hr>
        
<h2>10. Cree un ciclo que cuente del 1 al 30 de 3 en 3.</h2>

<?php
    for ($i=1; $i <= 30; $i++) { 
        if ($i%3==0) {
            echo "$i ";
        }
    }
?>

<hr>
        
<h2>11. Cree un ciclo que cuente del 1 al 30 de 3 en 3 de manera regresiva.</h2>

<?php
    for ($i=30; $i <= 30 && $i > 0; $i--) { 
        if ($i%3==0) {
            echo "$i ";
        }
    }
?>

<hr>
        
<h2>12. Cree un array con 3 elementos y después utilizando la función array_push() agregue 2 elementos más, muestre en pantalla los elementos con un ciclo.</h2>

<?php
    $mercado=array("Aguacate","Plátano","Papa");
    array_push($mercado,"Tomate","Lechuga");
    

    foreach ($mercado as $value) {
        print_r($value." <br>");
    }
?>

<hr>
        
<h2>13.  Cree un array asociativo con 4 elementos y después muestre en pantalla el número de elementos con un ciclo foreach.</h2>

<?php
    $bikes = array(
        "bike1"=>"Kawasaki",
        "bike2"=>"Suzuki",
        "bike3"=>"Ducati",
        "bike4"=>"Yamaha"
    );

    foreach($bikes as $bike){
        echo "$bike"."<br>";
    }
?>

<hr>
        
<h2>14.  Cree un array multidimensional con 4 elementos y después muestre en pantalla el número de elementos con un ciclo anidado.</h2>

<?php
    $guitars = array(
        array('Telecaster','Fender',2500000),
        array('Stratocaster','Fender',3100000),
        array('SG','Epiphone',1300000),
        array('Thunderbird','Gibson',2000000)
    );

    for ($row = 0; $row < 4; $row++) {
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$guitars[$row][$col]."</li>";
            }
            echo "</ul>";
    }
?>

<hr>
        
<h2>15. Cree un array multidimensional asociativo con 4 elementos y después muestre en pantalla el número de elementos con un ciclo foreach anidado.</h2>

<?php
    $pedales = array(
        'Flanger' => array(
            'marca' => "Boss",
            'precio'  => 1200000
        ),
        'Distortion' => array(
            'marca' => "Electro-harmonix",
            'precio'  => 1500000
        ),
        'Delay' => array(
            'marca' => "Boss",
            'precio'  => 1800000
        ),
        'Whammy' => array(
            'marca' => "Digitech",
            'precio'  => 2000000
        )
    );
     
    foreach($pedales as $producto => $detalles)
    {
        echo "<h3> $producto </h3>";
     
        foreach($detalles as $indice => $valor)
        {
            echo "<p> $indice:$valor </p>";
        }
    }
?>

<hr>
        
<h2>16.  Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22]. mostrar en pantalla cuantos y cuales son números pares e impares.</h2>

<?php
    $nums = array(3, 5, 9, 10, 35, 42, 12, 22);
    $pares = NULL;
    $impares = NULL;
    $g = 1;
    $f = 1;

    for ($i=0; $i < count($nums); $i++) { 
        if (($nums[$i]%2)==0) {
            echo "$nums[$i] par<br>";
            $pares = $f++;
        }else{
            echo "$nums[$i] impar<br>";
            $impares = $g++;
        }
    }

    echo "Cantidad de números pares: $pares<br>";
    echo "Cantidad de números impares: $impares";
?>

<hr>
        
<h2>17. Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22, 25]. mostrar en pantalla el primer número, el último número y el número del centro.</h2>

<?php
    $nums2 = array(3, 5, 9, 10, 35, 42, 12, 22, 25);
    $half = count($nums2)/2;
    echo "Primer número: ".reset($nums2)."<br>";
    echo "Número central: ".$nums2[$half]."<br>";
    echo "Último número: ".end($nums2);
?>

<hr>
        
<h2>18. Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22, 25]. mostrar en pantalla los elementos en posiciones impares y los pares.</h2>

<?php
    $nums3 = array(3, 5, 9, 10, 35, 42, 12, 22, 25);

    for ($i=0; $i < count($nums3); $i++) { 
        if (($nums3[$i]%2)==0) {
            echo "Posicion: $i par<br>";
            $pares = $f++;
        }else{
            echo "Posicion: $i impar<br>";
            $impares = $g++;
        }
    }
?>

<hr>
        
<h2>19. Arreglo 1 [3, 5, 9, 10, 35, 42], arreglo 2 [9, 15, 7, 1, 22, 2], de los arreglos anteriores sumar los elementos del arreglo 1 y 2, mostrar el resultado en pantalla y sumar el total del arreglo 1 y 2 y mostrarlo en pantalla.</h2>

<?php
    $nums4 = array(3, 5, 9, 10, 35, 42);
    $nums5 = array(9, 15, 7, 1, 22, 2);
    $totalel = array();
    $totalar = array();

    for($i = 0; $i < count($nums5); $i++) {
        $totalel[] = $nums4[$i] + $nums5[$i];
    }

    $totalar = (array_sum($nums4)+array_sum($nums5));

    echo "Suma entre elementos de los array:<br>";
    var_dump($totalel);
    echo "<br>Suma total de los array:<br>".$totalar;
?>

<hr>
        
<h2>20. crear una función que reciba como parámetro el nombre y muestre en pantalla “el nombre digitado es (nombre)” la función debe validar que no se pasen números como parámetros,  si ese es el caso debe mostrar en pantalla “debe digitar un nombre válido”. </h2>

<?php
    $name = "sebas";
    $res = NULL;

    function imprimir($name){
        if(is_numeric($name)){
            $res = "El nombre digitado es: ".$name;
        }else{
            $res = "Debe digitar un nombre válido";
        }
        return $res;
    }
    echo imprimir($name); 
?>

<hr>
        
<h2>21.  crear una función que reciba como parámetro el 2 números y me imprima en pantalla las operaciones de suma, resta, multiplicación y división,  la función debe validar que se pase un número entero, si ese es el caso debe mostrar en pantalla “debe digitar dos números válidos”. </h2>

<?php
        $n1 = 5;
        $n2 = 4;
        $suma=NULL;
        $resta=NULL;
        $multipli=NULL;
        $divi=NULL;

        echo "Primer número: $n1<br>Segundo número: $n2<br>";

        function ops($n1,$n2){
            if (is_integer($n1) && is_integer($n2)) {
                $suma = $n1 + $n2;
                $resta = $n1 - $n2;
                $multipli = $n1 * $n2;
                $divi = $n1 / $n2;

                return "Suma: $suma - Resta: $resta - Multiplicación: $multipli - División: $divi.";
            }else{
                return "debe digitar dos números válidos";
            }
        }
    
        echo ops($n1,$n2);
?>