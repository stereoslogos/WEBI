<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empleado</title>
    </head>
    <body>
        <hr>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <br>
            <br>
            <label for="salario">Salario</label>
            <input type="number" name="salario" id="salario" placeholder="Salario">
            <br>
            <input type="submit" value="Go">
        </form>
        <?php
        $nombre = $_GET['nombre'];
        $salario = $_GET['salario'];

        class Empleado{
            public $nombre;
            public $salario;

            public function show($nombre,$salario){
                $this->nombre=$nombre;
                $this->salario=$salario;
            }

            public function print(){
                echo $this->nombre." ";

                if($this->salario > 3000)
                    echo "Debe pagar impuestos";
                else
                    echo "No debe pagar impuestos";                
            }
        }
        $per = new Empleado();
        $per->show($nombre,$salario);
        $per->print();
        ?>

    </body>
</html>