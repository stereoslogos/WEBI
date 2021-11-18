<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taller 3</title>
    </head>
    <body>
        <h3>6. Confeccione un sistema que capture la cantidad de cada alimento ordenado y calcule la cuenta total de cada mesa de acuerdo al precio de cada uno de los productos.</h3>
        <ul>
            <li>Hamburguesa sencilla ($ 8.000)</li>
            <li>Hamburguesa con queso ($ 10.000) </li>
            <li>Hamburguesa especial ($ 15.000)</li>
            <li>Papas fritas ($ 4.000) </li>
            <li>Refresco ($ 3.000) </li>
            <li>Postre ($ 2.000)</li>
        </ul>
        <p>Considere que el restaurante tiene 5 mesas y cada una representa un objeto del sistema. Utilice el constructor para fijar el precio de cada producto.</p>
    </body>
        

    <?php
        
        class Mesa{
            public $hS,$hQ,$hE,$pF,$refre,$postre;

            public function __construct($hS,$hQ,$hE,$pF,$refre,$postre){
                $this->hS = $hS;
                $this->hQ = $hQ;
                $this->hE = $hE;
                $this->pF = $pF;
                $this->refre = $refre;
                $this->postre = $postre;

                $this->hS = 8000;
                $this->hQ = 10000;
                $this->hE = 15000;
                $this->pF = 4000;
                $this->refre = 3000;
                $this->postre = 2000;
            }


            
        }

        $mesa1 = new Mesa($hS,$hQ,$hE,$pF,$refre,$postre);
        
		if (isset($_POST['btnOrdenar'])) {
			echo "";
		}else{
			echo "<form method='post'>";
			echo "<input type='text' name='numMesas' placeholder='# de mesas a atender'><br>
		<button name='btnOrdenar' type='submit'> Ordernar </button>";
			echo "</form>";
		}

		if (isset($_POST['numMesas'])) {
			$numero1 = $_POST['numMesas'];
			echo "<form method='post'>";
			for ($x=1; $x<=$numero1 ; $x++) {
                echo "Mesa #$x<br>";
				echo "<input type='number' name='posiciones1[]' placeholder='Hamb. sencilla".$x."'><br>";
			
				echo "<input type='number' name='posiciones2[]' placeholder='Hamb. con queso ".$x."'><br>";
			}
			echo "<button name='boton' type='submit'> Ordenar </button>";
			echo "</form>";
		}

		if (isset($_POST['posiciones1']) && isset($_POST['posiciones2'])) {
			$arreglo1 = $_POST['posiciones1'];
			$arreglo2 = $_POST['posiciones2'];
			$suma1 = 0;
			$suma2 = 0;

			echo "<strong>Total de la cuenta: </strong><br>";

			for($itera = 0; $itera < count($arreglo1); $itera++){
                echo "<br> Mesa # ".($itera+1)." <br>";
			 	 echo $arreglo1[$itera]." Hamb Sencilla"." + ". $arreglo2[$itera]." Hamb Queso". " = ".(($arreglo1[$itera] * $mesa1->hS) + ($arreglo2[$itera] * $mesa1->hQ)) ."<br>";
			}
			
		}
?>
</html>