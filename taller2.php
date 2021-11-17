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

<form>
    Salario: <input type="text" name="salario">
    <input type="submit" value="Calcular">
</form>
<?php
    $salario = $_GET['salario'];
    $descs = $salario * 0.08;
    $descp = $salario * 0.08;
    $neto = $salario - $descs - $descp;

    echo "Descuento salud: $descs","<br>";
    echo "Descuento pensión: $descp","<br>";
    echo "Neto a pagar: ".neto($salario,$descp,$descs);

    function neto($salario,$descp,$descs){
        return $salario - $descs - $descp;
    }
?>

<hr>

<h2>2. Aplica la fórmula a = (b*h)/2 para calcular el área de un triángulo donde sus dimensiones son base 6 y altura 15.</h2>

<form>
    Base: <input type="text" name="b">
    <br>
    Altura: <input type="text" name="h">
    <input type="submit" value="Area">
</form>
<?php
   $a = 0;
   $b = $_GET['b'];
   $h = $_GET['h'];
   
   $a = ($b*$h)/2;
   
   echo "Base: $b<br>";
   echo "Altura: $h<br>";
   echo "Area: $a";
?>

<hr>

<h2>3. Realiza las operaciones de suma, resta, multiplicación, división, y módulo con solo 2 números.</h2>

<form>
    Primer número: <input type="text" name="num1">
    <br>
    Segundo número: <input type="text" name="num2">
    <input type="submit" value="Operaciones">
</form>
<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma=$num1+$num2;
    $resta=$num1-$num2;
    $mult=$num1*$num2;

    if (isset($num1)) {
        $div=$num1/$num2;
    }else{
        $num1=1;
        $num2=1;
    }
    
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

<form>
    Ingrese un número: <input type="text" name="num3">
    <input type="submit" value="Go">
</form>

<?php
    $num3 = $_GET["num3"];
    echo "Número: $num3<br>";

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

<form>
    Primer número: <input type="text" name="num4">
    <br>
    Segundo número: <input type="text" name="num5">
    <input type="submit" value="Go">
</form>
<?php
    $num4=$_GET["num4"];
    $num5=$_GET["num5"];
    echo "Primer número: $num4<br>";
    echo "Segundo número: $num5<br>";
    
    if($num4 > $num5){
        echo "El número $num4 es el mayor<br>";
    }else{
        echo "El número $num5 es el mayor<br>";
    }
?>

<hr>
    
<h2>6. Realiza el código correspondiente para saber cual es el dia de la semana entre los número del 1 a 7</h2>

<form>
    Ingrese un número: <input type="text" name="dias">
    <input type="submit">
</form>
<?php
    $dias=$_GET["dias"];
    
    switch ($dias) {
        case 1:echo "El día de la semana es: Lunes";
            break;
        case 2:echo "El día de la semana es: Martes";
            break;
        case 3:echo "El día de la semana es: Miercoles";
            break;
        case 4:echo "El día de la semana es: Jueves";
            break;
        case 5:echo "El día de la semana es: Viernes";
            break;
        case 6:echo "El día de la semana es: Sabado";
            break;
        case 7:echo "El día de la semana es: Domingo";
            break;
        default:
            echo "Ingrese un número entre 1 y 7";
            break;
    }
    ?>

<hr>
    
<h2>7. Se necesita clasificar la etapa de una persona solo pidiéndole como dato su edad. (Si la edad es menor de 18 es adolente), (si la edad está en el rango de 18 a 28 es adulto adolecente), (si la edad está entre 29 a 49 es adulto), (si la edad está entre 50 en adelante es adulto mayor). 
Mostrar en pantalla la etapa de la persona.</h2>

<form>
    Ingrese la edad: <input type="text" name="edad">
    <input type="submit" value="Go">
</form>
<?php
    $edad=$_GET["edad"];
    echo "Edad: $edad<br>";
    
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

<form>
    Ingrese un número: <input type="text" name="amult">
    <input type="submit" value="Go">
</form>
<?php
    $amult = $_GET["amult"];
    echo "Tabla del ".$amult."<br>";
    for ($i=1; $i <= 10; $i++) { 
        $mult = $i*$amult;
        echo "$amult"." x ".$i." = "."($mult)"."<br>";
    }
    echo "<br>";
?>

<hr>
        
<h2>9. Cree la tabla de multiplicar de cualquier número dado del 1 al 12 de manera descendente.</h2>

<form>
    Ingrese un número: <input type="text" name="rmult">
    <input type="submit" value="Go">
