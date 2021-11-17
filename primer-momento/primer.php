<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer momento WEB I</title>
</head>
<body>
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
    <!-- Realizar un programa que le permite al usuario escoger que operacion
    desea realizar entre suma, resta, division, mult y potencia
    Pidiendole al usuario dos numeros -->
    <h2>1. Realizar un programa que le permite al usuario escoger que operacion desea realizar entre suma, resta, division, mult y potencia pidiendole al usuario dos numeros</h2>

    <fieldset>
        <legend>Escoja la operación</legend>
            <form method="POST">
                <label for="n1">Primer número: </label>
                <input type="number" name="n1" required>
                <br><br>
                <label for="n2">Segundo número: </label>
                <input type="number" name="n2" required>
                <br><br>
                <label for="operaciones">Operaciones</label>
                <select name="operaciones" id="opr">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="División">División</option>
                    <option value="Multiplicación">Multiplicación</option>
                    <option value="Potencia">Potencia</option>
                </select>
                <input type="submit" name="enviar" value="Calcular">
            </form>
    </fieldset>
    <fieldset>
        <h3>Resultado:</h3>
    
    <?php
        if (isset($_POST["enviar"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $op = $_POST["operaciones"];
            switch ($op) {
                case 'Suma': $res = $n1 + $n2;
                            echo "La suma de $n1 + $n2 = $res";
                    break;
                case 'Resta': $res = $n1 - $n2;
                            echo "La resta de $n1 - $n2 = $res";
                    break;
                case 'División': $res = $n1 / $n2;
                            echo "La división de $n1 / $n2 = $res";
                    break;
                case 'Multiplicación': $res = $n1 * $n2;
                            echo "La multiplicación de $n1 x $n2 = $res";
                    break;
                case 'Potencia': $res = $n1 ** $n2;
                            echo "La potencia de $n1 ^ $n2 = $res";
                    break;
            }
        }
    ?>
    </fieldset>

    <hr>
    
    <!-- Realizar un programa que le permita al usuario determinar el numero
    de elementos de 2 arrays y se sumen los valores del primer array
    con el segundo y mostrar el total -->
    <h2>2. Realizar un programa que le permita al usuario determinar el numero de elementos de 2 arrays y se sumen los valores del primer array con el segundo y mostrar el total </h2>
  
    <fieldset>
        <form method='post'>
            <input type='text' name='tamano1' placeholder='Longitud de los arrays'><br>
            <button name='btn' type='submit'> Crear </button>
        </form>

        <?php
                if (isset($_POST['btn'])) {
                    echo "";
                }else{
                    
                }
                
                if (isset($_POST['tamano1'])) {
                    $numero1 = $_POST['tamano1'];
                    echo "<form method='post'>";
                    for ($x=1; $x<=$numero1 ; $x++) { 
                        echo "<input type='text' name='posiciones1[]' placeholder='Array 1 posicion ".$x."'><br>";
                    }
                    for ($x=1; $x<=$numero1 ; $x++) { 
                        echo "<input type='text' name='posiciones2[]' placeholder='Array 2 posicion ".$x."'><br>";
                    }
                    echo "<button name='boton' type='submit'> Crear </button>";
                    echo "</form>";
                }
                
                if (isset($_POST['posiciones1']) && isset($_POST['posiciones2'])) {
                    $arreglo1 = $_POST['posiciones1'];
                    $arreglo2 = $_POST['posiciones2'];
                    $suma1 = 0;
                    $suma2 = 0;
                    echo "Arrays: <br>";
                    for($itera = 0; $itera < count($arreglo1); $itera++){
                        echo $arreglo1[$itera] ." + ". $arreglo2[$itera]. " = ".($arreglo1[$itera] + $arreglo2[$itera]) ."<br>";
                    }
                    echo "<hr> <br>";
                    for ($iterador=0; $iterador < count($arreglo1) ; $iterador++) { 
                        $suma1 = $suma1 + $arreglo1[$iterador];
                        $suma2 = $suma2 + $arreglo2[$iterador];
                    }
                    echo $suma1 ." + " . $suma2 . " = " . ($suma1 + $suma2);
                }
        ?>
    </fieldset>
    <br><hr>

    <!-- Realizar un programa que calcule nomina de x empleados
    dados 2200000 salud 6% pension 4% agregar aux de trans de 106 al total -->
    <h2>3. Realizar un programa que calcule nomina de x empleados dados 2'200.000 salud 6% pension 4% agregar aux de trans de 106 al total</h2>
    
    <fieldset>
        <form>
            <label for="n">¿Cúal es el número de registros a ingresar?: </label>
            <input type="text" name="n">
            <input type="submit" value="Calcular">
        </form>

        <?php
            $n = $_GET['n'];

            if(isset($n)){
                $n = 0;
            }else{
                for ($i=1; $i <= $n; $i++) { 
                    $salario = 2200000;
                    $descs = $salario * 0.06;
                    $descp = $salario * 0.04;
                    $aux = 106000;
                    $neto = $salario + $aux - $descs - $descp;
    
                    echo "<br>Empleado $i <br>";
                    echo "Salario: $salario <br>";
                    echo "Descuento salud: $descs<br>";
                    echo "Descuento pensión: $descp<br>";
                    echo "Auxilio de transporte $aux<br>";
                    echo "Neto a pagar: $neto<br>";
    
                    // function neto($salario,$descp,$descs){
                    //     return $salario - $descs - $descp;
                    // }
                }
                
            }
        ?>
    </fieldset>
</body>
</html>