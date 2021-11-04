<?php
echo "one text on echo","<br>","another text on the same echo";
echo "<br>";

$numero = 5;
echo $numero;
echo "<br>";

$palabra = "Palabra";
echo $palabra;
echo "<br>";

$booleana = true;
echo $booleana;
echo "<br>";

$arreglo = array("rojo","amarillo");
echo $arreglo[0];
echo "<br>";

$arregloconpropiedades = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "$arregloconpropiedades[verdura1]";
echo "<br>";

$objetos = (object)["fruta1" => "pera","fruta2" => "manzana"];
echo $objetos->fruta1;
echo "<br>";
echo $objetos->fruta2;
?>