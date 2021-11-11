<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taller 3</title>
    </head>
    <body>
        <form>
            <label for="temp">Temperatura °C:</label>
            <input type="float" name="temp" id="temp" placeholder="38.5">
            <select name="opc" id="opc">
                <option value="1">°F</option>
                <option value="2">°K</option>
            </select>
            <input type="submit" value="Convertir">
        </form>

        <?php
            $grados = $_GET['temp'];
            $opc = $_GET['opc'];

            class Temp{
                public float $grados;

                public function __construct($grados,$opc){
                    $this->grados = $grados;
                    $this->opc = $opc;
                }

                public function convertir(){
                    if($this->opc==1)
                        echo "Temperatura en grados Farenheit °".$this->grados = $this->grados + 32;
                    else
                        echo "Temperatura en grados Kelvin °".$this->grados = $this->grados + 273.15;
                }
            }

            $t = new Temp($grados,$opc);
            $t->convertir();
        ?>

    </body>
</html>