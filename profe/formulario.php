<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h3>ejercicio 12</h3>
	<form method="post">
		<?php  
			for ($i=1; $i<=5 ; $i++) { 
				echo "<input type='text' name='nombre".$i."' placeholder='nombre ".$i."'><br>";
			}
		?>
		<button name="boton" type="submit"> Enviar Datos </button>
	</form>
	<?php 

		$todos_los_nombres = array();
		if (isset($_POST['nombre1'])) {
			$nombre1 = $_POST['nombre1'];
			$nombre2 = $_POST['nombre2'];
			$nombre3 = $_POST['nombre3'];
			$nombre4 = $_POST['nombre4'];
			$nombre5 = $_POST['nombre5'];
			array_push($todos_los_nombres, $nombre1, $nombre2, $nombre3,$nombre4, $nombre5 );

				echo "total nombres: ". count($todos_los_nombres) ."<br>";
				for ($i=0; $i < count($todos_los_nombres); $i++) { 
					echo "los nombres son: ".$todos_los_nombres[$i] ."<br>";
				}
				
			}else{
			echo "no existen nombres";
		}
	?>
	<br><hr>
	<h3>ejercicio 13 y 14 y 15</h3>
	<form method="post">
		<?php  
			for ($x=1; $x<=4 ; $x++) { 
				echo "<input type='text' name='posicion".$x."' placeholder='posicion ".$x."'><br>";
				for ($y=1; $y <=2 ; $y++) { 
					echo "<input type='text' name='contenido".$x."-".$y."' placeholder='contenido posicion ".$x."-".$y."'><br>";
				}
			}
		?>
		<button name="boton" type="submit"> Enviar Datos </button>
	</form>
	<?php 
		if (isset($_POST['posicion1'])) {
			$marcas = array (
				$_POST['posicion1'] => array($_POST['contenido1-1'],$_POST['contenido1-2']),
				$_POST['posicion2'] => array($_POST['contenido2-1'],$_POST['contenido2-2']),
				$_POST['posicion3'] => array($_POST['contenido3-1'],$_POST['contenido3-2']),
				$_POST['posicion4'] => array($_POST['contenido4-1'],$_POST['contenido4-2'])
			);
		  
			foreach ($marcas as $marca => $motos) {
			 	echo "<p><b> Marca $marca </b></p>";
				foreach ($motos as $moto) {
					echo "<p> Moto $moto </p>";
				}
			 }
			 echo "<p>numero de elementos " .count($marcas). "</p>"; 
		}  
	 ?>
	 <br><hr>
	<h3>ejercicio 16</h3>
	<?php 
		//formulario pidiendo el numero del array
		if (isset($_POST['boton16'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='posiciones del array'><br>
		<button name='boton16' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// formulario con posiciones del array
		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='posicion[]' placeholder='posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// recibos los datos para procesarlos
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
	<br><hr>
	<h3>ejercicio 17</h3>
	<?php	
	//formulario pidiendo el numero del array
		if (isset($_POST['boton17'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='posiciones del array'><br>
		<button name='boton17' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// formulario con posiciones del array
		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='mas_posicion[]' placeholder='posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// recibos los datos para procesarlos
		if (isset($_POST['mas_posicion'])) {
			$mas_numeros = $_POST['mas_posicion'];
			echo "de los numeros: ";
			for($ite = 0; $ite < count($mas_numeros); $ite++){
				echo $mas_numeros[$ite] . ", ";
			}
			echo "<br>";
			echo "el primer numero es: " . reset($mas_numeros) ."<br>"; //array_key_first()
			echo "el ultimo numero es: " . end($mas_numeros) ."<br>"; //array_key_first(), 
			//$names[count($names)-1]
			$num_centro = count($mas_numeros) /2;
			echo "numero centro :" .  $mas_numeros[$num_centro];
		}

?>
<br><hr>
<h3>ejercicio 18</h3>
<?php	
	//formulario pidiendo el numero del array
		if (isset($_POST['boton18'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano' placeholder='posiciones del array'><br>
		<button name='boton18' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// formulario con posiciones del array
		if (isset($_POST['tamano'])) {
			$numero = $_POST['tamano'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero ; $x++) { 
				echo "<input type='text' name='posiciones[]' placeholder='posicion ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// recibos los datos para procesarlos
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
<br><hr>
<h3>ejercicio 19</h3>
<?php	
	//formulario pidiendo el numero del array
		if (isset($_POST['boton19'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='tamano1' placeholder='posiciones del array 1 y 2'><br>
		<button name='boton19' type='submit'> Enviar Datos </button>";
			echo "</form>";
		}
		// formulario con posiciones del array
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
		// recibos los datos para procesarlos
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
				//$suma1 += $arreglo1[$iterador]; 
				//$suma2 += $arreglo2[$iterador]; 
				$suma1 = $suma1 + $arreglo1[$iterador];
				$suma2 = $suma2 + $arreglo2[$iterador];
			}
			echo $suma1 ." + " . $suma2 . " = " . ($suma1 + $suma2);
		}
?>
<br><hr>
<h3>ejercicio 20</h3>
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
	<br><hr>
</body>
</html>
