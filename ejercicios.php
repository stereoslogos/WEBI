<?php
    #No es necesario cerrar si es .php
    $nombre = $_GET["name"];
    $number = 28;

    echo "<p>Hey dude, this is text from echo</p>"."<hr>";
    print "Hey dude, this is text from print".$nombre." is my name and I'm ".$number;

    /* != and <> DIFF
        && and
        || or */

    echo "<h1>If</h1>";
    $tem = 12;

    if($tem > 10){
        echo "<hr>";
        echo "Freeeezing!";
    }else{
        echo "<hr>";
        echo "HOT IN HEA!";
    }

    //if ternario
    echo $tem > 9 ? "Cold" : "Hot";

    $condicion = "";
    $resultado = "";

    if ($condicion) {
        $resultado = 'verdadero';
    } else {
        $resultado = 'falso';
    }

    echo $resultado = $condicion ? 'verdadero' : 'falso';

    //Arrays
    echo "<h1>Arrays</h1>";

    $cars = array("Mazda","Ford","Mitsubishi");
    $bikes = ["Suzuki","Ducati","Kawasaki"];

    echo "<hr>";
    echo "Car is a: ".$cars[1]."<br>";
    echo "Bike is a: ".$bikes[2]."<br>";

    #Arrays asociativos
    $fruits = array(
        "color"=>"Red",
        "fruit"=>"Apple",
        2 => "numero"
    );
    echo "el Valor es: ".$fruits[2];

    #for
    echo "<h1>For</h1>";
    for($i = 0; $i < count($cars); $i++){
        echo "<br>".$cars[$i]."<br>";
    };

    #while
    echo "<h1>While</h1>";

    $i = 0;

    while($i < count($bikes)){
        echo "<br>".$bikes[$i]."<br>";
        $i++;
    }

    #for each
    echo "<h1>Foreach</h1>";

    foreach($cars as $car){
        echo "<br>".$car."<br>";
    }

    #Funciones
    echo "<h1>Funciones</h1>";

    $n1 = 4;
    $n2 = 5;
    $res = 0;

    function suma(){
        return $res = 4 + 5;
    }

    echo suma();
    echo "<br>";

    function minus($n1, $n2){
        return $res = $n1 - $n2;
    }

    function minus1(){
        global $n1,$n2;
        return $res = $n1 - $n2;
    }

    function minus2(){
        return $res = $GLOBALS['n1'] - $GLOBALS['n2'];
    }

    echo minus(10,6);
    echo minus1(10,5);
    echo minus2(10,4);

    /* EJERCICIOS */
    $num = [9,6,5,2,4];
    $menor = $num[0];

    for($i = 0; $i < count($num); $i++){
        if($num[$i] < $menor){
            $menor = $num[$i];
        }
        echo "<br>de los numeros ".$num[$i]."<br>";
    }
    echo "el numero menor es: ".$menor;

    echo min($num);

    $num = [9,6,5,2,4];
    $menor = 99999;

    //NUMERO MENOR
    for($i = 0; $i < count($num); $i++){
        if($menor > $num[$i]){
            $menor = $num[$i];
        }
        echo "<br>de los numeros ".$num[$i]."<br>";
    }
    echo "el numero menor es: ".$menor;

    //NUMERO MAYOR
    $num = [9,6,5,2,4];
    $mayor = 0;

    for($i = 0; $i < count($num); $i++){
        if($mayor < $num[$i]){
            $mayor = $num[$i];
        }
        echo "<br>de los numeros ".$num[$i]."<br>";
    }
    echo "el numero MAYOR es: ".$mayor;

    