</form>

<?php
    $rmult = $_GET["rmult"];
    echo "Tabla del ".$rmult."<br>";
    for ($i=10; $i <= 10 && $i >0; $i--) { 
        $mult = $i*$rmult;
        echo "$rmult"." x ".$i." = "."($mult)"."<br>";
    }
    echo "<br>";
?>

<hr>
        
<h2>10. Cree un ciclo que cuente del 1 al 30 de 3 en 3.</h2>

<form>
    <input name="three" type="text" placeholder="Digita un numero a repetir">
    <input type="submit" value="Show">
</form>
<?php

    if(isset($_GET['three'])){
        $diez = $_GET['three'];
        for ($i=0; $i <= 30; $i+=$diez) { 
            echo "$i ";
        }
    }
?>

<hr>
        
<h2>11. Cree un ciclo que cuente del 1 al 30 de 3 en 3 de manera regresiva.</h2>

<form>
    <input name="threer" type="text" placeholder="Digita un numero a repetir">
    <input type="submit" value="Show">
</form>
<?php

    if(isset($_GET['threer'])){
        $diez = $_GET['threer'];
        for ($i=0; $i <= 30; $i+=$diez) { 
            echo "$i ";
        }
    }
?>

<hr>
        
<h2>12. Cree un array con 3 elementos y después utilizando la función array_push() agregue 2 elementos más, muestre en pantalla los elementos con un ciclo.</h2>

<form>
    <input type="text" name="mercado[]" placeholder="Escriba su lista">
    <input type="text" name="mercado[]" placeholder="Escriba su lista">
    <input type="text" name="mercado[]" placeholder="Escriba su lista">
    <input type="text" name="mercado[]" placeholder="Escriba su lista">
    <input type="text" name="mercado[]" placeholder="Escriba su lista">

    <input type="submit" value="Go">
</form>
<?php
    $mercado=$_GET["mercado"];
    

    foreach ($mercado as $value) {
        print_r($value." <br>");
    }
?>

<hr>
        
<h2>13.  Cree un array asociativo con 4 elementos y después muestre en pantalla el número de elementos con un ciclo foreach.</h2>
     
<h2>14.  Cree un array multidimensional con 4 elementos y después muestre en pantalla el número de elementos con un ciclo anidado.</h2>

<h2>15. Cree un array multidimensional asociativo con 4 elementos y después muestre en pantalla el número de elementos con un ciclo foreach anidado.</h2>

<form method="post">
		<?php  
			for ($x=1; $x<=4 ; $x++) { 
				echo "<input type='text' name='marca".$x."' placeholder='marca ".$x."'><br>";
				for ($y=1; $y <=2 ; $y++) { 
					echo "<input type='text' name='contenido".$x."-".$y."' placeholder='precio ".$x."-".$y."'><br>";
				}
			}
		?>
		<button name="boton" type="submit"> Enviar</button>
	</form>
	<?php 
		if (isset($_POST['marca1'])) {
			$marcas = array (
				$_POST['marca1'] => array($_POST['contenido1-1'],$_POST['contenido1-2']),
				$_POST['marca2'] => array($_POST['contenido2-1'],$_POST['contenido2-2']),
				$_POST['marca3'] => array($_POST['contenido3-1'],$_POST['contenido3-2']),
				$_POST['marca4'] => array($_POST['contenido4-1'],$_POST['contenido4-2'])
			);
		  
			foreach ($marcas as $marca => $guitarras) {
			 	echo "<p><b> Marca $marca </b></p>";
				foreach ($guitarras as $guitarra) {
					echo "<p> Guitarra $guitarra </p>";
				}
			 }
			 echo "<p>numero de elementos " .count($marcas). "</p>"; 
		}  
	 ?>
	 <br><hr>
   
<h2>16.  Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22]. mostrar en pantalla cuantos y cuales son números pares e impares.</h2>

