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
            <label for="curr">Convertir de:</label>

            <select name="from" id="from">
                <option value="1">Pesos ₱</option>
                <option value="2">Dolares $</option>
                <option value="3">Euros €</option>
            </select>

            <input type="float" name="de" id="de" placeholder="4.50">

            <label for="curr"> a </label>

            <select name="to" id="to">
                <option value="1">Pesos ₱</option>
                <option value="2">Dolares $</option>
                <option value="3">Euros €</option>
            </select>

            <input type="submit" value="Convertir">
        </form>

        <?php
            $de = $_GET['de'];
            $from = $_GET['from'];
            $to = $_GET['to'];

            class Curr{
                public float $de;
                public $from,$to;

                public function __construct($de,$from,$to){
                    $this->de = $de;
                    $this->from = $from;
                    $this->to = $to;
                }

                public function curre(){
                    if($this->from==1 && $this->to==2)
                        echo "Dolares: $".$this->de = $this->de * 0.00026;
                    else if ($this->from==1 && $this->to==3)
                        echo "Euros: €".$this->de = $this->de * 0.00022;
                    else if ($this->from==1 && $this->to==1)
                        echo "No se convertirá de pesos a pesos";


                    if($this->from==2 && $this->to==1)
                        echo "Pesos: ₱".$this->de = $this->de * 3877.50;
                    else if ($this->from==2 && $this->to==3)
                        echo "Euros: €".$this->de = $this->de * 0.87;
                    else if ($this->from==2 && $this->to==2)
                        echo "No se convertirá de dolares a dolares";


                    if($this->from==3 && $this->to==1)
                        echo "Pesos: ₱".$this->de = $this->de * 4450.71;
                    else if ($this->from==3 && $this->to==2)
                        echo "Dolares: $".$this->de = $this->de * 1.15;
                    else if ($this->from==3 && $this->to==3)
                        echo "No se convertirá de euros a euros";
                }
            }

            $m = new Curr($de,$from,$to);
            $m->curre();
        ?>
    </body>
</html>