<?php 

		if (isset($_POST['boton16'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='posiciones del array'><br>
		<button name='boton16' type='submit'> Pares o impares </button>";
			echo "</form>";
		}

		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='posicion[]' placeholder='posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Pares o impares </button>";
			echo "</form>";
		}

		if (isset($_POST['posicion'])) {
			$numeros = $_POST['posicion'];
			$numeros_pares = [];
			$numeros_imp = [];
			echo "De los numeros: ";
			for ($it=0; $it < count($numeros) ; $it++) { 
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
		}

	 ?>

<hr>
        
<h2>17. Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22, 25]. mostrar en pantalla el primer número, el último número y el número del centro.</h2>

<?php	

		if (isset($_POST['boton17'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='Posiciones del array'><br>
		<button name='boton17' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}

		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='mas_posicion[]' placeholder='Posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Posicion </button>";
			echo "</form>";
		}

		if (isset($_POST['mas_posicion'])) {
			$mas_numeros = $_POST['mas_posicion'];
			echo "de los numeros: ";
			for($ite = 0; $ite < count($mas_numeros); $ite++){
				echo $mas_numeros[$ite] . ", ";
			}
			echo "<br>";
			echo "el primer numero es: " . reset($mas_numeros) ."<br>";
            $num_centro = count($mas_numeros) /2;
			echo "numero centro :" .  $mas_numeros[$num_centro];
			echo "el ultimo numero es: " . end($mas_numeros) ."<br>";
		}

?>

<hr>
        
<h2>18. Del siguiente arreglo [3, 5, 9, 10, 35, 42, 12, 22, 25]. mostrar en pantalla los elementos en marcaes impares y los pares.</h2>

<?php	

		if (isset($_POST['boton18'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='posiciones del array'><br>
		<button name='boton18' type='submit'> Mostrar </button>";
			echo "</form>";
		}

		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='posiciones[]' placeholder='posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Mostrar </button>";
			echo "</form>";
		}

		if (isset($_POST['posiciones'])) {
			$mas_numeros = $_POST['posiciones'];
			$posiciones_pares = [];
			$posiciones_imp = [];
			echo "De los numeros: ";
			for($it = 0; $it < count($mas_numeros); $it++){
				echo $mas_numeros[$it]. ", ";
				if( $it % 2 == 0){
					array_push($posiciones_imp, $mas_numeros[$it]);
				}else{
					array_push($posiciones_pares, $mas_numeros[$it]);
					
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
		}

?>

<hr>
        
<h2>19. Arreglo 1 [3, 5, 9, 10, 35, 42], arreglo 2 [9, 15, 7, 1, 22, 2], de los arreglos anteriores sumar los elementos del arreglo 1 y 2, mostrar el resultado en pantalla y sumar el total del arreglo 1 y 2 y mostrarlo en pantalla.</h2>

<?php	

		if (isset($_POST['boton19'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano1' placeholder='posiciones del array 1 y 2'><br>
		<button name='boton19' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}

		if (isset($_POST['tamano1'])) {
			$numero1 = $_POST['tamano1'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero1 ; $x++) { 
				echo "<input type='text' name='posiciones1[]' placeholder='array 1 posicion ".$x."'><br>";
			}
			for ($x=1; $x<=$numero1 ; $x++) { 
				echo "<input type='text' name='posiciones2[]' placeholder='array 2 posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}

		if (isset($_POST['posiciones1']) && isset($_POST['posiciones2'])) {
			$arreglo1 = $_POST['posiciones1'];
			$arreglo2 = $_POST['posiciones2'];
			$suma1 = 0;
			$suma2 = 0;
			echo "Arreglo1 1 + Arreglo 2". "<br>";
			for($itera = 0; $itera < count($arreglo1); $itera++){
			 	 echo $arreglo1[$itera] ." + ". $arreglo2[$itera]. " = ".($arreglo1[$itera] + $arreglo2[$itera]) ."<br>";
			}
			echo "------------ <br>";
			for ($iterador=0; $iterador < count($arreglo1) ; $iterador++) { 

				$suma1 = $suma1 + $arreglo1[$iterador];
				$suma2 = $suma2 + $arreglo2[$iterador];
			}
			echo $suma1 ." + " . $suma2 . " = " . ($suma1 + $suma2);
		}
?>

<hr>
        
<h2>20. crear una función que reciba como parámetro el nombre y muestre en pantalla “el nombre digitado es (nombre)” la función debe validar que no se pasen números como parámetros,  si ese es el caso debe mostrar en pantalla “debe digitar un nombre válido”. </h2>

<form>
		<input type="text" name="nombre" placeholder="Escribe nombre"><br>
		<button type="submit"> Enviar Datos </button>
	</form>
	<?php
		if (isset($_GET['nombre'])) {

			function decirnombre()
			{
				$nombre = $_GET['nombre'];
				if (is_numeric($nombre)) {
					echo "debes escribir un nombre";
				}else{
					echo "mi nombre es: " .$nombre;
				}
				
			}

			decirnombre();
		}

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